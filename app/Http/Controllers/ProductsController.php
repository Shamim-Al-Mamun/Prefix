<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductsController extends Controller
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
        $products = Product::all();
        return view('pages.dashboard.product.all', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.product.addnew');
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
            'product_title' => 'required|string',
            'product_price' => 'required|string',
            'product_thumbnail' => 'required|file',
        ]);

        $product =  new Product;
        $product->product_title = $request->product_title;
        $product->product_price = $request->product_price;
        $product->product_desc = "N/A";
        $product->product_quick_view_desc = "N/A";
        $product->prodcut_button = "N/A";
        $product->prodcut_button_url = "N/A";


        if ($request->file('product_thumbnail')) {
            $product_thumbnail  = $request->file('product_thumbnail');
            Storage::putFile('public/img/', $product_thumbnail);
            $product->product_thumbnail = "storage/img/" . $product_thumbnail->hashName();
        }

        $product->save();

        return redirect()->route('admin.product.all')->with('success', 'New product created successfully');
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
        $product = Product::find($id);
        return view('pages.dashboard.product.edit', compact('product'));
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
            'product_title' => 'required|string',
            'product_price' => 'required|string',
            // 'product_thumbnail' => 'required|file',
        ]);


        $product =  Product::find($id);
        $product->product_title = $request->product_title;
        $product->product_price = $request->product_price;

        // $product->product_desc = $request->product_desc;
        // $product->product_quick_view_desc = $request->product_quick_view_desc;
        // $product->prodcut_button = $request->prodcut_button;
        // $product->prodcut_button_url = $request->prodcut_button_url;


        if ($request->file('product_thumbnail')) {
            $product_thumbnail  = $request->file('product_thumbnail');
            Storage::putFile('public/img/', $product_thumbnail);
            $product->product_thumbnail = "storage/img/" . $product_thumbnail->hashName();
        }
        $product->save();

        return redirect()->route('admin.product.all')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products =  Product::all();
        $product =  Product::find($id);

        if (count($products) > 1) {

            // @unlink(public_path($blog->product_thumbnail));
            $product->delete();
            return redirect()->route('admin.product.all')->with('success', 'Product Deleted successfully');
        } else {
            return redirect()->route('admin.product.all')->with('error', 'cannot delete all products');
        }
    }
}
