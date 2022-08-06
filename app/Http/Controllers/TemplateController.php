<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['templates'] = Template::all();
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('template.create');
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
        $request->validate([
            'title' => 'required',
            'cat_id' => 'required',
            'content' => 'required',
            'template' => 'required'
        ]);
        $template = new Template;
        $template->name = $request->title;
        $template->cat_id = $request->cat_id;
        $template->template = $request->template;
        $template->content = $request->content;
        $template->save();
        return redirect()->route('home')
            ->with('success', 'Template has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
        return view('template.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
        return view('template.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'cat_id' => 'required',
            'content' => 'required',
            'template' => 'required'
        ]);
        $template = Template::find($id);
        $template->name = $request->title;
        $template->cat_id = $request->cat_id;
        $template->template = $request->template;
        $template->content = $request->content;
        $template->save();
        return redirect()->route('home')
            ->with('success', 'Template has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
        $template->delete();
        return redirect()->route('home')
            ->with('success', 'Template has been deleted successfully');
    }
}