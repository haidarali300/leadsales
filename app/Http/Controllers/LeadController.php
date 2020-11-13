<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Origin;
use App\Models\Lead;
use App\Models\Stage;
use App\Models\Client;
use App\Models\LeadState;
use App\Models\QualityCriteria;
use Illuminate\Http\Request;
use App\Http\Requests\LeadCreate;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $active = Lead::where('lead_state_id', 1)
                        ->when($user->hasRole('salesman'), function($q) use ($user) {
                            return $q->where('salesman_id', $user->id);
                        })
                        ->when($user->hasRole('supervisor'), function($q) use ($user) {
                            return $q->where('supervisor_id', $user->id);
                        })->get();
        $lost = Lead::where('lead_state_id', 2)
                        ->when($user->hasRole('salesman'), function($q) use ($user) {
                            return $q->where('salesman_id', $user->id);
                        })->when($user->hasRole('supervisor'), function($q) use ($user) {
                            return $q->where('supervisor_id', $user->id);
                        })->get();
        $closed = Lead::where('lead_state_id', 3)
                        ->when($user->hasRole('salesman'), function($q) use ($user) {
                            return $q->where('salesman_id', $user->id);
                        })->when($user->hasRole('supervisor'), function($q) use ($user) {
                            return $q->where('supervisor_id', $user->id);
                        })->get();

        return view('view-lead', [
            'active' => $active,
            'lost' => $lost,
            'closed' => $closed
        ]);
    }

    public function new()
    {
        $user = Auth::user();
        $leads = Lead::where('salesman_id', $user->id)
                     ->where('stage_id', 1)
                     ->get();

        return view('view-new-leads', [
            'leads' => $leads
        ]);
    }

    /**
     * 
     * 
     */
    public function lost($id)
    {
        $lead = Lead::where('id', $id)
                      ->first();
        $lead->lead_state_id = 2;
        $lead->save();
        return redirect()->route('leads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = User::role('supervisor')->get();
        $salesmen = User::role('salesman')->get();
        $categories = Category::where('active', 1)->get();
        $origins = Origin::where('active', 1)->get();
        
        return view('create-lead', [
            'supervisors' => $supervisors,
            'salesmen' => $salesmen,
            'categories' => $categories,
            'origins' => $origins
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LeadCreate  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeadCreate $request)
    {
        $stage = Stage::where('name', 'contact')->first();
        $lead_state = LeadState::where('name', 'active')->first();

        $input = $request->all();
        $input['role'] = 'client';
        $input['salesman_id'] = (isset($input['salesman_id'])) ? $input['salesman_id'] : Auth::id();
        $path = $request->file('image')->store('leads');
        $input['image'] = "storage/" . $path;
        $client = Client::create($input);

        $input['stage_id'] = $stage->id;
        $input['client_id'] = $client->id;
        $input['lead_state_id'] = $lead_state->id;

        $lead = Lead::create($input);
        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        $categories = Category::where('active', 1)->get();
        $origins = Origin::all();
        $supervisors = User::role('supervisor')->get();
        $salesmen = User::role('salesman')->get();
        $qualityCriterias = QualityCriteria::where('active', 1)->get();

        return view('lead', [
            'lead' => $lead,
            'categories' => $categories,
            'origins' => $origins,
            'supervisors' => $supervisors,
            'salesmen' => $salesmen,
            'qualityCriterias' => $qualityCriterias
        ]);
    }

    /**
     * 
     * 
     */
    public function store_qualities(Request $request, Lead $lead)
    {
        $input = $request->except('_token');
        $previousUrl = strtok(url()->previous(), '?');

        $sync_data = [];
        foreach ($input as $key => $value)
            $sync_data[$key] = ['rate' => $value];

        $lead->qualityCriterias()->sync($sync_data);
        $lead->stage_id = 5;
        $lead->lead_state_id = 3;
        $lead->save();

        return redirect()->to($previousUrl . '?' . http_build_query(['show_stage' => 5]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
