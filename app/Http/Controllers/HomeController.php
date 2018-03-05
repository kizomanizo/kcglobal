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
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['client', 'seller', 'admin']);
        if ($request->user()->hasRole('admin')) {
            return view('items/index');
        }
        else {
            return view('auction');
        }
        // return view('home');
    }

}