<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherClass;
use App\Models\TeacherClassStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\TableInsert;

class ClassJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('joins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
//        $var = 'suscipit';
//        $join = TeacherClass::select('class_code');
//        $join->where('class_code','=',$var);
//            if($join){
//          $join->select('teacher_class_id','class_id','teacher_id');
//
//               }
//           else{
//            echo 'Yes we have no rows';
//        }
//            $result = $join->get();
//
//        foreach($result as $results){
//
//            $student = TeacherClassStudent::create(array(
//                'teacher_class_id' => $results['teacher_class_id'], // if you use in there.
//                'student_id' =>Auth::id(),
//                'teacher_id' => $results['teacher_id'],
//            ));
//
//    }
//        dd($student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $class_code = $request->input('classcode');
        $join = TeacherClass::select('class_code');
        $join->where('class_code','=',$class_code);
        if($join){
            $join->select('teacher_class_id','class_id','teacher_id');

        }

        $result = $join->get();

        foreach($result as $results){

            $student = TeacherClassStudent::create(array(
                'teacher_class_id' => $results['teacher_class_id'], // if you use in there.
                'student_id' =>Auth::id(),
                'teacher_id' => $results['teacher_id'],
            ));}
//        $studentyante =TeacherClassStudent::select('teacher_class_student.teacher_class_id')
//            ->leftjoin('teacher_class','teacher_class.teacher_class_id','=','teacher_class_student.teacher_class_id')
//            ->leftjoin('class','class.class_id','=','teacher_class.class_id')
//            ->leftjoin('subject','subject.subject_id','=','teacher_class.subject_id')
//            ->leftjoin('teacher','teacher.teacher_id','=','teacher_class.teacher_id')
//            ->where('teacher_class_student.student_id','=',Auth::id())
//            ->select('class.classname','teacher.firstname','teacher.lastname')
//            ->get();
        return redirect('dashboard');
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
