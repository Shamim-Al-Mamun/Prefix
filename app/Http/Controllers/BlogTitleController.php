<?php

namespace App\Http\Controllers;

use App\Models\BlogTitle;
use Illuminate\Http\Request;

class BlogTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $blogTitle = BlogTitle::first();
        return view('pages.dashboard.blog.title.edit', compact('blogTitle'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogTitle  $blogTitle
     * @return \Illuminate\Http\Response
     */
    public function show(BlogTitle $blogTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogTitle  $blogTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogTitle $blogTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogTitle  $blogTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'label' => 'required|string',
            'description' => 'required|string',
        ]);

        $blogTitle =  BlogTitle::find($id);
        $blogTitle->label = $request->label;
        $blogTitle->description = $request->description;

        $blogTitle->save();

        return redirect()->route('admin.blog.title.all')->with('success', 'Blog title section updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogTitle  $blogTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTitle $blogTitle)
    {
        //
    }
}
