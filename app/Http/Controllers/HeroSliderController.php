<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\HeroSlider;
use App\Models\HeaderSettings;

class HeroSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headerSettings = HeaderSettings::first();
        return view('pages.dashboard.hero.addbackimg', compact('headerSettings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $heros = HeroSlider::all();
        return view('pages.dashboard.hero.all', compact('heros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.hero.addnew');
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
            'hero_title' => 'required|string',
            'hero_text' => 'required|string',
            'hero_main_button' => 'required|string',
            'hero_main_button_link' => 'required|string',
            'hero_main_button_two' => 'required|string',
            'hero_main_button_two_link' => 'required|string',
        ]);

        $hero =  new HeroSlider;
        $hero->hero_title = $request->hero_title;
        $hero->hero_text = $request->hero_text;

        $hero->hero_main_button = $request->hero_main_button;
        $hero->hero_main_button_link = $request->hero_main_button_link;
        $hero->hero_main_button_two = $request->hero_main_button_two;
        $hero->hero_main_button_two_link = $request->hero_main_button_two_link;

        // $hero->hero_sub_title = $request->hero_sub_title;
        // $hero->hero_link_button = $request->hero_link_button;
        // $hero->hero_link_button_url = $request->hero_link_button_url;
        // $hero->hero_link_button_two = $request->hero_link_button_two;
        // $hero->hero_link_button_two_url = $request->hero_link_button_two_url;
        // $hero->hero_link_button_three = $request->hero_link_button_three;
        // $hero->hero_link_button_three_url = $request->hero_link_button_three_url;
        // $hero->hero_link_button_four = $request->hero_link_button_four;
        // $hero->hero_link_button_four_url = $request->hero_link_button_four_url;

        if ($request->file('hero_thumbnail')) {
            $hero_thumbnail  = $request->file('hero_thumbnail');
            Storage::putFile('public/img/', $hero_thumbnail);
            $hero->hero_thumbnail = "storage/img/" . $hero_thumbnail->hashName();
        }

        // if($request->file('hero_link_button_thumbnail')){
        //     $hero_link_button_thumbnail  = $request->file('hero_link_button_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_thumbnail);
        //     $hero->hero_link_button_thumbnail = "storage/img/". $hero_link_button_thumbnail->hashName();
        // }

        // if($request->file('hero_link_button_two_thumbnail')){
        //     $hero_link_button_two_thumbnail  = $request->file('hero_link_button_two_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_two_thumbnail);
        //     $hero->hero_link_button_two_thumbnail = "storage/img/". $hero_link_button_two_thumbnail->hashName();
        // }

        // if($request->file('hero_link_button_three_thumbnail')){
        //     $hero_link_button_three_thumbnail  = $request->file('hero_link_button_three_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_three_thumbnail);
        //     $hero->hero_link_button_three_thumbnail = "storage/img/". $hero_link_button_three_thumbnail->hashName();
        // }


        // if($request->file('hero_link_button_four_thumbnail')){
        //     $hero_link_button_four_thumbnail  = $request->file('hero_link_button_four_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_four_thumbnail);
        //     $hero->hero_link_button_four_thumbnail = "storage/img/". $hero_link_button_four_thumbnail->hashName();
        // }

        $hero->save();

        return redirect()->route('admin.hero.addnew')->with('success', 'New slider created successfully');
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
        $hero = HeroSlider::find($id);
        return view('pages.dashboard.hero.edit', compact('hero'));
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
            'hero_title' => 'required|string',
            'hero_text' => 'required|string',
            'hero_main_button' => 'required|string',
            'hero_main_button_link' => 'required|string',
            'hero_main_button_two' => 'required|string',
            'hero_main_button_two_link' => 'required|string',
        ]);


        $hero =  HeroSlider::find($id);
        $hero->hero_title = $request->hero_title;
        $hero->hero_text = $request->hero_text;
        $hero->hero_main_button = $request->hero_main_button;
        $hero->hero_main_button_link = $request->hero_main_button_link;
        $hero->hero_main_button_two = $request->hero_main_button_two;

        // $hero->hero_sub_title = $request->hero_sub_title;
        // $hero->hero_main_button_two_link = $request->hero_main_button_two_link;
        // $hero->hero_link_button = $request->hero_link_button;
        // $hero->hero_link_button_url = $request->hero_link_button_url;
        // $hero->hero_link_button_two = $request->hero_link_button_two;
        // $hero->hero_link_button_two_url = $request->hero_link_button_two_url;
        // $hero->hero_link_button_three = $request->hero_link_button_three;
        // $hero->hero_link_button_three_url = $request->hero_link_button_three_url;
        // $hero->hero_link_button_four = $request->hero_link_button_four;
        // $hero->hero_link_button_four_url = $request->hero_link_button_four_url;

        if ($request->file('hero_thumbnail')) {
            $hero_thumbnail  = $request->file('hero_thumbnail');
            Storage::putFile('public/img/', $hero_thumbnail);
            $hero->hero_thumbnail = "storage/img/" . $hero_thumbnail->hashName();
        }

        // if($request->file('hero_link_button_thumbnail')){
        //     $hero_link_button_thumbnail  = $request->file('hero_link_button_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_thumbnail);
        //     $hero->hero_link_button_thumbnail = "storage/img/". $hero_link_button_thumbnail->hashName();
        // }

        // if($request->file('hero_link_button_two_thumbnail')){
        //     $hero_link_button_two_thumbnail  = $request->file('hero_link_button_two_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_two_thumbnail);
        //     $hero->hero_link_button_two_thumbnail = "storage/img/". $hero_link_button_two_thumbnail->hashName();
        // }

        // if($request->file('hero_link_button_three_thumbnail')){
        //     $hero_link_button_three_thumbnail  = $request->file('hero_link_button_three_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_three_thumbnail);
        //     $hero->hero_link_button_three_thumbnail = "storage/img/". $hero_link_button_three_thumbnail->hashName();
        // }


        // if($request->file('hero_link_button_four_thumbnail')){
        //     $hero_link_button_four_thumbnail  = $request->file('hero_link_button_four_thumbnail');
        //     Storage::putFile('public/img/', $hero_link_button_four_thumbnail);
        //     $hero->hero_link_button_four_thumbnail = "storage/img/". $hero_link_button_four_thumbnail->hashName();
        // }

        $hero->save();

        return redirect()->route('admin.hero.all')->with('success', 'Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero =  HeroSlider::find($id);
        // @unlink(public_path($hero->hero_thumbnail));
        // @unlink(public_path($hero->hero_link_button_thumbnail));
        // @unlink(public_path($hero->hero_link_button_two_thumbnail));
        // @unlink(public_path($hero->hero_link_button_three_thumbnail));
        // @unlink(public_path($hero->hero_link_button_four_thumbnail));
        $heros = HeroSlider::all();
        if (count($heros) < 1) {
            return redirect()->route('admin.hero.all')->with('error', 'can not delete all sildes');
        } else {
            $hero->delete();
            return redirect()->route('admin.hero.all')->with('success', 'hero Deleted successfully');
        }
    }
}
