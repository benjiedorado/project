<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileTestController extends Controller
{
    public function index(Request $request){
        $file = $request->hasfile('filesfiles');
        dd($file);
        return $request->file('filesfiles')->store('hahaha');
    }
}
