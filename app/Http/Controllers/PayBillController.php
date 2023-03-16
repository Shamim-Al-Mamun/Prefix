<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PayBill;


class PayBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paybill = PayBill::first();
        return view('pages.dashboard.payBill.paybill', compact('paybill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'paybill_section_label' => 'required|string',
            'paybill_section_title_desc' => 'required|string',
        ]);

        $paybill = PayBill::first();
        $paybill->paybill_section_label = $request->paybill_section_label;
        $paybill->paybill_section_title_desc = $request->paybill_section_title_desc;

        // $paybill->paybill_section_first_title = $request->paybill_section_first_title;
        // $paybill->paybill_section_title_middle = $request->paybill_section_title_middle;
        // $paybill->paybill_section_title_last = $request->paybill_section_title_last;
        // $paybill->paybill_tab_name_one = $request->paybill_tab_name_one;
        // $paybill->paybill_tab_name_two = $request->paybill_tab_name_two;
        // $paybill->paybill_tab_name_three = $request->paybill_tab_name_three;
        // $paybill->paybill_button_one = $request->paybill_button_one;
        // $paybill->paybill_button_url_one = $request->paybill_button_url_one;
        // $paybill->paybill_button_two = $request->paybill_button_two;
        // $paybill->paybill_button_url_two = $request->paybill_button_url_two;
        // $paybill->paybill_button_three = $request->paybill_button_three;
        // $paybill->paybill_button_url_three = $request->paybill_button_url_three;

        // if($request->file('paybill_bg_image')){
        //     $paybill_bg_image_file = $request->file('paybill_bg_image');
        //     $paybill_bg_image_file->storeAs('public/img/','paybill_bg_image.' . $paybill_bg_image_file->getClientOriginalExtension());
        //     $paybill->paybill_bg_image = 'storage/img/paybill_bg_image.' . $paybill_bg_image_file->getClientOriginalExtension();
        // }


        // if($request->file('paybill_image_one')){
        //     $paybill_image_file_one = $request->file('paybill_image_one');
        //     $paybill_one_fileName = $paybill_image_file_one->getClientOriginalName();
        //     dd($paybill_one_fileName);
        //     $paybill_image_file_one->storeAs('public/img', $paybill_one_fileName);
        //     $value = $paybill->paybill_image_one = 'storage/img/' . $paybill_one_fileName;
        // }

        // // if($request->file('paybill_image_one')){
        // //     $paybill_image_file_one = $request->file('paybill_image_one');
        // //     $paybill_image_file_one->storeAs('public/img/','paybill_image_one.' . $paybill_image_file_one->getClientOriginalExtension());
        // //     $paybill->paybill_image_one = 'storage/img/paybill_image_one.' . $paybill_image_file_one->getClientOriginalExtension();
        // // }


        // // if($request->file('paybill_image_two')){
        // //     $paybill_image_file_two = $request->file('paybill_image_two');
        // //     $paybill_image_file_two->storeAs('public/img/','paybill_image_two.' . $paybill_image_file_two->getClientOriginalExtension());
        // //     $paybill->paybill_image_two = 'storage/img/paybill_image_two.' . $paybill_image_file_two->getClientOriginalExtension();
        // // }

        // if($request->file('paybill_image_two')){
        //     $paybill_image_file_two = $request->file('paybill_image_two');
        //     $paybill_two_fileName = $paybill_image_file_two->getClientOriginalName();
        //     $paybill_image_file_two->storeAs('public/img', $paybill_two_fileName);
        //     $value = $paybill->paybill_image_two = 'storage/img/' . $paybill_two_fileName;
        // }

        // // if($request->file('paybill_image_three')){
        // //     $paybill_image_file_three = $request->file('paybill_image_three');
        // //     $paybill_image_file_three->storeAs('public/img/','paybill_image_three.' . $paybill_image_file_three->getClientOriginalExtension());
        // //     $paybill->paybill_image_three = 'storage/img/paybill_image_three.' . $paybill_image_file_three->getClientOriginalExtension();
        // // }

        // if($request->file('paybill_image_three')){
        //     $paybill_image_file_three = $request->file('paybill_image_two');
        //     $paybill_three_fileName = $paybill_image_file_two->getClientOriginalName();
        //     $paybill_image_file_three->storeAs('public/img', $paybill_three_fileName);
        //     $value = $paybill->paybill_image_three = 'storage/img/' . $paybill_three_fileName;
        // }

        $paybill->save();
        return redirect()->route('admin.paybill')->with('success', "Paybill Settings Data has been update successfully.");
    }
}
