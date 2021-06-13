<?php

namespace App\Http\Controllers;

use App\Models\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentSentMessages extends Controller
{
    public function studentSentMessage(){
        $sent_message = MessageSent::all()
        ->where('sender_id','=',Auth::id());
        return view('studentMessage.studentSentMessage',compact('sent_message'));
    }

    public function studentInboxMessage(){
        return view('studentMessage.studentMessage');
    }
    public function studentInboxMessageBox(){
        return view('studentMessage.studentMessage');
    }
}
