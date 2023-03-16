<?php

namespace App\Http\Controllers;

use App\Models\PayBillOptionSteps;
use App\Models\PayBillOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PayBillOptionStepsController extends Controller
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
    public function store(Request $request, $id)
    {

        $this->validate($request, [
            'text' => 'required|string',
            'step_img' => 'required|file',
        ]);

        $PayBillOptionSteps =  new PayBillOptionSteps;

        $PayBillOptionSteps->text = $request->text;
        $PayBillOptionSteps->pay_bill_options_id = $id;

        if ($request->file('step_img')) {
            $step_img  = $request->file('step_img');
            Storage::putFile('public/img/', $step_img);
            $PayBillOptionSteps->img = "storage/img/" . $step_img->hashName();
        }

        $PayBillOptionSteps->save();

        return redirect()->route('admin.paybill.all')->with('success', 'New pay bill steps created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayBillOptionSteps  $payBillOptionSteps
     * @return \Illuminate\Http\Response
     */
    public function show(PayBillOptionSteps $payBillOptionSteps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayBillOptionSteps  $payBillOptionSteps
     * @return \Illuminate\Http\Response
     */
    public function edit(PayBillOptionSteps $payBillOptionSteps, $id)
    {
        $option = PayBillOptions::find($id);
        return view('pages.dashboard.paybill.steps', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayBillOptionSteps  $payBillOptionSteps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayBillOptionSteps $payBillOptionSteps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayBillOptionSteps  $payBillOptionSteps
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayBillOptionSteps $payBillOptionSteps)
    {
        //
    }
}
