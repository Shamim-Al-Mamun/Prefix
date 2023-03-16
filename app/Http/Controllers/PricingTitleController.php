<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingTitle;

class PricingTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing_title = PricingTitle::first();
        return view('pages.dashboard.pricing-title', compact('pricing_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'pricing_section_label' => 'required|string',
            'pricing_section_first_title' => 'required|string',

            'pricing_section_title_middle' => 'required|string',
            'pricing_section_title_desc' => 'required|string',

            // 'pricing_section_title_last' => 'required|string',
        ]);

        $pricing_title = PricingTitle::first();
        $pricing_title->pricing_section_label = $request->pricing_section_label;
        $pricing_title->pricing_section_first_title = $request->pricing_section_first_title;
        $pricing_title->pricing_section_title_middle = $request->pricing_section_title_middle;
        $pricing_title->pricing_section_title_desc = $request->pricing_section_title_desc;

        // $pricing_title->pricing_section_title_last = $request->pricing_section_title_last;


        $pricing_title->save();
        return redirect()->route('admin.pricing-title')->with('success', "Pricing Section Title Data has been update successfully.");
    }
}
