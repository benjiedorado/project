<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageSent;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TeacherMessageController extends Controller
{
    public function messageView(){
        $query = Student::all();
        $queryMessage = Message::all()
            ->where('receiver_id','=',Auth::id());
        return view('teacherMessage.teacherMessage',compact('queryMessage','query'));
    }

    public function messageStore(Request $request){

        $id  = $request->input('student');
        $query = Student::
        where('student_id','=',$id)
            ->select('firstname','lastname')
            ->first();
        $sfirstname = $query->firstname;
        $slastname = $query->lastname;
        $name = $sfirstname .'  '.$slastname;

        $queryteacher = Teacher::
        where('teacher_id','=',Auth::id())
            ->select('firstname','lastname')
            ->first();
        $tfirstname = $queryteacher->firstname;
        $tlastname = $queryteacher->lastname;
        $name1 = $tfirstname .'  '.$tlastname;

        $message = new Message;
        $message->receiver_id = $id;
        $message->content = $request->input('content');
        $message->date_sended = Carbon::now();
        $message->sender_id = Auth::id();
        $message->receiver_name = $name;
        $message->sender_name = $name1;
        $message->message_status = 'ok';
        $message->save();

        $messagesent = new MessageSent;
        $messagesent->receiver_id = $id;
        $messagesent->content = $request->input('content');
        $messagesent->date_sended = Carbon::now();
        $messagesent->sender_id = Auth::id();
        $messagesent->receiver_name = $name;
        $messagesent->sender_name = $name1;
        $messagesent->save();
        return back();
    }

    public function viewTeacherSentMessage(){
        $sent_messages = MessageSent::all()
        ->where('sender_id','=',Auth::id());
        return view('teacherMessage.teacherSentMessage',compact('sent_messages'));
    }
    public function viewTeacherInbox(){
        return redirect()->route('teacher.message');
    }

    public function storeReply(Request $request,$sender_id){
        $reply = Message::
        where('sender_id','=',$sender_id)
            ->where('receiver_id','=',Auth::id())
            ->first();
        $receiver_id = $reply->sender_id;
        $name = $reply->receiver_name;
        $name1 = $reply->sender_name;
        $message = new Message;
        $message->receiver_id = $receiver_id;
        $message->content = $request->input('content');
        $message->date_sended = Carbon::now();
        $message->sender_id = Auth::id();
        $message->receiver_name = $name;
        $message->sender_name = $name1;
        $message->message_status = 'ok';
        $message->save();

        $messagesent = new MessageSent;
        $messagesent->receiver_id = $receiver_id;
        $messagesent->content = $request->input('content');
        $messagesent->date_sended = Carbon::now();
        $messagesent->sender_id = Auth::id();
        $messagesent->receiver_name = $name;
        $messagesent->sender_name = $name1;
        $messagesent->save();
        return back();
    }

    public function removeSentMessage($message_sent_id){

        $message = MessageSent::findOrfail($message_sent_id);
        $message->delete();
        return back();
    }

    public function sidenavStudent(){
        return view('teacherMessage.teacher_message_sidenav_student');
    }
    public function returnToTeacher(){
        return redirect()->route('teacher.message');
    }

    public function storeMessageTeacher(){
        return 'hello';
    }

}
