<?php

namespace App\Http\Controllers;

use App\Models\FaqListAnswer;
use App\Models\FaqListTitle;
use Illuminate\Http\Request;

class FaqListAnswerController extends Controller
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
        $faqListAnswer = new FaqListAnswer();
        $faqListAnswer->faq_list_answer = $request->faq_list_answer;
        $faqListAnswer->faq_list_id = $request->faq_list_id;

        $faqListAnswer->save();
        return redirect()->route('admin.faq.list.all')->with('success', "answer has been added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FaqListAnswer  $faqListAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(FaqListAnswer $faqListAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqListAnswer  $faqListAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $testimonial = FaqListTitle::find($id);
        $faqListTitle = FaqListTitle::with('FaqListAnswer')->find($id);
        return view('pages.dashboard.faq.faq-list-edit', compact('faqListTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqListAnswer  $faqListAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'faq_list_title' => 'required|string',
            'faq_list_text' => 'required|string',

            // 'faq_bg_img' => 'required|file',
        ]);

        $faqListTitle =  FaqListTitle::with('FaqListAnswer')->find($id);
        // $faqListAnswer =  FaqListAnswer::find($id);

        $faqListTitle->faq_list_title = $request->faq_list_title;
        $faqListTitle->faq_list_text = $request->faq_list_text;

        // $faqListTitle->faq_list_answer = $request->faq_list_answer;
        // $faqListTitle->testimonial_rating = $request->testimonial_rating;

        // if (count($request->answers) < 0) {
        //     foreach ($request->answers as $value) {
        //     }
        // }

        // if (count($request->answers) > 0) {
        //     foreach ($request->answers as $id => $val) {
        //         $faqListAnswer =  FaqListAnswer::find($id);
        //         $faqListAnswer->faq_list_answer = $val;
        //         $faqListAnswer->save();
        //     }
        // }

        $faqListTitle->save();

        return redirect()->route('admin.faq.list.all')->with('success', "List has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqListAnswer  $faqListAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqListAnswer $faqListAnswer)
    {
        //
    }
}
