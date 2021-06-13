<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Classes;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherClass;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class TClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        $subjects = Subject::all();
        return view('tclass.create',compact('classes','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tclasses = new TeacherClass;
        $tclasses->class_id = $request-> input('class');
        $tclasses->subject_id = $request-> input('subject');
        $tclasses->teacher_id =Auth::id();
        $tclasses->school_year =2021;
        $tclasses->class_code = Str::random(5);
        $tclasses->save();



        $teacher_class = TeacherClass::select('teacher_class.class_id')
            ->leftjoin('class', 'teacher_class.class_id', '=', 'class.class_id')
            ->where('teacher_id','=',Auth::id())
            ->select('classname','teacher_class.class_id','teacher_class.teacher_class_id')
            ->get();
            foreach ($teacher_class as $class) {
               $class->teacher_class_id;
             }

//            dd($class);
        return view('teacherdash',compact('teacher_class','class'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function classstore(Request $request)
    {

       $classes = new Classes;
       $classes->classname = $request-> input('classname');
       $classes->section= $request-> input('section');
       $classes->subject= $request-> input('subject');
       $classes->room = $request-> input('room');
       $classes->save();

        $class_id = $classes->class_id;

        $tclasses = new TeacherClass;
        $tclasses->class_id = $class_id;
        $tclasses->subject_id =1;
        $tclasses->teacher_id =Auth::id();
        $tclasses->school_year =2021;
        $tclasses->class_code = Str::random(5);
        $tclasses->save();

        $teacher_class = TeacherClass::select('teacher_class.class_id')
            ->leftjoin('class', 'teacher_class.class_id', '=', 'class.class_id')
            ->where('teacher_id','=',Auth::id())
            ->select('classname','teacher_class.class_id','teacher_class.teacher_class_id')
            ->get();

        return view('teacherdash',compact('teacher_class'));

    }

    /**
     * Display the specified resource.
     *
     * @param  TeacherClass $teacher_class
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherClass $teacher_class,$teacher_class_id,Request $request)
    {
        $id = $teacher_class_id;
        $request->session()->put('key', $id);

        $show = Assignment::select('assignment.teacher_id')
         ->join('teacher','teacher.teacher_id','=','assignment.teacher_id')
            ->where('teacher.teacher_id','=',Auth::id())
            ->where('assignment.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','assignment.title','assignment.assignment_id')
         ->get();

             $quiz = Quiz::select('quiz.teacher_id')
             ->join('teacher','teacher.teacher_id','=','quiz.teacher_id')
             ->where('teacher.teacher_id','=',Auth::id())
                 ->where('quiz.class_id','=',$id)
                 ->select('teacher.firstname','teacher.lastname','quiz.title','quiz.quiz_id')
               ->get();

        $question = Question::select('question.teacher_id')
        ->join('teacher','teacher.teacher_id','=','question.teacher_id')
        ->where('teacher.teacher_id','=',Auth::id())
            ->where('question.class_id','=',$id)
        ->select('teacher.firstname','teacher.lastname','question.question_title','question.question_id')
        ->get();

        $material = Material::select('materials.teacher_id')
            ->join('teacher','teacher.teacher_id','=','materials.teacher_id')
            ->where('teacher.teacher_id','=',Auth::id())
            ->where('materials.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','materials.title','materials.material_id')
        ->get();

        return view('tclass.show',compact('teacher_class','show','quiz','material','question'));
    }
//    /**
//     * Display the specified resource.
//     * @param  \Illuminate\Http\Request  $request
//     * @param  TeacherClass $teacher_class
//     * @return \Illuminate\Http\Response
//     */
    public function another(Request $request,TeacherClass $teacher_class)
    {
        return view('tclass.another',compact('teacher_class'));
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

public function classWork(){
    return view('tclass.classwork');
}
}

