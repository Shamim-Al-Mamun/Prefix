<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SitePages;

class SitePagesController extends Controller
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
        $sitepages = SitePages::all();
        return view('pages.dashboard.sitepages.all', compact('sitepages'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.sitepages.addnew');
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
            'page_title' => 'required|string',
            'page_content' => 'required|string',
            'page_description' => 'required|string',
        ]);

        $sitepages =  new SitePages;
        $sitepages->page_title = $request->page_title;
        $sitepages->page_content = $request->page_content;
        $sitepages->page_permalink = $request->page_permalink;

        $sitepages->save();

        return redirect()->route('admin.page.addnew')->with('success', 'New Page created successfully');
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
        $sitepages = SitePages::find($id);
        return view('pages.dashboard.sitepages.edit', compact('sitepages'));
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
            'page_title' => 'required|string',
            'page_content' => 'required|string',
            'page_description' => 'required|string',
        ]);


        $sitepages =  SitePages::find($id);
        $sitepages->page_title = $request->page_title;
        $sitepages->page_description = $request->page_description;
        $sitepages->page_content = $request->page_content;
        $sitepages->page_permalink = $request->page_permalink;

        $sitepages->save();

        return redirect()->route('admin.page.all')->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sitepages =  SitePages::find($id);
        $sitepages->delete();

        return redirect()->route('admin.page.all')->with('success', 'Funfact Deleted successfully');
    }
}
