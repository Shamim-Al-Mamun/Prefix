<?php

namespace App\Http\Controllers;

use App\Models\FaqTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqTitleController extends Controller
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
    public function all()
    {
        $faqTitle = FaqTitle::first();
        return view('pages.dashboard.faq.faq', compact('faqTitle'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FaqTitle  $faqTitle
     * @return \Illuminate\Http\Response
     */
    public function show(FaqTitle $faqTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqTitle  $faqTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqTitle $faqTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqTitle  $faqTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqTitle $faqTitle)
    {
        $this->validate($request, [
            'faq_title' => 'required|string',
            'faq_sub_title' => 'required|string',

            // 'faq_bg_img' => 'required|file',
        ]);

        $faqTitle = FaqTitle::first();
        $faqTitle->faq_title = $request->faq_title;
        $faqTitle->faq_sub_title = $request->faq_sub_title;

        if ($request->file('faq_bg_img')) {
            $faq_bg_img  = $request->file('faq_bg_img');
            Storage::putFile('public/img/', $faq_bg_img);
            $faqTitle->faq_bg_img = "storage/img/" . $faq_bg_img->hashName();
        }

        $faqTitle->save();
        return redirect()->route('admin.faq')->with('success', "testimonial Data has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqTitle  $faqTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqTitle $faqTitle)
    {
        //
    }
}
