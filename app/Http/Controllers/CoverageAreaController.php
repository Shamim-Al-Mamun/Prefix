<?php

namespace App\Http\Controllers;

use App\Models\CoverageArea;
use Illuminate\Http\Request;

class CoverageAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coverageArea = CoverageArea::all();
        return view('pages.dashboard.coverage.area-all', compact('coverageArea'));
    }

    public function add()
    {
        $coverageArea = CoverageArea::all();
        return view('pages.dashboard.coverage.area-add', compact('coverageArea'));
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
        $this->validate($request, [
            'city' => 'required|string',
            'district' => 'required|string',
            'maps_iframe_code' => 'required|string',
        ]);

        $city = $request->city;

        $cityExists = CoverageArea::where('city', '=', $city)->first();


        if ($cityExists === null) {
            $coverageArea = new CoverageArea();
            $coverageArea->city = $request->city;
            $coverageArea->district = $request->district;
            $coverageArea->maps_iframe_code = $request->maps_iframe_code;
            $coverageArea->save();
            return redirect()->route('admin.coverage.area')->with('success', " City has been added successfully.");
        } else {
            return redirect()->route('admin.coverage.area')->with('error', " City name already exists.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoverageArea  $coverageArea
     * @return \Illuminate\Http\Response
     */
    public function show(CoverageArea $coverageArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoverageArea  $coverageArea
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coverageArea = CoverageArea::find($id);
        return view('pages.dashboard.coverage.area-edit', compact('coverageArea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoverageArea  $coverageArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'city' => 'required|string',
            'district' => 'required|string',
            'maps_iframe_code' => 'required|string',
        ]);

        // $city = $request->city;
        // $cityExists = CoverageArea::where('city', '=', $city)->first();
        $cityExists =null;

        if ($cityExists === null) {
            $coverageArea =  CoverageArea::find($id);
            $coverageArea->city = $request->city;
            $coverageArea->district = $request->district;
            $coverageArea->maps_iframe_code = $request->maps_iframe_code;

            $coverageArea->save();

            return redirect()->route('admin.coverage.area')->with('success', 'Area updated successfully');
        } else {
            return back()->with('error', " City name already exists.");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoverageArea  $coverageArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoverageArea $coverageArea, $id)
    {
        $coverageArea =  CoverageArea::find($id);
        $coverageArea->delete();

        return redirect()->route('admin.coverage.area')->with('success', 'Area Deleted successfully');
    }
}
