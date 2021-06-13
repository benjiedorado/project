<?php

namespace App\Providers;

use App\Http\View\Composers\CategoryComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['studentMessage.studentSentMessage'
            ,'studentMessage.studentMessage','studentMessage.student_message_sidenav',
             'studentMessage.student_message_student_student','teacherMessage.teacher_message_sidenav',
             'teacherMessage.teacher_message_sidenav_student'
            ], 'App\Http\View\Composer\CategoryComposer@compose');

    }
//    public function bootNext()
//    {
//        View::composer(['studentMessage.studentSentMessage','studentMessage.studentMessage'], 'App\Http\View\Composer\CategoryComposer@composeNext');
//
//    }
}
