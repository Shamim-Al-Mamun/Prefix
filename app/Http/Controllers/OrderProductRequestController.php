<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderProductRequestController extends Controller
{
    public function all()
    {
        $order_product_request_all = OrderProduct::all();
        return view('pages.dashboard.all-prouduct-request', compact('order_product_request_all'));
    }
}
