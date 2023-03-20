<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderSettings;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header_settings = HeaderSettings::first();
        // dd($header_settings);
        return view('pages.dashboard.header-settings', compact('header_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [

            'header_phone' => 'required|string',
            'header_email' => 'required|string',
            'header_main_button' => 'required|string',
            'header_main_button_url' => 'required|string',

            'header_button' => 'required|string',
            'header_button_url' => 'required|string',
            'header_button_two' => 'required|string',
            'header_button_two_url' => 'required|string',
            'header_button_three' => 'required|string',
            'header_button_three_url' => 'required|string',

        ]);

        $header_settings = HeaderSettings::first();
        $header_settings->header_phone = $request->header_phone;
        $header_settings->header_email = $request->header_email;

        $header_settings->header_main_button = $request->header_main_button;
        $header_settings->header_main_button_url = $request->header_main_button_url;

        $header_settings->header_button = $request->header_button;
        $header_settings->header_button_url = $request->header_button_url;
        $header_settings->header_button_two = $request->header_button_two;
        $header_settings->header_button_two_url = $request->header_button_two_url;
        $header_settings->header_button_three = $request->header_button_three;
        $header_settings->header_button_three_url = $request->header_button_three_url;

        // $header_settings->header_facebook_url = $request->header_facebook_url;
        // $header_settings->header_twitter_url = $request->header_twitter_url;
        // $header_settings->header_linkedin_url = $request->header_linkedin_url;
        // $header_settings->header_instagram_url = $request->header_instagram_url;
        // $header_settings->header_youtube_url = $request->header_youtube_url;


        if ($request->file('header_logo')) {
            $header_logo_file = $request->file('header_logo');
            $header_logo_file->storeAs('public/img/', 'header_logo.' . $header_logo_file->getClientOriginalExtension());
            $header_settings->header_logo = 'storage/img/header_logo.' . $header_logo_file->getClientOriginalExtension();
        }

        $header_settings->save();
        return redirect()->route('admin.header')->with('success', "Header Data has been update successfully.");
    }

    public function store(Request $request)
    {

        $header_settings = HeaderSettings::first();

        if ($request->file('hero_img')) {
            $hero_img  = $request->file('hero_img');
            Storage::putFile('public/img/', $hero_img);
            $header_settings->hero_img = "storage/img/" . $hero_img->hashName();
        }
        $header_settings->save();
        return redirect()->route('admin.hero.background')->with('success', "Header Data has been update successfully.");
    }
}
