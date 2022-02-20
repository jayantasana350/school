<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Fee;
use App\SubClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeeController extends Controller
{
    function Fee(){
        $classes = Classes::all();
        $subclass = SubClass::all();
        $allfees = Fee::paginate();
        $allfee_lists = Fee::all();
        $trush = Fee::onlyTrashed()->get();
        return view('backend.setup.fee.fee',[
            'classes' => $classes,
            'subclass' => $subclass,
            'allfees' => $allfees,
            'allfee_lists' => $allfee_lists,
            'trush' => $trush,
        ]);
    }

    function FeeStore(Request $req){

        $class = New Fee;
        $class->section = $req->section;
        $class->slug = Str::slug($req->section);
        $class->class_lavel = $req->class_lavel;
        $class->fee_name = $req->fee_name;
        $class->amount = $req->amount;
        $class->save();
        return back()->with('FeeStore', "Fee Add Successfully");
    }

    function FeeUpdate(Request $req_subupdate){
        $subclassupdate = Fee::findOrFail($req_subupdate->id);
        $subclassupdate->section = $req_subupdate->section;
        $subclassupdate->slug = Str::slug($req_subupdate->section);
        $subclassupdate->class_lavel = $subclassupdate->class_lavel;
        $subclassupdate->fee_name = $subclassupdate->fee_name;
        $subclassupdate->amount = $subclassupdate->amount;
        $subclassupdate->save();
        return back()->with('FeeUpdate', "Fee Update Successfully");
    }

    function FeeDelete($id){
        Fee::findOrFail($id)->delete();
        return back()->with('FeeDelete', "Fee Delete Successfully");
    }

    function FeeRestore($id){
        Fee::withTrashed()->findOrFail($id)->restore();
        return back()->with('FeeRestore', "Fee Restore Successfully");
    }

    function FeePermanentDelete($id){
        Fee::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('FeePermanentDelete', "Fee Permanent Delete Successfully");
    }
}
