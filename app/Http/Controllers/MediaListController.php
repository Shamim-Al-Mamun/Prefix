<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\MediaList;
use App\Models\MediaCategory;

class MediaListController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $media_lists = MediaList::all();
        return view('pages.dashboard.media.all', compact('media_lists'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        $media_cats = MediaCategory::all();
        return view('pages.dashboard.media.addnew', compact('media_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $media =  new MediaList;
        $media->medialist_title = $request->medialist_title;
        $media->medialist_link = $request->medialist_link;
        $media->media_category_id = $request->media_category_id;
       
        if($request->file('medialist_thumbnail')){
            $medialist_thumbnail  = $request->file('medialist_thumbnail');
            Storage::putFile('public/img/', $medialist_thumbnail);
            $media->medialist_thumbnail = "storage/img/". $medialist_thumbnail->hashName();
        }
        
        $media->save();

        return redirect()->route('admin.media.addnew')->with('success', 'New Media created successfully');
       
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
       $media_list = MediaList::find($id);
       $media_cats = MediaCategory::all();
       return view('pages.dashboard.media.edit', compact('media_list','media_cats'));

        

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
        
        $media =  MediaList::find($id);
        $media->medialist_title = $request->medialist_title;
        $media->medialist_link = $request->medialist_link;
        $media->media_category_id = $request->media_category_id;

        if($request->file('medialist_thumbnail')){
            $medialist_thumbnail  = $request->file('medialist_thumbnail');
            Storage::putFile('public/img/', $medialist_thumbnail);
            $media->medialist_thumbnail = "storage/img/". $medialist_thumbnail->hashName();
        }
        $media->save();

        return redirect()->route('admin.media.all')->with('success', 'New Media updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media =  MediaList::find($id);
        @unlink(public_path($blog->medialist_thumbnail));
        $media->delete();
        
        return redirect()->route('admin.media.all')->with('success', 'Media Deleted successfully');
    }
}
