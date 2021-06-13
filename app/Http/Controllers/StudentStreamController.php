<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\TeacherClassAnnouncements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class StudentStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $get_id = $request->route('teacher_class_id');
        dd($get_id);
        return view('student.stream');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stream(Request $request,$teacher_class_id)
    {

       $id = $teacher_class_id;

//           $announcement = TeacherClassAnnouncements::all()
//           ->where('teacher_class_id','=',$id);
//        $announcement = TeacherClassAnnouncements::select('teacher_class_announcements.teacher_id')
//         ->join('teacher','teacher.teacher_id','=','teacher_class_announcements.teacher_id')
//        ->where('teacher_class_announcements.teacher_class_id','=',$id)
//            ->select('teacher.firstname','teacher.lastname','teacher_class_announcements.content',
//             'teacher_class_announcements.teacher_class_announcements.teacher_class_announcements_id')
//         ->get();
        $assignment = Assignment::select('assignment.teacher_id')
            ->join('teacher','teacher.teacher_id','=','assignment.teacher_id')
            ->where('assignment.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','assignment.title','assignment_id')
            ->get();



        $quiz = Quiz::select('quiz.teacher_id')
            ->join('teacher','teacher.teacher_id','=','quiz.teacher_id')
            ->where('quiz.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','quiz.title','quiz_id')
            ->get();
        $material = Material::select('materials.teacher_id')
            ->join('teacher','teacher.teacher_id','=','materials.teacher_id')
            ->where('materials.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','materials.title','materials.material_id')
            ->get();
        $question = Question::select('question.teacher_id')
            ->join('teacher','teacher.teacher_id','=','question.teacher_id')
            ->where('question.class_id','=',$id)
            ->select('teacher.firstname','teacher.lastname','question.question_title','question.question_id')
            ->get();


        return view('student.stream',compact('assignment','quiz','material','question','id'));
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


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher_class_id)
    {
           return 'hello';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailsShow($assignment_id,$class_id){

        $id = $assignment_id;
        $assignment =  Assignment::select('teacher_id')
            ->join('teacher','teacher.teacher_id','=','assignment.teacher_id')
            ->where('class_id','=',$class_id)
            ->select('teacher.firstname','teacher.lastname','assignment.title','assignment.desc','assignment.assignment_id',
                'assignment.fname')
            ->get();


       return view('classworkdetails.index',compact('assignment','id','class_id'));
    }

    public function downloadfile(Request $request,$fname){

        return Storage::download($fname);

    }


   public function quizShow($quiz_id,$id)
   {

       $class_id = $id;
       $quiz = Quiz::select('teacher_id')
           ->join('teacher','teacher.teacher_id','=','quiz.teacher_id')
           ->where('class_id','=',$class_id)
           ->select('teacher.firstname','teacher.lastname','quiz.title','quiz.desc','quiz.quiz_id','quiz.fname')
           ->get();
         return view('classworkdetails.quizDetails',compact('quiz','class_id','quiz_id'));
   }

   public function materialShow($material_id,$id){

       $material = Material::select('teacher_id')
           ->join('teacher','teacher.teacher_id','=','materials.teacher_id')
           ->where('class_id','=',$id)
           ->select('teacher.firstname','teacher.lastname','materials.title','materials.desc','materials.material_id','material.fname')
           ->get();
        return view('classworkdetails.materialDetails',compact('material'));
   }

    public function questionShow($question_id){
        $question = Question::select('teacher_id')
            ->join('teacher','teacher.teacher_id','=','question.teacher_id')
            ->where('class_id','=',$question_id)
            ->select('teacher.firstname','teacher.lastname','question.question_title','question.question_description','question.question_id')
            ->get();
        return view('classworkdetails.questionDetails',compact('question'));
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
