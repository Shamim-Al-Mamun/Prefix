<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaTitle;

class MediaTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media_title = MediaTitle::first();
        return view('pages.dashboard.media-title', compact('media_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $media_title = MediaTitle::first();
        $media_title->media_section_label = $request->media_section_label;
        $media_title->media_section_first_title = $request->media_section_first_title;
        $media_title->media_section_title_middle = $request->media_section_title_middle;
        $media_title->media_section_title_last = $request->media_section_title_last;
        $media_title->media_section_title_desc = $request->media_section_title_desc;
        
        

        $media_title->save();
        return redirect()->route('admin.media-title')->with('success',"Media Section Title Data has been update successfully.");

    }

}
