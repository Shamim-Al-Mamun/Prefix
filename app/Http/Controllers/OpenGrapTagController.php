<?php

namespace App\Http\Controllers;

use App\Models\OpenGrapTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OpenGrapTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openGrapTag = OpenGrapTag::first();
        return view('pages.dashboard.link', compact('openGrapTag'));
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
     * @param  \App\Models\OpenGrapTag  $openGrapTag
     * @return \Illuminate\Http\Response
     */
    public function show(OpenGrapTag $openGrapTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenGrapTag  $openGrapTag
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenGrapTag $openGrapTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenGrapTag  $openGrapTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpenGrapTag $openGrapTag)
    {

        $this->validate($request, [
            'url' => 'required|string',
            'type' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);


        $openGrapTag = OpenGrapTag::first();
        $openGrapTag->url = $request->url;
        $openGrapTag->type = $request->type;
        $openGrapTag->title = $request->title;
        $openGrapTag->description = $request->description;

        if ($request->file('img')) {
            $img  = $request->file('img');
            Storage::putFile('public/img/', $img);
            $openGrapTag->img = "storage/img/" . $img->hashName();
        }
        $openGrapTag->save();

        $openGrapTag->save();


        return redirect()->route('admin.link')->with('success', "Link Seetings Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenGrapTag  $openGrapTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenGrapTag $openGrapTag)
    {
        //
    }
}
