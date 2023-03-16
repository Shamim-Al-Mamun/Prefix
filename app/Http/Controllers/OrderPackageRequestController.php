<?php

namespace App\Http\Controllers;

use App\Models\OrderPackage;

use Illuminate\Http\Request;

class OrderPackageRequestController extends Controller
{
    public function all()
    {
        $order_request_all = OrderPackage::all();
        return view('pages.dashboard.all-order-request', compact('order_request_all'));
    }
}
