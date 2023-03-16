<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showcase;

class ShowcasePagesController extends Controller
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
        $showcases = Showcase::all();
        return view('pages.dashboard.showcase.all', compact('showcases'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.showcase.addnew');
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
            'showcase_icon' => 'required|string',
            'showcase_title' => 'required|string',
            'showcase_text' => 'required|string',
        ]);

        $showcase =  new Showcase;
        $showcase->showcase_icon = $request->showcase_icon;
        $showcase->showcase_title = $request->showcase_title;
        $showcase->showcase_text = $request->showcase_text;

        $showcase->save();

        return redirect()->route('admin.showcase.all')->with('success', 'New showcase created successfully');
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
       $showcase = Showcase::find($id);
       return view('pages.dashboard.showcase.edit', compact('showcase'));



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
        $this->validate($request,[
            'author_title' => 'required|string',
            'testimonial_text' => 'required|string',
        ]);

        $showcase =  Showcase::find($id);
        $showcase->showcase_icon = $request->showcase_icon;
        $showcase->showcase_title = $request->author_title;
        $showcase->showcase_text = $request->testimonial_text;
		
        $showcase->save();

        return redirect()->route('admin.showcase.all')->with('success', 'New testimonial updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showcase =  Showcase::find($id);
        $showcase->delete();
        
        return redirect()->route('admin.showcase.all')->with('success', 'Service Deleted successfully');
    }
}
