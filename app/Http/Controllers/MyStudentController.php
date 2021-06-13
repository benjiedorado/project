<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\TeacherClass;
use App\Models\TeacherClassStudent;
use Illuminate\Http\Request;

class MyStudentController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  TeacherClass $teacher_class
     * @return \Illuminate\Http\Response
     */
    public function index(TeacherClass $teacher_class)
    {

            $student_class = Student::select('student.student_id')
                ->leftjoin('class','class.class_id','=','student.class_id')
                ->select('classname','student.student_id','student.class_id','student.firstname','student.lastname')
                ->get();
                return view('mystudent.index',compact('student_class','teacher_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Add = $request->input('add_student');
//
//        if($Add == 'Add'){
//
//
//            mysqli_query($conn,"insert into teacher_class_student (student_id,teacher_class_id,teacher_id) values('$id','$class_id','$teacher_id') ")or die(mysqli_error());
//
//
//        }
//        if () {
//
//        }
        if($Add == 'Add'){
          $teacher_student =new TeacherClassStudent;
          $teacher_student->teacher_class_id = $request->input('id_number');
          $teacher_student->student_id = $request->input('student_id');
          $teacher_student->teacher_id = $request->input('teacher_id');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
