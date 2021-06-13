<?php

namespace App\Http\Controllers;

use App\Models\TeacherClassStudent;
use App\Models\TeacherNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsStudentController extends Controller
{
    public function viewNotifications(){




        $query = TeacherClassStudent::select('teacher_class_student.teacher_class_id')
               ->leftJoin('teacher_class','teacher_class.teacher_class_id','=','teacher_class_student.teacher_class_id')
               ->leftJoin('class','class.class_id','=','teacher_class.class_id')
               ->leftJoin('teacher','teacher.teacher_id','=','teacher_class_student.teacher_id')
                ->join('notification','notification.teacher_class_id','=','teacher_class.teacher_class_id')
               ->where('teacher_class_student.student_id','=',Auth::id())
                ->select('teacher.firstname','teacher.lastname','class.classname','notification.notification','notification.date_of_notification')
                ->get();

        return view('notificationStudent.viewNotifications',compact('query'));
    }

    public function teacherNotification(){


        $query = TeacherNotification::select('teacher_notification.teacher_class_id')
                 ->leftJoin('teacher_class','teacher_class.teacher_class_id','=','teacher_notification.teacher_class_id')
                  ->leftJoin('student','student.student_id','=','teacher_notification.student_id')
                  ->leftJoin('class','class.class_id','=','teacher_class.class_id')
                  ->where('teacher_class.teacher_id','=',Auth::id())
                   ->select('student.firstname','student.lastname','class.classname',
                    'teacher_notification.date_of_notification','teacher_notification.notification')
                 ->get();


        return view('notificationTeacher.viewNotifications',compact('query'));
    }

}
