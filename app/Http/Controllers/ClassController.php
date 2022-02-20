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
        $allclass = Classes::all();
        $subclass = SubClass::all();
        $trushed_class = Classes::onlyTrashed()->get();
        $trushed_subclass = SubClass::onlyTrashed()->get();
        return view('backend.setup.class.class',[
            'classes' => $classes,
            'trushed_class' => $trushed_class,
            'subclass' => $subclass,
            'allclass' => $allclass,
            'trushed_subclass' => $trushed_subclass,
        ]);
    }

    function ClassStore(Request $req){
        $req->validate([
            'class_name' => ['required', 'unique:classes', 'min:3'],
        ]);
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
        $req->validate([
            'subclass_name' => ['required', 'unique:sub_classes', 'min:3'],
        ]);

        $class = New SubClass;
        $class->subclass_name = $req->subclass_name;
        $class->slug = Str::slug($req->subclass_name);
        $class->class_id = $req->class_id;
        $class->save();
        return back()->with('SubClassStore', "SubClass Add Successfully");
    }

    function SubClassUpdate(Request $req_subupdate){
        $subclassupdate = SubClass::findOrFail($req_subupdate->id);
        $subclassupdate->subclass_name = $req_subupdate->subclass_name;
        $subclassupdate->slug = Str::slug($req_subupdate->subclass_name);
        $subclassupdate->class_id = $subclassupdate->class_id;
        $subclassupdate->save();
        return back()->with('SubClassUpdate', "SubClass Update Successfully");
    }

    function SubClassDelete($id){
        SubClass::findOrFail($id)->delete();
        return back()->with('ClassDelete', "SubClass Delete Successfully");
    }

    function SubClassRestore($id){
        SubClass::withTrashed()->findOrFail($id)->restore();
        return back()->with('ClassRestore', "SubClass Restore Successfully");
    }

    function SubjectPermanentDelete($id){
        SubClass::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('ClassPermanentDelete', "SubClass Permanent Delete Successfully");
    }

    function ClassAjax($id){
        $sub_class = SubClass::where('class_id', $id)->get();
        return response()->json($sub_class);
    }
}
