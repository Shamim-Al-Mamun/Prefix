<?php

namespace App\Http\Controllers;

use App\Models\TestimonialTitle;
use App\Models\Question;
use Illuminate\Http\Request;

class TestimonialTitleController extends Controller
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
        $testimonial = TestimonialTitle::first();
        $question = Question::first();
        return view('pages.dashboard.testimonial.testimonial', compact('testimonial', 'question'));
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
     * @param  \App\Models\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialTitle $testimonialTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialTitle $testimonialTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialTitle $testimonialTitle, $id)
    {

        $this->validate($request, [
            'testimonial_title' => 'required|string',
            'testimonial_sub_title' => 'required|string',
        ]);

        $testimonialTitle = TestimonialTitle::find($id);
        $testimonialTitle->testimonial_title = $request->testimonial_title;
        $testimonialTitle->testimonial_sub_title = $request->testimonial_sub_title;

        $testimonialTitle->save();
        return redirect()->route('admin.testimonial.all')->with('success', "testimonial Data has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialTitle  $testimonialTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialTitle $testimonialTitle)
    {
        //
    }
}
