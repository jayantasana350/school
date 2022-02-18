<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    function Subjects(){
        $classes = Classes::all();
        $subject_list = Subject::paginate();
        $trushed_subject = Subject::onlyTrashed()->get();
        return view('backend.setup.subjects.subjects',[
            'classes' => $classes,
            'subject_list' => $subject_list,
            'trushed_subject' => $trushed_subject,
        ]);
    }

    function SubjectStore(Request $request){
        $subject = New Subject;
        $subject->subject = $request->subject;
        $subject->slug = Str::slug($request->subject);
        $subject->abbrivation = $request->abbrivation;
        $subject->class_id = $request->class_id;
        $subject->save();
        return back()->with('SubjectStore', "Subject Add Successfully");
    }

    function SubjectUpdate(Request $requ_udate){
        $update = Subject::findOrFail($requ_udate->id);
        $update->subject = $requ_udate->subject;
        $update->slug = Str::slug($requ_udate->subject);
        $update->abbrivation = $requ_udate->abbrivation;
        $update->class_id = $requ_udate->class_id;
        $update->save();
        return back()->with('SubjectUpdate', "Subject Update Successfully");
    }

    function SubjectDelete($id){
        Subject::findOrFail($id)->delete();
        return back()->with('SubjectDelete', "Subject Delete Successfully");
    }

    function SubjectRestore($id){
        Subject::withTrashed()->findOrFail($id)->restore();
        return back()->with('SubjectRestore', "Subject Restore Successfully");
    }

    function SubjectPermanentDelete($id){
        Subject::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('SubjectPermanentDelete', "Subject Permanent Delete Successfully");
    }
}
