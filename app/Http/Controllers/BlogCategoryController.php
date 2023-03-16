<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
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
        $blogCategory = BlogCategory::all();
        return view('pages.dashboard.blog.blog-cat.all', compact('blogCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.blog.blog-cat.add');
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
        $this->validate($request, [
            'topic' => 'required|string',
            'icon' => 'required|string',
        ]);

        $blogCategory =  new BlogCategory;
        $blogCategory->topic = $request->topic;
        $blogCategory->icon = $request->icon;

        $blogCategory->save();

        return redirect()->route('admin.blog.category.all')->with('success', 'New blog category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory, $id)
    {
        $blogCategory = BlogCategory::find($id);
        return view('pages.dashboard.blog.blog-cat.edit', compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory, $id)
    {
        $this->validate($request, [
            'topic' => 'required|string',
            'icon' => 'required|string',
        ]);

        $blogCategory =  BlogCategory::find($id);
        $blogCategory->topic = $request->topic;
        $blogCategory->icon = $request->icon;

        $blogCategory->save();

        return redirect()->route('admin.blog.category.all')->with('success', 'New blog category updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory, $id)
    {
        $blogCategory =  BlogCategory::find($id);
        // @unlink(public_path($blog->product_thumbnail));
        $blogCategory->delete();

        return redirect()->route('admin.blog.category.all')->with('success', 'blog category Deleted successfully');
    }
}
