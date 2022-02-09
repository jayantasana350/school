<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Str;
use Image;

class GeneralSettingsController extends Controller
{
    function GeneralSettings(){
        return view('backend.setup.general_settings');
    }

    function GeneralSettingsStore(Request $request){

        $setting = New GeneralSetting;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $ext = Str::random(10). '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('images/logo/'. $ext));

            $setting->logo = $ext;
        }



        $setting->title = $request->title;
        $setting->language = $request->language;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->payment_tax = $request->payment_tax;
        $setting->footer = $request->footer;
        $setting->attendencemodel = $request->attendencemodel;
        $setting->exam_details = $request->exam_details;
        $setting->send_examdetails = $request->send_examdetails;
        $setting->studants_absance = $request->studants_absance;
        $setting->multiple = $request->multiple;
        $setting->save();

        return back();


    }
}
