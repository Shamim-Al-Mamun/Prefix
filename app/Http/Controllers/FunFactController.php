<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FunFact;

class FunFactController extends Controller
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
        $funfacts = FunFact::all();
        return view('pages.dashboard.funfacts.all', compact('funfacts'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.funfacts.addnew');
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
            'funfact_title' => '',
            'funfact_countdown' => '',
            'funfact_desc' => '',
        ]);

        $funfacts =  new FunFact;
        $funfacts->funfact_countdown = $request->funfact_countdown;
        $funfacts->funfact_countdown_after = $request->funfact_countdown_after;
        $funfacts->funfact_desc = $request->funfact_desc;
        if($request->file('funfact_thumbnail')){
            $funfact_thumbnail  = $request->file('funfact_thumbnail');
            Storage::putFile('public/img/', $funfact_thumbnail);
            $funfacts->funfact_thumbnail = "storage/img/". $funfact_thumbnail->hashName();
        }
        $funfacts->save();

        return redirect()->route('admin.funfacts.addnew')->with('success', 'New funfact created successfully');
       
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
       $funfacts = FunFact::find($id);
       return view('pages.dashboard.funfacts.edit', compact('funfacts'));



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
            'funfact_countdown' => 'required|string',
            'funfact_countdown_after' => 'required|string',
            'funfact_desc' => 'required|string',
        ]);

        $funfacts =  FunFact::find($id);
        $funfacts->funfact_countdown = $request->funfact_countdown;
        $funfacts->funfact_countdown_after = $request->funfact_countdown_after;
        $funfacts->funfact_desc = $request->funfact_desc;

        
        if($request->file('funfact_thumbnail')){
            $funfact_thumbnail  = $request->file('funfact_thumbnail');
            Storage::putFile('public/img/', $funfact_thumbnail);
            $funfacts->funfact_thumbnail = "storage/img/". $funfact_thumbnail->hashName();
        }


        $funfacts->save();

        return redirect()->route('admin.funfacts.all')->with('success', 'New Funfact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funfacts =  FunFact::find($id);
        $funfacts->delete();
        
        return redirect()->route('admin.funfacts.all')->with('success', 'Funfact Deleted successfully');
    }
}
