<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pricing;
use App\Models\PricingCategory;

class PricingController extends Controller
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
        $pricings = Pricing::all();
        return view('pages.dashboard.pricing.all', compact('pricings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        $pricing_cats = PricingCategory::all();
        return view('pages.dashboard.pricing.addnew', compact('pricing_cats'));
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
            'pricing_category_id' => 'required|string',
            'pricing_title' => 'required|string',
            'pricing_price_amount' => 'required|string',
            'pricing_price_desc' => 'required|string',
            'pricing_price_button_text' => 'required|string',

            // 'pricing_section_title_last' => 'required|string',
        ]);


        $pricing =  new Pricing;
        $pricing->pricing_category_id = $request->pricing_category_id;
        $pricing->pricing_title = $request->pricing_title;
        $pricing->pricing_price_amount = $request->pricing_price_amount;
        $pricing->pricing_price_desc = $request->pricing_price_desc;
        $pricing->pricing_price_button_text = $request->pricing_price_button_text;

        // $pricing->pricing_megabytes = $request->pricing_megabytes;
        // $pricing->pricing_price_amount_bottom = $request->pricing_price_amount_bottom;
        // $pricing->pricing_price_offer_desc = $request->pricing_price_offer_desc;
        // $pricing->pricing_price_button_url = $request->pricing_price_button_url;

        $pricing->save();

        return redirect()->route('admin.pricing.addnew')->with('success', 'New Package created successfully');
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
        $pricings = Pricing::find($id);
        $pricing_cats = PricingCategory::all();
        return view('pages.dashboard.pricing.edit', compact('pricings', 'pricing_cats'));
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
            'pricing_category_id' => 'required|string',
            'pricing_title' => 'required|string',
            'pricing_price_amount' => 'required|string',
            'pricing_price_desc' => 'required|string',
            'pricing_price_button_text' => 'required|string',

            // 'pricing_section_title_last' => 'required|string',
        ]);

        $pricing =  Pricing::find($id);
        $pricing->pricing_category_id = $request->pricing_category_id;
        $pricing->pricing_title = $request->pricing_title;
        $pricing->pricing_price_amount = $request->pricing_price_amount;
        $pricing->pricing_price_desc = $request->pricing_price_desc;
        $pricing->pricing_price_button_text = $request->pricing_price_button_text;

        // $pricing->pricing_megabytes = $request->pricing_megabytes;
        // $pricing->pricing_price_amount_bottom = $request->pricing_price_amount_bottom;
        // $pricing->pricing_price_offer_desc = $request->pricing_price_offer_desc;
        // $pricing->pricing_price_button_url = $request->pricing_price_button_url;


        $pricing->save();

        return redirect()->route('admin.pricing.all')->with('success', 'Package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pricing =  Pricing::find($id);
        $pricing->delete();

        return redirect()->route('admin.pricing.all')->with('success', 'Package Deleted successfully');
    }
}
