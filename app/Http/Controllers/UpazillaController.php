<?php

namespace App\Http\Controllers;

use App\Models\Upazilla;
use Illuminate\Http\Request;

class UpazillaController extends Controller
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
        $this->validate($request,[
            'contact_upazilla_title' => 'required|string',
        ]);

        $districtName = $request->contact_upazilla_title;

        $districtExists = Upazilla::where('upazilla_name', '=', $districtName)->first();


        if($districtExists === null){
            $Upazilla = new Upazilla();
            $Upazilla->upazilla_name = $request->contact_upazilla_title;
            $Upazilla->save();
            return redirect()->route('admin.contact')->with('success'," Upazilla has been added successfully.");
        }
        else {
            return redirect()->route('admin.contact')->with('error'," Upazilla name already exists.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function show(Upazilla $upazilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function edit(Upazilla $upazilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upazilla $upazilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upazilla $upazilla)
    {
        //
    }
}
