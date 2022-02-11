<?php

namespace App\Http\Controllers;

use App\Dormitory;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function StudentsList(){
        $dormitory = Dormitory::paginate();
        return view('backend.students.student',[
            'dormitory' => $dormitory,
        ]);
    }

    function StudentsAdd(){
        return view('backend.students.students_add');
    }

    function StudentStore(Request $request){
        return $request->all();
    }
}
