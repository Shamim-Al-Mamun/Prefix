<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
        $blogs = Blog::join('blog_categories', 'blogs.blog_categories_id', '=', 'blog_categories.id')
            ->select('blogs.*', 'blog_categories.topic')
            ->get();

        return view('pages.dashboard.blog.blog.all', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        $blogCategory = BlogCategory::all();
        return view('pages.dashboard.blog.blog.add', compact('blogCategory'));
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
            'blog_categories_id' => 'required|string',
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        $blog =  new Blog;
        $blog->blog_categories_id = $request->blog_categories_id;
        $blog->title = $request->title;
        $blog->text = $request->text;

        if ($request->file('img')) {
            $blog_thumbnail  = $request->file('img');
            Storage::putFile('public/img/', $blog_thumbnail);
            $blog->img = "storage/img/" . $blog_thumbnail->hashName();
        }

        $blog->save();

        return redirect()->route('admin.blog.all')->with('success', 'New blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blogCategory = BlogCategory::all();
        return view('pages.dashboard.blog.blog.edit', compact('blog', 'blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {

        $this->validate($request, [
            'blog_categories_id' => 'required|string',
            'title' => 'required|string',
            'text' => 'required|string',
        ]);

        $blog =  Blog::find($id);
        $blog->blog_categories_id = $request->blog_categories_id;
        $blog->title = $request->title;
        $blog->text = $request->text;

        if ($request->file('img')) {
            $blog_thumbnail  = $request->file('img');
            Storage::putFile('public/img/', $blog_thumbnail);
            $blog->img = "storage/img/" . $blog_thumbnail->hashName();
        }

        $blog->save();

        return redirect()->route('admin.blog.all')->with('success', 'blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {
        $blog =  Blog::find($id);
        $blog->delete();

        return redirect()->route('admin.blog.all')->with('success', 'blog Deleted successfully');
    }
}
