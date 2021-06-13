<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageSent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function reply(Request $request)
    {

        $message = new Message;
        $message->receiver_id = $request->input('receiver_id');
        $message->content = $request->input('content');
        $message->date_sended = Carbon::now();
        $message->sender_id = Auth::id();
        $message->receiver_name = $request->input('receiver_name');
        $message->sender_name = $request->input('sender_name');
        $message->message_status = 'ok';
        $message->save();

        $messagesent = new MessageSent;
        $messagesent->receiver_id =  $request->input('receiver_id');
        $messagesent->content = $request->input('content');
        $messagesent->date_sended = Carbon::now();
        $messagesent->sender_id = Auth::id();
        $messagesent->receiver_name = $request->input('receiver_name');
        $messagesent->sender_name = $request->input('sender_name');
        $messagesent->save();

        return back();
    }

}
