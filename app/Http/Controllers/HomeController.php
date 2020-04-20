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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function whoweare()
    {
        return view('whoweare');
    }


     public function virtual()
    {
        return view('virtualTour');
    }

     public function facilityDevelopment()
    {
        return view('facilityDevelopment');
    }

    public function parentsPortal()
    {
        return view('parentsPortal');
    }
     
     public function boardofdirectors()
    {
        return view('boardofdirectors');
 
    }

    public function schoolFacility()
    {
        return view('schoolFacility');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function earlyYears()
    {
        return view('earlyYears');
    }

    


     public function leadershipteam()
    {
        return view('leadershipteam');
    
    }


    
}
