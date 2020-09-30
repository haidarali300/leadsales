<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class UserAPIController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function client(Request $request)
    {
        $input = $request->all();
        $input['role'] = 'client';
        try {
            $client = Client::create($input);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'data' => [], 'message' => $th->getMessage()], 400);
        }
        return response()->json(['status' => true, 'data' => $client, 'message' => "Client created successfully"]);
    }
}
