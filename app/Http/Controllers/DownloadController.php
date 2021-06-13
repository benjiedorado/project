<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadAssignment($fname){

        return Storage::download($fname);

    }

    public function downloadQuiz($fname){
        return Storage::download($fname);
    }
}
