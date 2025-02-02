<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins      = User::role('admin')->get();
        $supervisors = User::role('supervisor')->get();
        $salesmen    = User::role('salesman')->get();
        $clients     = Client::where('role', 'client')->get();
        
        return view('manage-users', [
            'admins' => $admins,
            'supervisors' => $supervisors,
            'salesmen' => $salesmen,
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($role)
    {
        $create_user = in_array($role, array('admin', 'supervisor', 'salesman')) 
                            ? true 
                            : false;       
        return view('create-user', ['create_user' => $create_user, 'role' => $role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $role)
    {
        $rules = [
            'name' => 'required|max:127',
            'phone' => 'required|max:64',
            'country' => 'required|required:127',
            'address' => 'required|required:127'
        ];
        
        $input = $request->all();
        $input['role'] = $role;
        $input['password']  = isset($input['password']) ? Hash::make($input['password']) : null;
        $input['api_token'] = Str::random(60);

        switch ($role) {
            case 'admin':
            case 'salesman':
            case 'supervisor':
                $rules = array_merge($rules, ['email' => 'required|email|max:127|unique:users,email', 'password' => 'required']);
                Validator::make($request->all(), $rules)->validate();
                $client = Client::create($input);
                $input['client_id'] = $client->id;
                $user = User::create($input);
                break;
            case 'client':
                $rules = array_merge($rules, ['email' => 'required|email|max:127']);
                Validator::make($request->all(), $rules)->validate();
                Client::create($input);
                break;
            default:
                break;
        }

        if (isset($user))
            $user->assignRole([$role]);
        
        return redirect()->route('users.index')->with(['message' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $role
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($role, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $role
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($role, $id)
    {
        $create_user = in_array($role, array('admin', 'supervisor', 'salesman')) 
                            ? true 
                            : false;
        
        switch ($role) {
            case 'admin':
            case 'salesman':
            case 'supervisor':
                $user = User::role($role)->where('id', $id)->first();
                break;
            case 'client':
                $user = Client::where('id', $id)->where('role', $role)->first();
                break;
            default:
                break;
        }

        if ($user) {
            $input = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'phone' => ($user->client) ? $user->client->phone : $user->phone,
                'country' => ($user->client) ? $user->client->country : $user->country,
                'address' => ($user->client) ? $user->client->address : $user->address
            ];
        } else {
            return redirect()->route('users.index')->with(['message' => 'failed']);
        }

        return view('create-user', [
            'create_user' => $create_user, 
            'role' => $role, 
            'user' => $input
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $role
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role, $id)
    {
        $input = $request->all();
        $input['role'] = $role;
        $input['password']  = isset($input['password']) ? Hash::make($input['password']) : null;
        
        switch ($role) {
            case 'admin':
            case 'salesman':
            case 'supervisor':
                $user = User::role($role)->where('id', $id)->first();
                break;
            case 'client':
                $user = Client::where('id', $id)->where('role', $role)->first();
                break;
            default:
                break;
        }

        if ($user) {
            $user->update($input);
            if (isset($user->client))
                $user->client->update($input);
        } else {
            return redirect()->route('users.index')->with(['message' => 'failed']);
        }
        
        if (strpos(url()->previous(), 'lead') !== false)
            return redirect()->to(strtok(url()->previous(), '?'));

        return redirect()->route('users.index')->with(['message' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $role
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($role, $id)
    {
        
        switch ($role) {
            case 'admin':
            case 'salesman':
            case 'supervisor':
                $user = User::role($role)->where('id', $id)->first();
                break;
            case 'client':
                $user = Client::where('id', $id)->where('role', $role)->first();
                break;
            default:
                break;
        }

        if ($user) {
            if (isset($user->client))
                $user->client->delete();
            $user->delete();
        } else {
            return redirect()->route('users.index')->with(['message' => 'failed']);
        }

        return redirect()->route('users.index')->with(['message' => 'success']);
    }
}
