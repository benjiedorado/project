<?php

namespace App\Http\Controllers;

use App\Models\StudentAssignment;
use App\Models\StudentQuizQuiz;
use App\Models\TeacherNotification;
use App\StudentQuiz;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UploadAssignmentController extends Controller
{
    public function store(Request $request,$id,$class_id){


        $upload = new StudentAssignment;
        if($request->file()) {
            $fileName = time().'_'.$request->fileupload->getClientOriginalName();
            $filePath = $request->file('fileupload')->storeAs('uploads', $fileName, 'public');

            $upload->fname = time().'_'.$request->fileupload->getClientOriginalName();
            $upload->floc = '/storage/' . $filePath;
            $fnotif = $request->fileupload->getClientOriginalName();
            $upload->assignment_id = $id;
            $upload->assignment_fdatein = Carbon::now();
            $upload->fdesc = 'default';
            $upload->student_id = Auth::id();
            $upload->grade = 1;
            $upload->save();
        }

        $notification = new TeacherNotification();
        $notification->teacher_class_id = $class_id;
        $notification->notification = 'Submit Assignment' . ' '. '<b>'.$fnotif.'</b>';
        $notification->date_of_notification = Carbon::now();
        $notification->student_id = Auth::id();
        $notification->assignment_id = $id;
        $notification->link ='default';
        $notification->save();

        return back()->with('assignment','Assignment Submitted Successfully');
    }

    public function quizstore(Request $request,$quiz_id,$class_id){
        $upload = new StudentQuizQuiz();
        if($request->file()) {
            $fileName = time().'_'.$request->fileupload->getClientOriginalName();
            $filePath = $request->file('fileupload')->storeAs('uploads', $fileName, 'public');
            $upload->fname = time().'_'.$request->fileupload->getClientOriginalName();
            $fnotif = $request->fileupload->getClientOriginalName();
            $upload->floc = '/storage/' . $filePath;
            $upload->quiz_id = 1;
            $upload->fdesc = 'default';
            $upload->quiz_fdatein = Carbon::now();
            $upload->student_id = 1;
            $upload->grade = 1;
            $upload->save();
        }
        $notification = new TeacherNotification();
        $notification->teacher_class_id = $class_id;
        $notification->notification = 'Submit Quiz' . ' '. '<b>'.$fnotif.'</b>';
        $notification->date_of_notification = Carbon::now();
        $notification->student_id = Auth::id();
        $notification->assignment_id = $quiz_id;
        $notification->link ='default';
        $notification->save();

        return back()->with('quiz','Quiz Submitted Successfully');

    }
}
