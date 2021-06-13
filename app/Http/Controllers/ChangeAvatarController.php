<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChangeAvatarController extends Controller
{


    public function index(){
        return view('profile.index');
    }

    public function avatar_store(Request $request){



        $update= User::find(Auth::id());

        if($request->file()) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            // File upload location
            $location = 'storage/image';
            // Upload file
            $path = $file->move($location, $filename);
            $update->avatar = $filename;
            $update->save();
        }
          return redirect()->route('teacher.notification');
    }
}
