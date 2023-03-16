<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSettings;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_settings = AboutSettings::first();
        return view('pages.dashboard.about-settings', compact('about_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'about_section_label' => 'required|string',
            'about_section_title_desc' => 'required|string',
            'about_section_first_title' => 'required|string',
            'about_section_title_middle' => 'required|string',
            'about_section_title_last' => 'required|string',
            'about_section_title_rich_desc' => 'required|string',

            // 'about_image' => 'required|string',
        ]);

        $about_settings = AboutSettings::first();
        $about_settings->about_section_label = $request->about_section_label;
        $about_settings->about_section_title_desc = $request->about_section_title_desc;

        $about_settings->about_section_first_title = $request->about_section_first_title;
        $about_settings->about_section_title_middle = $request->about_section_title_middle;
        $about_settings->about_section_title_last = $request->about_section_title_last;
        $about_settings->about_section_title_rich_desc = $request->about_section_title_rich_desc;


        // $about_settings->about_title = $request->about_title;
        // $about_settings->about_experience_icon = $request->about_experience_icon;
        // $about_settings->about_experience_number = $request->about_experience_number;
        // $about_settings->about_experience_after_number = $request->about_experience_after_number;
        // $about_settings->about_experience_text = $request->about_experience_text;
        // $about_settings->about_progress_label = $request->about_progress_label;
        // $about_settings->about_progress_percent = $request->about_progress_percent;
        // $about_settings->about_progress_label_two = $request->about_progress_label_two;
        // $about_settings->about_progress_label_two_percent = $request->about_progress_label_two_percent;
        // $about_settings->about_progress_label_three = $request->about_progress_label_three;
        // $about_settings->about_progress_label_three_percent = $request->about_progress_label_three_percent;
        // $about_settings->about_progress_label_four = $request->about_progress_label_four;
        // $about_settings->about_progress_label_four_percent = $request->about_progress_label_four_percent;


        if ($request->file('about_image')) {
            $about_image  = $request->file('about_image');
            Storage::putFile('public/img/', $about_image);
            $about_settings->about_image = "storage/img/" . $about_image->hashName();
        }

        $about_settings->save();
        return redirect()->route('admin.about')->with('success', "About Data has been update successfully.");
    }
}
