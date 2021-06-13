<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DashboardController;

use Illuminate\Http\Request;

class RouteRedirectController extends Controller
{
    public function classRedirect(){

        return redirect()->action([DashboardController::class,'index']);
    }

    public function classRedirectStudent(){
        return redirect()->action([DashboardController::class,'index']);
    }
}
