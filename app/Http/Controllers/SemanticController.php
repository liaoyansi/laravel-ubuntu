<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemanticController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        return view('semantic.index');
    }
}
