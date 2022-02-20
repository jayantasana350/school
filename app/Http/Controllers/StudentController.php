<?php

namespace App\Http\Controllers;

use App\City;
use App\Classes;
use App\Dormitory;
use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\Students;
use App\SubClass;
use Laravel\Ui\Presets\React;

class StudentController extends Controller
{
    function StudentsList(){
        $students = Students::paginate();
        $dormitory = Dormitory::paginate();
        return view('backend.students.student',[
            'dormitory' => $dormitory,
            'students' => $students,
        ]);
    }

    function StudentsAdd(){
        $classes = Classes::all();
        $subclasses = SubClass::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $states = State::orderBy('name', 'asc')->get();
        $cities = City::orderBy('name', 'asc')->get();
        return view('backend.students.students_add',[
            'countries' => $countries,
            'states' => $states,
            'cities' => $cities,
            'classes' => $classes,
            'subclasses' => $subclasses,
        ]);
    }

    function GetState($id){
        $states = State::where('country_id', $id)->get();
        return response()->json($states);
    }

    function GetCity($id){
        $cities = City::where('state_id', $id)->get();
        return response()->json($cities);
    }

    function StudentStore(Request $request){
        $students = New Students;
        $students->name = $request->name;
        $students->dateofbirth = $request->dateofbirth;
        $students->country_id = $request->country_id;
        $students->state_id = $request->state_id;
        $students->city_id = $request->city_id;
        $students->gender = $request->gender;
        $students->religion = $request->religion;
        $students->image = $request->image;
        $students->admission_name = $request->admission_name;
        $students->section = $request->section;
        $students->class_lavel = $request->class_lavel;
        $students->class_alphabet = $request->class_alphabet;
        $students->admission_date = $request->admission_date;
        $students->father_name = $request->father_name;
        $students->father_occupation = $request->father_occupation;
        $students->mother_name = $request->mother_name;
        $students->mother_occupation = $request->mother_occupation;
        $students->student_phone = $request->student_phone;
        $students->gardian_phone = $request->gardian_phone;
        $students->email = $request->email;
        $students->address = $request->address;
        $students->save();
        return back()->with('StudentStore', "Student Added Successfully");
    }

    function StudentEdit($id){
        $classes = Classes::all();
        $subclasses = SubClass::all();
        $countries = Country::orderBy('name', 'asc')->get();
        $states = State::orderBy('name', 'asc')->get();
        $cities = City::orderBy('name', 'asc')->get();
        $students = Students::findOrFail($id);;
        return view('backend.students.student_edit',[
            'countries' => $countries,
            'states' => $states,
            'cities' => $cities,
            'classes' => $classes,
            'subclasses' => $subclasses,
            'students' => $students,
        ]);
    }
}
