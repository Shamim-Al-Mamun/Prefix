<?php

namespace App\Http\Controllers;

use App\Models\PayBillBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PayBillBankController extends Controller
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
        $banks = PayBillBank::all();
        return view('pages.dashboard.payBill.bank.all', compact('banks'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnew()
    {
        return view('pages.dashboard.payBill.bank.add');
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
            'title' => 'required|string',
            'text' => 'required|string',
            'account_name' => 'required|string',
            'account_no' => 'required|string',
            'branch' => 'required|string',

            'img' => 'required|file',
        ]);


        $payBillBank =  new PayBillBank;
        $payBillBank->title = $request->title;
        $payBillBank->text = $request->text;
        $payBillBank->account_name = $request->account_name;
        $payBillBank->account_no = $request->account_no;
        $payBillBank->routing_no = $request->routing_no;
        $payBillBank->branch = $request->branch;


        if ($request->file('img')) {
            $bank_thumbnail  = $request->file('img');
            Storage::putFile('public/img/', $bank_thumbnail);
            $payBillBank->img = "storage/img/" . $bank_thumbnail->hashName();
        }

        $payBillBank->save();

        return redirect()->route('admin.paybill.bank.all')->with('success', 'New bank added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayBillBank  $payBillBank
     * @return \Illuminate\Http\Response
     */
    public function show(PayBillBank $payBillBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayBillBank  $payBillBank
     * @return \Illuminate\Http\Response
     */
    public function edit(PayBillBank $payBillBank, $id)
    {
        $bank = PayBillBank::find($id);
        return view('pages.dashboard.paybill.bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayBillBank  $payBillBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayBillBank $payBillBank, $id)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'text' => 'required|string',
            'account_name' => 'required|string',
            'account_no' => 'required|string',
            'branch' => 'required|string',

            // 'img' => 'required|file',
        ]);

        $payBillBank =  PayBillBank::find($id);
        $payBillBank->title = $request->title;
        $payBillBank->text = $request->text;
        $payBillBank->account_name = $request->account_name;
        $payBillBank->account_no = $request->account_no;
        $payBillBank->routing_no = $request->routing_no;
        $payBillBank->branch = $request->branch;


        if ($request->file('img')) {
            $bank_thumbnail  = $request->file('img');
            Storage::putFile('public/img/', $bank_thumbnail);
            $payBillBank->img = "storage/img/" . $bank_thumbnail->hashName();
        }

        $payBillBank->save();

        return redirect()->route('admin.paybill.bank.all')->with('success', 'New bank updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayBillBank  $payBillBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayBillBank $payBillBank, $id)
    {
        $payBillBank =  PayBillBank::find($id);
        $payBillBank->delete();

        return redirect()->route('admin.paybill.bank.all')->with('success', 'bank Deleted successfully');
    }
}
