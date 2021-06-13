<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Material;
use App\Models\Notification;
use App\Models\Question;
use App\Models\QuestionType;
use App\Models\User;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Quiz;
use App\Models\TeacherClassAnnouncements;
use Illuminate\Support\Facades\Auth;


class ClassWorkController extends Controller
{

    public function assignment(){
        return view('classwork.assignment');
    }

    public function assignmentStore(Request $request){
        $value = $request->session()->pull('key');

        $assignment = new Assignment;
        $assignment->title = $request->input('title');
        $assignment->desc = $request->input('description');
        $assignment->teacher_id = Auth::id();
        $assignment->class_id = $value;
        $assignment->save();
        $var = $assignment->class_id;

        if($request->file()) {
            $file = $request->file('fileupload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $fnotif = $file->getClientOriginalName();
            $location = 'storage/files';
            // Upload file
            $path = $file->move($location, $filename);
            $assignment->fname = $filename;
            $assignment->floc = $path;
            $assignment->save();
        }

        $notification = new Notification();
        $notification->teacher_class_id = $value;
        $notification->notification = 'Add new assignment' . ' '. '<b>'.$fnotif.'</b>';
        $notification->date_of_notification = Carbon::now();
        $notification->link ='default';
        $notification->save();


        return view('tclass.classwork',compact('var'));
    }


    public function quiz(){



        return view('classwork.quiz');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function quizStore(Request $request){
        $value = $request->session()->pull('key');
        $quiz = new Quiz;
        $quiz->title = $request->input('title');
        $quiz->desc = $request->input('description');
        $quiz->teacher_id = Auth::id();
        $quiz->class_id = $value;
        $quiz->save();

        if($request->file()) {
            $file = $request->file('fileupload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $fnotif = $file->getClientOriginalName();
            $location = 'storage/files';
            // Upload file
            $path = $file->move($location, $filename);
            $quiz->fname = $filename;
            $quiz->floc = $path;
            $quiz->save();
        }
        $notification = new Notification();
        $notification->teacher_class_id = $value;
        $notification->notification = 'Add new Quiz' . ' '. '<b>'.$fnotif.'</b>';
        $notification->date_of_notification = Carbon::now();
        $notification->link ='default';
        $notification->save();
        return view('tclass.classwork');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function announcementStore(Request $request){

        $announcement = new TeacherClassAnnouncements;
        $announcement->content = $request->input('title');
        $announcement->save();

        return view('tclass.classwork');
    }


    public function question(){
        $question_type = QuestionType::all();
        return view('classwork.question',compact('question_type'));
    }
    public function questionStore(Request $request){
        $value = $request->session()->pull('key');
        $question = new Question;
        $question->question_title = $request->input('title');
        $question->question_description = $request->input('description');
        $question->teacher_id = Auth::id();
        $question->class_id = $value;
        $question->save();

       $answer =  DB::table('answer')->insert([
             [
               'quiz_question_id'=>5,
                'answer_text' => $request->input('ans1'),
                'choices' => 'A',],
             [
                 'quiz_question_id'=>6,
                 'answer_text' => $request->input('ans2'),
                 'choices' => 'B'

            ],
           [
               'quiz_question_id'=>7,
               'answer_text' => $request->input('ans3'),
               'choices' => 'C'

           ]

             ]);

        return view('tclass.classwork');
    }

    public function materials(){

        return view('classwork.materials');
    }
    public function materialStore(Request $request){
            $value = $request->session()->pull('key');
            $material = new Material;
            $material->title = $request->input('title');
            $material->desc = $request->input('description');
            $material->teacher_id = Auth::id();
            $material->class_id = $value;
            $material->save();

            if($request->file()) {
                $file = $request->file('fileupload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $fnotif = $file->getClientOriginalName();
                $location = 'storage/files';
                // Upload file
                $path = $file->move($location, $filename);
                $material->fname = $filename;
                $material->floc = $path;
                $material->save();
            }

            $notification = new Notification();
            $notification->teacher_class_id = $value;
            $notification->notification = 'Add new Material' . ' '. '<b>'.$fnotif.'</b>';
            $notification->date_of_notification = Carbon::now();
            $notification->link ='default';
            $notification->save();
                return view('tclass.classwork');

    }
}
