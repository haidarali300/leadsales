<?php

namespace App\Http\Controllers;

use App\Models\LeadState;
use App\Models\Lead;
use App\Models\User;
use App\Models\Origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date_start = $request->get('date-start');
        $date_end = $request->get('date-end');

        $origins         = Origin::select(["origins.id", "origins.name", DB::raw("COUNT(leads.id) as total"), "origins.description", "leads.created_at"])
                                ->leftJoin('leads', 'leads.origin_id', 'origins.id')
                                ->when($date_start && $date_end, function($q) use ($date_start, $date_end) {
                                    return $q->whereBetween('leads.created_at', [$date_start, $date_end]);
                                })
                                ->groupBy("origins.name")
                                ->get();

        $origins_all      = Origin::all();

        $number_of_leads  = Lead::when($date_start && $date_end, function($q) use ($date_start, $date_end) {
                                    return $q->whereBetween('created_at', [$date_start, $date_end]);
                                })->count();
        $successful_leads = Lead::where('lead_state_id', LeadState::where('name', 'Closed')->first()->id)
                                ->when($date_start && $date_end, function($q) use ($date_start, $date_end) {
                                    return $q->whereBetween('created_at', [$date_start, $date_end]);
                                })->count();
        $lost_leads       = Lead::where('lead_state_id', LeadState::where('name', 'Lost')->first()->id)
                                ->when($date_start && $date_end, function($q) use ($date_start, $date_end) {
                                    return $q->whereBetween('created_at', [$date_start, $date_end]);
                                })->count();
        $users            = User::role('salesman')->get();

        return view('stats', [
            'number_of_leads' => $number_of_leads,
            'successful_leads' => $successful_leads,
            'lost_leads' => $lost_leads,
            'users' => $users,
            'origins' => $origins,
            'origins_all' => $origins_all
        ]);
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
        //
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
