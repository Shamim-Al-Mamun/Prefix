<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Features;

class FeaturesController extends Controller
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
    public function all()
    {
        $features = Features::all();
        return view('pages.dashboard.features.all', compact('features'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.features.addnew');
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
            'feature_title' => 'required|string',
            'feature_text' => 'required|string',
            'feature_icon' => 'required|string',
        ]);

        $features =  new Features;
        $features->feature_title = $request->feature_title;
        $features->feature_text = $request->feature_text;
        $features->feature_icon = $request->feature_icon;

        $features->save();

        return redirect()->route('admin.features.addnew')->with('success', 'New features created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $features = Features::find($id);
        return view('pages.dashboard.features.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'feature_title' => 'required|string',
            'feature_text' => 'required|string',
            'feature_icon' => 'required|string',
        ]);

        $features =  Features::find($id);
        $features->feature_title = $request->feature_title;
        $features->feature_text = $request->feature_text;
        $features->feature_icon = $request->feature_icon;

        $features->save();

        return redirect()->route('admin.features.all')->with('success', 'New feature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $features = Features::all();
        if (count($features) < 1) {
            return redirect()->route('admin.features.all')->with('error', 'can not delete all features');
        } else {
            $features =  Features::find($id);
            $features->delete();
            return redirect()->route('admin.features.all')->with('success', 'feature Deleted successfully');
        }
    }
}
