<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Closing;
use Illuminate\Http\Request;

class ClosingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $previousUrl = strtok(url()->previous(), '?');
        $lead = Lead::find($input['lead_id']);
        
        if (empty($lead))
            return redirect()->to($previousUrl . '?' . http_build_query(['show_stage' => $lead->stage_id]));

        $closing = Closing::create($input);
        $lead->closing_id = $closing->id;
        $lead->stage_id = 4;
        $lead->save();
        
        return redirect()->to($previousUrl . '?' . http_build_query(['show_stage' => 4]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $input = $request->all();
        $previousUrl = strtok(url()->previous(), '?');
        $lead = Lead::find($input['lead_id']);
        $closing = Closing::find($id);
        
        if (empty($lead) || empty($closing))
            return redirect()->to($previousUrl . '?' . http_build_query(['show_stage' => $lead->stage_id]));
        
        $closing->update($input);
        return redirect()->to($previousUrl . '?' . http_build_query(['show_stage' => $lead->stage_id]));
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
