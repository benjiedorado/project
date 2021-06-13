<?php

namespace App\Http\Controllers;

use App\Models\MessageSent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateMessageForStudent extends Controller
{
    public function createMessageForStudent(){
        $student = Student::all();
        $sent_message = MessageSent::all()
            ->where('sender_id','=',Auth::id());
         return view('studentMessage.student_message_student_student',compact('student','sent_message'));
    }
}
