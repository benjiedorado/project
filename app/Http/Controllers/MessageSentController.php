<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageSentController extends Controller
{
    public function index($id){
        dd($id);
       return 'hello';
    }
}
