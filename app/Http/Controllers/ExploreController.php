<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use App\Models\AboutSettings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $explore = Explore::first();
        $about_settings = AboutSettings::first();
        return view('pages.dashboard.explore', compact('explore', 'about_settings'));
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
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function show(Explore $explore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function edit(Explore $explore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Explore $explore)
    {

        $this->validate($request, [
            'card1_button_text' => 'required|string',
            'card1_button_link' => 'required|string',

            'card2_button_text' => 'required|string',
            'card2_button_link' => 'required|string',

            // 'card1_img' => 'required|file',
            // 'card2_img' => 'required|file',
        ]);

        $explore = Explore::first();

        $explore->card1_button_text = $request->card1_button_text;
        $explore->card1_button_link = $request->card1_button_link;

        $explore->card2_button_text = $request->card2_button_text;
        $explore->card2_button_link = $request->card2_button_link;


        if ($request->file('card1_img')) {
            $card1_img  = $request->file('card1_img');
            Storage::putFile('public/img/', $card1_img);
            $explore->card1_img = "storage/img/" . $card1_img->hashName();

        }

        if ($request->file('card2_img')) {
            $card2_img  = $request->file('card2_img');
            Storage::putFile('public/img/', $card2_img);
            $explore->card2_img = "storage/img/" . $card2_img->hashName();

        }

        $explore->save();
        return redirect()->route('admin.explore')->with('success', "Explore Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Explore $explore)
    {
        //
    }
}
