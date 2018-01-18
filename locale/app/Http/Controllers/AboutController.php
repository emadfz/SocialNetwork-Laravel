<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAbout()
    {   $active = 'about';
        return view('sections.about',compact('active'));
    }

}
