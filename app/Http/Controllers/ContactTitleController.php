<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTitle;
use Illuminate\Support\Facades\Storage;

class ContactTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_title = ContactTitle::first();
        return view('pages.dashboard.contact-title', compact('contact_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'contact_section_label' => 'required|string',
            'contact_section_title_middle' => 'required|string',
            'contact_section_first_title' => 'required|string',
            'contact_section_title_desc' => 'required|string',

            // 'faq_bg_img' => 'required|file',
        ]);

        $contact_title = ContactTitle::first();
        $contact_title->contact_section_label = $request->contact_section_label;
        $contact_title->contact_section_title_middle = $request->contact_section_title_middle;
        $contact_title->contact_section_first_title = $request->contact_section_first_title;
        $contact_title->contact_section_title_desc = $request->contact_section_title_desc;

        // $contact_title->contact_section_title_last = $request->contact_section_title_last;

        if ($request->file('contact_section_title_last')) {
            $contact_section_title_last  = $request->file('contact_section_title_last');
            Storage::putFile('public/img/', $contact_section_title_last);
            $contact_title->contact_section_title_last = "storage/img/" . $contact_section_title_last->hashName();
        }

        $contact_title->save();
        return redirect()->route('admin.contact-title')->with('success', "Contact Section Title Data has been update successfully.");
    }
}
