<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        return view('dashboard');

    }

    public function memberSearch()
    {
//        return view('home');
        return view('member_search');

    }

    public function transmissionHistory()
    {
//        return view('home');
        return view('transmission_history');

    }
}
