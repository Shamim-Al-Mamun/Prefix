<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;

class ScriptController extends Controller
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
    public function all()
    {
        $scripts = Script::all();
        return view('pages.dashboard.script.all', compact('scripts'));
    }

    public function addnew()
    {
        return view('pages.dashboard.script.add');
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
            'script' => 'required|string',

        ]);

        $scripts =  new Script;
        $scripts->script = $request->script;
        $scripts->title = $request->title;

        $scripts->save();

        return redirect()->route('admin.script.all')->with('success', 'New script created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function show(Script $script)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function edit(Script $script, $id)
    {
        $script = Script::find($id);
        return view('pages.dashboard.script.edit', compact('script'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Script $script, $id)
    {
        $this->validate($request, [
            'script' => 'required|string',

        ]);

        $scripts =  Script::find($id);
        $scripts->script = $request->script;
        $scripts->title = $request->title;

        $scripts->save();

        return redirect()->route('admin.script.all')->with('success', 'script updated created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Script  $script
     * @return \Illuminate\Http\Response
     */
    public function destroy(Script $script, $id)
    {
        $script =  Script::find($id);
        $script->delete();
        return redirect()->route('admin.script.all')->with('success', 'script Deleted successfully');
    }
}
