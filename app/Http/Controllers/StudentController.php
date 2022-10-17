<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function get_all_student(){
        $students = Student::all();
        return view('student.student_manage',['students'=>$students]);
    }

    public function get_student_by_id($id){
        $student = Student::find($id);
        return view('student.student_edit', ['student' => $student]);
        return view('student_edit');
    }
    public function edit($id){
        $student = Student::find($id);
        $student->fullname = request('fullname');
        $student->birthday = request('birthday');
        $student->address = request('address');
        $student->save();
        return redirect('/student');
    }
}
