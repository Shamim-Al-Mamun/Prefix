<?php

namespace App\Http\Controllers;

use App\Models\PayBillOptions;
use App\Models\PayBillOptionSteps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PayBillOptionsController extends Controller
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
        $payBillOptions = PayBillOptions::all();
        // $payBillOptions = PayBillOptions::with('pay_bill_option_steps')->get();
        return view('pages.dashboard.payBill.all', compact('payBillOptions'));
    }
    public function addnew()
    {
        return view('pages.dashboard.payBill.addnew');
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
            'option' => 'required|string',
        ]);


        $payBillOptions =  new PayBillOptions;
        $payBillOptions->option = $request->option;
        $payBillOptions->save();

        return redirect()->route('admin.paybill.all')->with('success', 'New pay bill created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayBillOptions  $payBillOptions
     * @return \Illuminate\Http\Response
     */
    public function show(PayBillOptions $payBillOptions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayBillOptions  $payBillOptions
     * @return \Illuminate\Http\Response
     */
    public function edit(PayBillOptions $payBillOptions, $id)
    {
        $option = PayBillOptions::find($id);
        return view('pages.dashboard.paybill.edit', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayBillOptions  $payBillOptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'option' => 'required|string',
        ]);

        $payBillOptions =  PayBillOptions::find($id);
        $payBillOptions->option = $request->option;
        $payBillOptions->save();

        if (count($request->text) > 0) {
            foreach ($request->text as $id => $val) {
                $payBillOptionStepText =  PayBillOptionSteps::find($id);
                $payBillOptionStepText->text = $val;
                $payBillOptionStepText->save();
            }
        }

        if ($request->file('step_img') && count($request->file('step_img')) > 0) {
            foreach ($request->file('step_img') as $id => $val) {

                $step_img  = $val;
                // dd($step_img->hashName());
                Storage::putFile('public/img/', $step_img);

                $PayBillOptionStepImg =  PayBillOptionSteps::find($id);
                $PayBillOptionStepImg->img = "storage/img/" . $step_img->hashName();
                $PayBillOptionStepImg->save();
            }
        }

        // dd($request->file('step_img'));

        return redirect()->route('admin.paybill.all')->with('success', 'Pay Bill updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayBillOptions  $payBillOptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayBillOptions $payBillOptions, $id)
    {
        $payBillOptions =  PayBillOptions::find($id);
        // @unlink(public_path($blog->product_thumbnail));
        $payBillOptions->delete();

        return redirect()->route('admin.paybill.all')->with('success', 'pay bill Deleted successfully');
    }
}
