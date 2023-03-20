<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whatWeDo = WhatWeDo::first();
        return view('pages.dashboard.whatWeDo', compact('whatWeDo'));
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
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function show(WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function edit(WhatWeDo $whatWeDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhatWeDo $whatWeDo)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'text' => 'required|string',
        ]);


        $whatWeDo = WhatWeDo::first();
        $whatWeDo->title = $request->title;
        $whatWeDo->sub_title = $request->sub_title;
        $whatWeDo->text = $request->text;

        $whatWeDo->list1 = $request->list1;
        $whatWeDo->list2 = $request->list2;
        $whatWeDo->list3 = $request->list3;
        $whatWeDo->list4 = $request->list4;
        $whatWeDo->list5 = $request->list5;
        $whatWeDo->list6 = $request->list6;
        $whatWeDo->list7 = $request->list7;
        $whatWeDo->list8 = $request->list8;
        $whatWeDo->list9 = $request->list9;
        $whatWeDo->list10 = $request->list10;

        $whatWeDo->card1_title = $request->card1_title;
        $whatWeDo->card1_text = $request->card1_text;

        $whatWeDo->card2_title = $request->card2_title;
        $whatWeDo->card2_text = $request->card2_text;

        $whatWeDo->card3_title = $request->card3_title;
        $whatWeDo->card3_text = $request->card3_text;

        $whatWeDo->card4_title = $request->card4_title;
        $whatWeDo->card4_text = $request->card4_text;

        $whatWeDo->card5_title = $request->card5_title;
        $whatWeDo->card5_text = $request->card5_text;

        $whatWeDo->card6_title = $request->card6_title;
        $whatWeDo->card6_text = $request->card6_text;


        if ($request->file('card1_logo')) {
            $card1_logo  = $request->file('card1_logo');
            Storage::putFile('public/img/', $card1_logo);
            $whatWeDo->card1_logo = "storage/img/" . $card1_logo->hashName();
        }

        if ($request->file('card2_logo')) {
            $card2_logo  = $request->file('card2_logo');
            Storage::putFile('public/img/', $card2_logo);
            $whatWeDo->card2_logo = "storage/img/" . $card2_logo->hashName();
        }

        if ($request->file('card3_logo')) {
            $card3_logo  = $request->file('card3_logo');
            Storage::putFile('public/img/', $card3_logo);
            $whatWeDo->card3_logo = "storage/img/" . $card3_logo->hashName();
        }

        if ($request->file('card4_logo')) {
            $card4_logo  = $request->file('card4_logo');
            Storage::putFile('public/img/', $card4_logo);
            $whatWeDo->card4_logo = "storage/img/" . $card4_logo->hashName();
        }

        if ($request->file('card5_logo')) {
            $card5_logo  = $request->file('card5_logo');
            Storage::putFile('public/img/', $card5_logo);
            $whatWeDo->card5_logo = "storage/img/" . $card5_logo->hashName();
        }

        if ($request->file('card6_logo')) {
            $card6_logo  = $request->file('card6_logo');
            Storage::putFile('public/img/', $card6_logo);
            $whatWeDo->card6_logo = "storage/img/" . $card6_logo->hashName();
        }

        $whatWeDo->save();
        return redirect()->route('admin.whatWeDo')->with('success', "What we do Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhatWeDo  $whatWeDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatWeDo $whatWeDo)
    {
        //
    }
}
