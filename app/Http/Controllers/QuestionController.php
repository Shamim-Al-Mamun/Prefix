<?php

namespace App\Http\Controllers;

use App\Models\Question;
// use App\Models\AboutSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
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
        $question = Question::first();
        // $about_settings = AboutSettings::first();
        return view('pages.dashboard.question', compact('question'));
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
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'question_title' => 'required|string',
            'question_text' => 'required|string',

            'question_btn1_text' => 'required|string',
            'question_btn1_link' => 'required|string',

            'question_btn2_text' => 'required|string',
            'question_btn2_link' => 'required|string',

            // 'question_image' => 'required|file',
            // 'card2_img' => 'required|file',
        ]);

        $question = Question::first();
        $question->question_title = $request->question_title;
        $question->question_text = $request->question_text;

        $question->question_btn1_text = $request->question_btn1_text;
        $question->question_btn1_link = $request->question_btn1_link;

        $question->question_btn2_text = $request->question_btn2_text;
        $question->question_btn2_link = $request->question_btn2_link;

        if ($request->file('question_image')) {
            $question_image  = $request->file('question_image');
            Storage::putFile('public/img/', $question_image);
            $question->question_bg_img = "storage/img/" . $question_image->hashName();
        }

        $question->save();
        return redirect()->route('admin.question.all')->with('success', "Question Data has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
