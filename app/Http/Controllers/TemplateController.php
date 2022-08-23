<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $data['categories'] = Category::all();
        return view('template.create', $data);
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
        $validation = $request->validate([
            'title' => 'required|min:3',
            'cat_id' => 'required|numeric',
            'content' => 'required|min:3',
            'template' => 'required|url',
            'link' => 'required|url'
        ]);
        $template = new Template;
        $template->name = $request->title;
        $template->cat_id = $request->cat_id;
        $template->template = $request->template;
        $template->link = $request->link;
        $template->content = $request->content;
        $template->save();
        return $template->save() ?
            redirect()->route('home')
            ->with('success', 'Template has been created successfully.') :
            redirect()->back()->with('errors', $validation);
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
        $data['categories'] = Category::all();
        return view('template.show', [...$data, compact('template')]);
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
        $data['categories'] = Category::all();
        return view('template.edit', [...$data, compact('template')]);
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
        $validation = $request->validate([
            'title' => 'required|min:3',
            'cat_id' => 'required|numeric',
            'content' => 'required|min:3',
            'template' => 'required|url',
            'link' => 'required|url'
        ]);
        // Str::slug('Laravel 5 Framework', '-')
        $slug = $request->slug;
        $title = $request->title;
        $slug = $slug ? Str::slug($slug) : Str::slug($title);
        $template = Template::find($id);
        $template->title = $title;
        $template->cat_id = $request->cat_id;
        $template->template = $request->template;
        $template->content = $request->content;
        $template->slug = $slug;
        return $template->save() ?
            redirect()->route('home')
            ->with('success', 'Template has been created successfully.') :
            redirect()->back()->with('errors', $validation);
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
