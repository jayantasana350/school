<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
{
    function GeneralSettings(){
        return view('backend.setup.general_settings');
    }
}
