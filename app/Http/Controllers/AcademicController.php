<?php

namespace App\Http\Controllers;

use App\Academic;
use Illuminate\Http\Request;
use App\Term;
use Illuminate\Support\Str;

class AcademicController extends Controller
{
    function Acadamic(){
        $terms = Term::all();
        $academics = Academic::paginate();
        $trushed_academic = Academic::onlyTrashed()->get();
        return view('backend.setup.academic.academic',[
            'terms' => $terms,
            'academics' => $academics,
            'trushed_academic' => $trushed_academic,
        ]);
    }

    function AcadamicStore(Request $academic){
        $add_academic = New Academic;
        $add_academic->session = $academic->session;
        $add_academic->slug = Str::slug($academic->session);
        $add_academic->term_id = $academic->term_id;
        $add_academic->active_status = $academic->active_status;
        $add_academic->save();
        return back();
    }

    function AcadamicUpdate(Request $requ_udate){
        $update = Academic::findOrFail($requ_udate->id);
        $update->session = $requ_udate->session;
        $update->slug = Str::slug($requ_udate->session);
        $update->active_status = $requ_udate->active_status;
        $update->term_id = $requ_udate->term_id;
        $update->save();
        return back()->with('AcadamicUpdate', "Academic Update Successfully");
    }

    function AcadamicDelete($id){
        Academic::findOrFail($id)->delete();
        return back()->with('AcadamicDelete', "Academic Delete Successfully");
    }

    function AcadamicRestore($id){
        Academic::withTrashed()->findOrFail($id)->restore();
        return back()->with('AcadamicRestore', "Academic Restore Successfully");
    }

    function AcadamicPermanentDelte($id){
        Academic::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('AcadamicPermanentDelte', "Academic Permanent Delete Successfully");
    }

    function TermStore(Request $request){
        $term = New Term;
        $term->term_name = $request->term_name;
        $term->slug = Str::slug($request->term_name);
        $term->save();
        return back();
    }


}
