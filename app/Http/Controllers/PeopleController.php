<?php

namespace App\Http\Controllers;

use App\Models\TeacherClassStudent;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(Request $request){

             $value = $request->session()->pull('key');


             $people = TeacherClassStudent::select('teacher_class_student.student_id')
             ->leftJoin('student','student.student_id','=','teacher_class_student.student_id')
                 ->RightJoin('users','users.user_id','=','teacher_class_student.student_id')
                 ->join('class','class.class_id','=','teacher_class_student.teacher_class_id')
                ->where('teacher_class_id','=',$value)
                 ->select('student.firstname','student.lastname','users.avatar')
             ->get();

        return view('people.index',compact('people'));
    }
}
