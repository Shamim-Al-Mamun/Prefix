<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactBox;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_settings = ContactBox::first();
        return view('pages.dashboard.contact-settings', compact('contact_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $contact_settings = ContactBox::first();
        $contact_settings->contact_phone_icon = $request->contact_phone_icon;
        $contact_settings->contact_phone_title = $request->contact_phone_title;
        $contact_settings->contact_phone_text = $request->contact_phone_text;
        $contact_settings->contact_email_icon = $request->contact_email_icon;
        $contact_settings->contact_email_title = $request->contact_email_title;
        $contact_settings->contact_email_text = $request->contact_email_text;
        $contact_settings->contact_location_icon = $request->contact_location_icon;
        $contact_settings->contact_location_title = $request->contact_location_title;
        $contact_settings->contact_location_text = $request->contact_location_text;

        $contact_settings->save();
        return redirect()->route('admin.contact')->with('success',"Contact  Data has been update successfully.");

    }

}
