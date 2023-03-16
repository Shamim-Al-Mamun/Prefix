<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Theme;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_settings = Settings::first();
        $site_theme = Theme::first();
        return view('pages.dashboard.settings', compact('site_settings', 'site_theme'));
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
        $this->validate($request,[
            'site_title' => 'required|string',

            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'heading_color' => 'required|string',
            'sub_headin_color' => 'required|string',
            'paragraph_color' => 'required|string',

        ]);

        $site_settings = Settings::first();
        $site_settings->site_title = $request->site_title;


        if($request->file('header_favicon')){
            $header_favicon_file = $request->file('header_favicon');
            $header_favicon_file->storeAs('public/img/','header_favicon.' . $header_favicon_file->getClientOriginalExtension());
            $site_settings->header_favicon = 'storage/img/header_favicon.' . $header_favicon_file->getClientOriginalExtension();
        }

        $site_settings->save();

        $theme = Theme::first();
        $theme->primary_color = $request->primary_color;
        $theme->secondary_color = $request->secondary_color;
        $theme->heading_color = $request->heading_color;
        $theme->sub_headin_color = $request->sub_headin_color;
        $theme->paragraph_color = $request->paragraph_color;


        $theme->save();

       return redirect()->route('admin.settings')->with('success',"Site Seetings Data has been update successfully.");

    }

}
