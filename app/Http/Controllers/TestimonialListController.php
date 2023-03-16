<?php

namespace App\Http\Controllers;

use App\Models\TestimonialList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialListController extends Controller
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
        $testimonialList = TestimonialList::all();
        return view('pages.dashboard.testimonial.testimonial-all', compact('testimonialList'));
    }
    public function addnew()
    {
        return view('pages.dashboard.testimonial.testimonial-add');
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
            'testimonial_name' => 'required|string',
            'testimonial_title' => 'required|string',

            'testimonial_text' => 'required|string',
            'testimonial_rating' => 'required|string',

            'testimonial_img' => 'required|file',
        ]);


        $testimonialList = new TestimonialList();
        $testimonialList->testimonial_name = $request->testimonial_name;
        $testimonialList->testimonial_title = $request->testimonial_title;
        $testimonialList->testimonial_text = $request->testimonial_text;
        $testimonialList->testimonial_rating = $request->testimonial_rating;

        if ($request->file('testimonial_img')) {
            $testimonial_img  = $request->file('testimonial_img');
            Storage::putFile('public/img/', $testimonial_img);
            $testimonialList->testimonial_img = "storage/img/" . $testimonial_img->hashName();
        }
        $testimonialList->save();
        return redirect()->route('admin.testimonial.list.all')->with('success', "Testimonial has been added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialList $testimonialList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = TestimonialList::find($id);
        return view('pages.dashboard.testimonial.testimonial-edit', compact('testimonial'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'testimonial_name' => 'required|string',
            'testimonial_title' => 'required|string',

            'testimonial_text' => 'required|string',
            'testimonial_rating' => 'required|string',

            // 'testimonial_img' => 'required|file',
        ]);

        $testimonialList =  TestimonialList::find($id);
        $testimonialList->testimonial_name = $request->testimonial_name;
        $testimonialList->testimonial_title = $request->testimonial_title;
        $testimonialList->testimonial_text = $request->testimonial_text;
        $testimonialList->testimonial_rating = $request->testimonial_rating;

        if ($request->file('testimonial_img')) {
            $testimonial_img  = $request->file('testimonial_img');
            Storage::putFile('public/img/', $testimonial_img);
            $testimonialList->testimonial_img = "storage/img/" . $testimonial_img->hashName();
        }
        $testimonialList->save();
        return redirect()->route('admin.testimonial.list.all')->with('success', "Testimonial has been updated successfully.");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialList  $testimonialList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonialLists =  TestimonialList::all();
        $testimonialList =  TestimonialList::find($id);

        if (count($testimonialLists) > 1) {
            $testimonialList->delete();
            return redirect()->route('admin.pricing-cat.all')->with('success', 'Testimonial Deleted successfully');
        } else {
            return redirect()->route('admin.pricing-cat.all')->with('error', 'cannot delete all Testimonial');
        }
    }
}
