<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin'))
            return view("admin-menu");
        if ($user->hasRole('salesman'))
            return view("salesman-menu");
        if ($user->hasRole('supervisor'))
            return view("supervisor-menu");
        return view("home");
    }
}
