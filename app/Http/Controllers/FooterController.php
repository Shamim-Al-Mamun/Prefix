<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterSettings;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_settings = FooterSettings::first();
        return view('pages.dashboard.footer-settings', compact('footer_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $footer_settings = FooterSettings::first();
        $footer_settings->footer_heading = $request->footer_heading;
        $footer_settings->footer_text = $request->footer_text;
        $footer_settings->footer_facebook_url = $request->footer_facebook_url;
        $footer_settings->footer_twitter_url = $request->footer_twitter_url;
        $footer_settings->footer_linkedin_url = $request->footer_linkedin_url;
        $footer_settings->footer_instagram_url = $request->footer_instagram_url;
        $footer_settings->footer_youtube_url = $request->footer_youtube_url;
        $footer_settings->footer_link_one = $request->footer_link_one;
        $footer_settings->footer_link_one_url = $request->footer_link_one_url;
        $footer_settings->footer_link_two = $request->footer_link_two;
        $footer_settings->footer_link_two_url = $request->footer_link_two_url;
        $footer_settings->footer_link_three = $request->footer_link_three;
        $footer_settings->footer_link_three_url = $request->footer_link_three_url;
        $footer_settings->footer_link_four = $request->footer_link_four;
        $footer_settings->footer_link_four_url = $request->footer_link_four_url;
        $footer_settings->footer_link_five = $request->footer_link_five;
        $footer_settings->footer_link_five_url = $request->footer_link_five_url;
        $footer_settings->footer_address = $request->footer_address;
        $footer_settings->footer_phone = $request->footer_phone;
        $footer_settings->support_title = $request->support_title;
        $footer_settings->support_number = $request->support_number;
        $footer_settings->footer_email = $request->footer_email;
        $footer_settings->footer_copyright = $request->footer_copyright;
       
        if($request->file('footer_bg_image')){
            $footer_bg_image_file = $request->file('footer_bg_image');
            $footer_bg_image_file->storeAs('public/img/','footer_bg_image.' . $footer_bg_image_file->getClientOriginalExtension());
            $footer_settings->footer_bg_image = 'storage/img/footer_bg_image.' . $footer_bg_image_file->getClientOriginalExtension();
        }

        if($request->file('footer_logo')){
            $footer_logo_file = $request->file('footer_logo');
            $footer_logo_file->storeAs('public/img/','footer_logo.' . $footer_logo_file->getClientOriginalExtension());
            $footer_settings->footer_logo = 'storage/img/footer_logo.' . $footer_logo_file->getClientOriginalExtension();
        }

        if($request->file('footer_large_image')){
            $footer_large_image_file = $request->file('footer_large_image');
            $footer_large_image_file->storeAs('public/img/','footer_large_image.' . $footer_large_image_file->getClientOriginalExtension());
            $footer_settings->footer_large_image = 'storage/img/footer_large_image.' . $footer_large_image_file->getClientOriginalExtension();
        }

        $footer_settings->save();
        return redirect()->route('admin.footer')->with('success',"Footer Data update successfully.");

    }

}
