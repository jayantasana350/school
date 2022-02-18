<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\SubClass;
use Illuminate\Support\Str;

class ClassController extends Controller
{

    function Class(){
        $classes = Classes::paginate();
        $subclass = SubClass::all();
        $trushed_class = Classes::onlyTrashed()->get();
        return view('backend.setup.class.class',[
            'classes' => $classes,
            'trushed_class' => $trushed_class,
            'subclass' => $subclass,
        ]);
    }

    function ClassStore(Request $req){
        $class = New Classes;
        $class->class_name = $req->class_name;
        $class->slug = Str::slug($req->class_name);
        $class->save();
        return back()->with('ClassStore', "Class Add Successfully");
    }

    function ClassUpdate(Request $requ_udate){
        $update = Classes::findOrFail($requ_udate->id);
        $update->class_name = $requ_udate->class_name;
        $update->slug = Str::slug($requ_udate->class_name);
        $update->save();
        return back()->with('ClassUpdate', "Class Update Successfully");
    }

    function ClassDelete($id){
        Classes::findOrFail($id)->delete();
        return back()->with('ClassDelete', "Class Delete Successfully");
    }

    function ClassRestore($id){
        Classes::withTrashed()->findOrFail($id)->restore();
        return back()->with('ClassRestore', "Class Restore Successfully");
    }

    function ClassPermanentDelete($id){
        Classes::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('ClassPermanentDelete', "Class Permanent Delete Successfully");
    }

    function SubClassStore(Request $req){
        $class = New SubClass;
        $class->subclass_name = $req->subclass_name;
        $class->slug = Str::slug($req->subclass_name);
        $class->class_id = $req->class_id;
        $class->save();
        return back()->with('SubClassStore', "SubClass Add Successfully");
    }


}
