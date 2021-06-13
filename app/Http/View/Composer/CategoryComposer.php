<?php

namespace App\Http\View\Composer;


use App\Models\Message;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CategoryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('queryMessage',Message::all()->where('receiver_id','=',Auth::id()));
                $view->with('query',Teacher::all());
                 $view->with('student',Student::all());
    }

//    /**
//     * Bind data to the view.
//     *
//     * @param  \Illuminate\View\View  $view
//     * @return void
//     */
//    public function composeNext(View $view)
//    {
//        $view->with('query',Teacher::all());
//    }
}
