<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherClass;
use App\Models\TeacherClassStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laratrust\Laratrust;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasrole('student')){

     $student =TeacherClassStudent::select('teacher_class_student.teacher_class_id')
    ->leftjoin('teacher_class','teacher_class.teacher_class_id','=','teacher_class_student.teacher_class_id')
    ->leftjoin('class','class.class_id','=','teacher_class.class_id')
    ->leftjoin('subject','subject.subject_id','=','teacher_class.subject_id')
    ->leftjoin('teacher','teacher.teacher_id','=','teacher_class.teacher_id')
    ->where('teacher_class_student.student_id','=',Auth::id())
    ->select('class.classname','teacher.firstname',
    'teacher.lastname','subject.subject_code','teacher_class_student.teacher_class_id')
    ->get();
    return view('studentdash',compact('student'));

        }
        elseif (Auth::user()->hasrole('teacher')){

            $query = Teacher::select('location')
            ->where('teacher_id','=',Auth::id())
            ->get();


            $teacher_class = TeacherClass::select('teacher_class.class_id')
                ->join('class', 'teacher_class.class_id', '=', 'class.class_id')
                ->where('teacher_id','=',Auth::id())
                ->select('classname','section','subject','room','teacher_class.class_id','teacher_class.teacher_class_id')
                ->get();
            return view('teacherdash',compact('teacher_class','query'));
        }
        elseif (Auth::user()->hasrole('admin')){

            return view('dashboard');
        }
    }


}
