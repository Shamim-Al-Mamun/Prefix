<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTitle;

class ProductTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_title = ProductTitle::first();
        return view('pages.dashboard.product-title', compact('product_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'product_section_first_title' => 'required|string',
            'product_section_title_last' => 'required|string',
        ]);

        $product_title = ProductTitle::first();
        $product_title->product_section_first_title = $request->product_section_first_title;
        $product_title->product_section_title_last = $request->product_section_title_last;

        // $product_title->product_section_label = $request->product_section_label;
        // $product_title->product_section_title_middle = $request->product_section_title_middle;
        // $product_title->product_section_title_desc = $request->product_section_title_desc;


        $product_title->save();
        return redirect()->route('admin.product-title')->with('success', "Product Section Title Data has been update successfully.");
    }
}
