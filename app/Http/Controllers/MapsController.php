<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoogleMaps;

class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps_settings = GoogleMaps::first();
        return view('pages.dashboard.maps-settings', compact('maps_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $maps_settings = GoogleMaps::first();
        $maps_settings->maps_iframe_code = $request->maps_iframe_code;
      
        $maps_settings->save();
        return redirect()->route('admin.maps')->with('success',"Page Seetings Data has been update successfully.");

    }

}
