<?php

namespace App\Http\Controllers;

use App\Models\FaqListTitle;
use Illuminate\Http\Request;

class FaqListTitleController extends Controller
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
        // $faqListTitle = FaqListTitle::all();
        $faqListTitle = FaqListTitle::with('FaqListAnswer')->get();
        return view('pages.dashboard.faq.faq-list-all', compact('faqListTitle'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqListTitle = FaqListTitle::all();
        return view('pages.dashboard.faq.faq-list-answers-list', compact('faqListTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'faq_list_title' => 'required|string',
            'faq_list_text' => 'required|string',

            // 'faq_bg_img' => 'required|file',
        ]);


        $faqListTitle = new FaqListTitle();
        $faqListTitle->faq_list_title = $request->faq_list_title;
        $faqListTitle->faq_list_text = $request->faq_list_text;

        $faqListTitle->save();
        return redirect()->route('admin.faq.list.all')->with('success', "Faq has been added successfully.");
    }
    public function addnew()
    {
        return view('pages.dashboard.faq.faq-addnew');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FaqListTitle  $faqListTitle
     * @return \Illuminate\Http\Response
     */
    public function show(FaqListTitle $faqListTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqListTitle  $faqListTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqListTitle $faqListTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqListTitle  $faqListTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqListTitle $faqListTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqListTitle  $faqListTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqListTitle =  FaqListTitle::find($id);
        $faqListTitles = FaqListTitle::all();

        if (count($faqListTitles) > 1) {
            $faqListTitle->delete();
            return redirect()->route('admin.faq.list.all')->with('success', 'faq Deleted successfully');
        } else {
            return redirect()->route('admin.faq.list.all')->with('error', 'cannot delete all faqs');
        }
    }
}
