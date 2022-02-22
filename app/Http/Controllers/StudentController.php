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
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\React;

class StudentController extends Controller
{
    function StudentsList(){
        $students = Students::paginate();
        $dormitory = Dormitory::paginate();
        $trushed_student = Students::onlyTrashed()->get();
        return view('backend.students.student',[
            'dormitory' => $dormitory,
            'students' => $students,
            'trushed_student' => $trushed_student,
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

        $request->validate([
            'registration' => ['required', 'unique:students', 'min:3'],
            'image' => ['required', 'unique:students'],
        ]);

        $students = New Students;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = Str::random(10). '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('images/students/'. $ext));

            $students->image = $ext;
        }
        $students->name = $request->name;
        $students->slug = Str::slug($request->name);
        $students->dateofbirth = $request->dateofbirth;
        $students->country_id = $request->country_id;
        $students->state_id = $request->state_id;
        $students->city_id = $request->city_id;
        $students->gender = $request->gender;
        $students->religion = $request->religion;
        $students->admission_name = $request->admission_name;
        $students->section = $request->section;
        $students->class_lavel = $request->class_lavel;
        $students->registration = $request->registration;
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

    function StudentUpdate(Request $stu_request){
        $student_update = Students::findOrFail($stu_request->id);
        if ($stu_request->hasFile('image')) {
            $image = $stu_request->file('image');
            $ext = Str::random(10). '.' . $image->getClientOriginalExtension();
            $old_img_location = public_path('images/students/'. $student_update->thumbnail);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }
            Image::make($image)->save(public_path('images/students/'. $ext));

            $student_update->image = $ext;
        }
        $student_update->name = $stu_request->name;
        $student_update->slug = Str::slug($stu_request->name);
        $student_update->dateofbirth = $stu_request->dateofbirth;
        $student_update->country_id = $stu_request->country_id;
        $student_update->state_id = $stu_request->state_id;
        $student_update->city_id = $stu_request->city_id;
        $student_update->gender = $stu_request->gender;
        $student_update->religion = $stu_request->religion;
        $student_update->admission_name = $stu_request->admission_name;
        $student_update->section = $stu_request->section;
        $student_update->class_lavel = $stu_request->class_lavel;
        $student_update->registration = $stu_request->registration;
        $student_update->admission_date = $stu_request->admission_date;
        $student_update->father_name = $stu_request->father_name;
        $student_update->father_occupation = $stu_request->father_occupation;
        $student_update->mother_name = $stu_request->mother_name;
        $student_update->mother_occupation = $stu_request->mother_occupation;
        $student_update->student_phone = $stu_request->student_phone;
        $student_update->gardian_phone = $stu_request->gardian_phone;
        $student_update->email = $stu_request->email;
        $student_update->address = $stu_request->address;
        $student_update->save();
        return back()->with('StudentUpdate', "Student Update Successfully");
    }

    function StudentDelete($id){
        Students::findOrFail($id)->delete();
        return back()->with('StudentDelete', "Students Delete Successfully");
    }

    function StudentRestore($id){
        Students::withTrashed()->findOrFail($id)->restore();
        return back()->with('StudentRestore', "Students Restore Successfully");
    }

    function StudentPermanentDelete($id){
        Students::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('StudentPermanentDelete', "Students Permanent Delete Successfully");
    }
}
