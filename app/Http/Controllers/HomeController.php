<?php

namespace App\Http\Controllers;

use App\Models\Template;
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
        return view('home', ['templates' => Template::all()]);
    }

    public function show()
    {
        return view('home', ['template' => Template::show()]);
    }
}
