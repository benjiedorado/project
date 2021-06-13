<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageSent;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class StudentMessageController extends Controller
{
  public function messageview(){

      $query = Student::all();
      $queryMessage = Message::all()
          ->where('receiver_id','=',Auth::id());

      return view('studentMessage.studentMessage',compact('query','queryMessage'));

  }

  public function studentMessageStore(Request $request){
      $id  = $request->input('teacher');
      $query = Teacher::
           where('teacher_id','=',$id)
          ->select('firstname','lastname')
          ->first();
      $tfirstname = $query->firstname;
      $tlastname = $query->lastname;
      $name = $tfirstname .'  '.$tlastname;

      $querystudent = Student::
      where('student_id','=',Auth::id())
          ->select('firstname','lastname')
          ->first();
      $firstname = $querystudent -> firstname;
      $lastname = $querystudent->lastname;
      $name1 = $firstname .'  '.$lastname;

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

  public function studentMessageStoreForStudent(Request $request){
      $id  = $request->input('student');
      $query = Student::
      where('student_id','=',$id)
          ->select('firstname','lastname')
          ->first();
      $firstname = $query->firstname;
      $lastname = $query->lastname;
      $name = $firstname .'  '.$lastname;

      $querystudent = Student::
      where('student_id','=',Auth::id())
          ->select('firstname','lastname')
          ->first();
      $firstname = $querystudent -> firstname;
      $lastname = $querystudent->lastname;
      $name1 = $firstname .'  '.$lastname;

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
  public function showModal(){
        return view('studentMessage.removemodal');
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

  public function removeMessage($message_sent_id){

      $message = MessageSent::findOrfail($message_sent_id);
      $message->delete();
      return back();
  }

  public function destroyMessage($message_sent_id){
      $message = MessageSent::findOrfail($message_sent_id);
      $message->delete();
      return back();
  }
}
