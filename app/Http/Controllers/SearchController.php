<?php

namespace App\Http\Controllers;

use App\Models\Template;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //s
    public function index(Request $request)
    {
        $search = $request->input('search');
        //
        // $data['template'] =  Template::search($search, ['title' => 20, 'content' => 10,]);
        $data['template'] =  Template::all();
        // return view('search', $data);
        return view('home', ['templates' => Template::all()]);
    }
}
