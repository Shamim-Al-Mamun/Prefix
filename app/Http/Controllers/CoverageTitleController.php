<?php

namespace App\Http\Controllers;

use App\Models\CoverageTitle;
use Illuminate\Http\Request;

class CoverageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coverageTitle = CoverageTitle::first();
        return view('pages.dashboard.coverage.coverage-title', compact('coverageTitle'));
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
     * @param  \App\Models\CoverageTitle  $coverageTitle
     * @return \Illuminate\Http\Response
     */
    public function show(CoverageTitle $coverageTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoverageTitle  $coverageTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(CoverageTitle $coverageTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoverageTitle  $coverageTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoverageTitle $coverageTitle)
    {
        $this->validate($request, [
            'label' => 'required|string',
            'description' => 'required|string',
        ]);

        $coverageTitle = CoverageTitle::first();

        $coverageTitle->label = $request->label;
        $coverageTitle->description = $request->description;

        $coverageTitle->save();
        return redirect()->route('admin.coverage')->with('success', "Coverage Title Data has been update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoverageTitle  $coverageTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoverageTitle $coverageTitle)
    {
        //
    }
}
