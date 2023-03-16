<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PricingCategory;

class PricingCategoryController extends Controller
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
        $pricing_cats = PricingCategory::all();
        return view('pages.dashboard.pricing-cat.all', compact('pricing_cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.pricing-cat.addnew');
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
            'pricing_category_name' => 'required|string',
            'pricing_category_slug' => 'required|string',

        ]);

        $pricing_cat =  new PricingCategory;
        $pricing_cat->pricing_category_name = $request->pricing_category_name;
        $pricing_cat->pricing_category_slug = $request->pricing_category_slug;

        $pricing_cat->save();

        return redirect()->route('admin.pricing-cat.all')->with('success', 'New Pricing Category Created successfully');
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
        $pricing_cats = PricingCategory::find($id);
        return view('pages.dashboard.pricing-cat.edit', compact('pricing_cats'));
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
            'pricing_category_name' => 'required|string',
            'pricing_category_slug' => 'required|string',

        ]);

        $pricing_cat =  PricingCategory::find($id);
        $pricing_cat->pricing_category_name = $request->pricing_category_name;
        $pricing_cat->pricing_category_slug = $request->pricing_category_slug;

        $pricing_cat->save();

        return redirect()->route('admin.pricing-cat.all')->with('success', 'Pricing Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricing_cats =  PricingCategory::all();
        $pricing_cat =  PricingCategory::find($id);

        if (count($pricing_cats) > 1) {
            $pricing_cat->delete();
            return redirect()->route('admin.pricing-cat.all')->with('success', 'Pricing Category Deleted successfully');
        } else {
            return redirect()->route('admin.pricing-cat.all')->with('error', 'cannot delete all Categories');
        }
    }
}
