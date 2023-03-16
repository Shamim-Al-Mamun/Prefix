<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeoOptimized;


class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seo_settings = SeoOptimized::first();
        return view('pages.dashboard.seo', compact('seo_settings'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $seo_settings = SeoOptimized::first();
        $seo_settings->meta_name = $request->meta_name;
        $seo_settings->meta_description = $request->meta_description;
        $seo_settings->meta_keywords = $request->meta_keywords;
        $seo_settings->meta_author = $request->meta_author;
        $seo_settings->save();


       return redirect()->route('admin.seo')->with('success',"Seo Seetings Data has been update successfully.");

    }

}
