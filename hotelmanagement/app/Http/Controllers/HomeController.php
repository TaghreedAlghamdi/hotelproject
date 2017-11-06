<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Debugbar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Debugbar::info("hello");
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Debugbar::info("hello");
        return view('home');
    }
}
