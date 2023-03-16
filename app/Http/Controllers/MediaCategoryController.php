<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\MediaCategory;

class MediaCategoryController extends Controller
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
        $media_cats = MediaCategory::all();
        return view('pages.dashboard.media-cat.all', compact('media_cats'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.media-cat.addnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $media_cat =  new MediaCategory;
        $media_cat->medialist_category_name = $request->medialist_category_name;
        $media_cat->medialist_category_slug = $request->medialist_category_slug;
        
        $media_cat->save();

        return redirect()->route('admin.media-cat.addnew')->with('success', 'New Media Category Created successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $media_cats = MediaCategory::find($id);
       return view('pages.dashboard.media-cat.edit', compact('media_cats'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $media_cat =  MediaCategory::find($id);
        $media_cat->medialist_category_name = $request->medialist_category_name;
        $media_cat->medialist_category_slug = $request->medialist_category_slug;

        $media_cat->save();

        return redirect()->route('admin.media-cat.all')->with('success', 'Media Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media_cat =  MediaCategory::find($id);
        $media_cat->delete();
        
        return redirect()->route('admin.media-cat.all')->with('success', 'Media Category Deleted successfully');
    }
}
