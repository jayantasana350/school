<?php

namespace App\Http\Controllers;

use App\Dormitory;
use Illuminate\Http\Request;

class DormitoryController extends Controller
{
    function DormitoryList(){
        $dormitory = Dormitory::paginate();
        $dormitory_trush = Dormitory::onlyTrashed()->get();
        return view('backend.setup.dormitory.dormitory_list',[
            'dormitory'=>$dormitory,
            'dormitory_trush'=>$dormitory_trush,
        ]);
    }

    function DormitoryStore(Request $request){
        $dormitory = New Dormitory;
        $dormitory->dormitory_name = $request->dormitory_name;
        $dormitory->description = $request->description;
        $dormitory->save();
        return back()->with('DormitoryStore', "Dormitory Add Successfully");
    }

    function DormitoryUpdate(Request $requ_udate){
        $update = Dormitory::findOrFail($requ_udate->id);
        $update->dormitory_name = $requ_udate->dormitory_name;
        $update->description = $requ_udate->description;
        $update->save();
        return back()->with('DormitoryUpdate', "Dormitory Update Successfully");
    }

    function DormitoryDelete($id){
        Dormitory::findOrFail($id)->delete();
        return back()->with('DormitoryDelete', "Dormitory Delete Successfully");
    }

    function DormitoryRestore($id){
        Dormitory::withTrashed()->findOrFail($id)->restore();
        return back()->with('DormitoryRestore', "Dormitory Restore Successfully");
    }

    function DormitoryPermanentDelte($id){
        Dormitory::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('DormitoryPermanentDelete', "Dormitory Permanent Delete Successfully");
    }
}
