<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    function Fee(){
        return view('backend.setup.fee.fee');
    }
}
