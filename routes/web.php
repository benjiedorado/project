<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\ClassWorkController;
use App\Http\Controllers\FileTestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('auth.register');
});

Route::group(['middleware'=>['auth']],function(){
       Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index'])
       ->name('dashboard');
});

Route::get('download/q/{fname}',[App\Http\Controllers\DownloadController::class,'downloadQuiz'],function ($fname){

})->name('quiz.download');


Route::get('download/a/{fname}',[App\Http\Controllers\DownloadController::class,'downloadAssignment'],function ($fname){

})->name('download.assignment');

Route::get('assignment/download/{fname}',[App\Http\Controllers\ViewSubmitAssignmentController::class,'downloadwork'],function ($fname){
}
)->name('download.submit.work');




Route::get('class/return/student',[App\Http\Controllers\RouteRedirectController::class,'classRedirectStudent'])->name('redirect.dashboard.student');

Route::get('class/return',[App\Http\Controllers\RouteRedirectController::class,'classRedirect'])->name('redirect.dashboard');

Route::get('teacher/notification',[App\Http\Controllers\NotificationsStudentController::class,'teacherNotification'])->name('teacher.notification');

Route::get('question/details/{question_id}',[App\Http\Controllers\StudentStreamController::class,'questionShow'])->name('question.details');

Route::get('material/details/{material_id}/{id}',[App\Http\Controllers\StudentStreamController::class,'materialShow'],function ($material_id,$id){

})->name('material.details');

Route::get('quiz/details/{quiz_id}/{id}',[App\Http\Controllers\StudentStreamController::class,'quizShow'],function ($quiz_id,$id){

})->name('quiz.details');

Route::get('notification/students',[App\Http\Controllers\NotificationsStudentController::class,'viewNotifications'])->name('notification.view');

Route::post('store/reply/destroy/{message_sent_id}',[App\Http\Controllers\StudentMessageController::class,'destroyMessage'])->name('message_delete');
Route::post('store/reply/delete/{message_sent_id}',[App\Http\Controllers\StudentMessageController::class,'removeMessage'])->name('delete_message');
Route::post('store/reply/{sender_id}',[App\Http\Controllers\StudentMessageController::class,'storeReply'])->name('store.reply');
Route::get('remove_modal',[App\Http\Controllers\StudentMessageController::class,'showModal'])->name('remove_message');
//Route for view message for student or main page in message student
Route::get('student/message',[App\Http\Controllers\StudentMessageController::class,'messageview'])->name('student.message');
//Route for sent messages of student
Route::get('sent_message_student',[App\Http\Controllers\StudentSentMessages::class,'studentSentMessage'])->name('student_sent_messages');
//Route for inbox when want to back into inbox
Route::get('inbox_message_student',[App\Http\Controllers\StudentSentMessages::class,'studentInboxMessage'])->name('student_inbox_messages');
//Route for creating message for student to student
Route::get('create_message_student',[App\Http\Controllers\CreateMessageForStudent::class,'createMessageForStudent'])->name('create_message_student');
//Route for comming back to main message page bad routing
Route::get('inbox_student_mail',[App\Http\Controllers\StudentSentMessages::class,'studentInboxMessageBox'])->name('inbox_messagesBox');

Route::post('student/sent/message',[App\Http\Controllers\StudentMessageController::class,'studentMessageStore'])
    ->name('student.message.store');

Route::post('student/student/sent/message',[App\Http\Controllers\StudentMessageController::class,'studentMessageStoreForStudent'])
    ->name('student.student.message.store');
//Route for Changing Avatar
Route::post('avatar/store',[App\Http\Controllers\ChangeAvatarController::class,'avatar_store'])->name('avatar_store');
Route::get('avatar',[App\Http\Controllers\ChangeAvatarController::class,'index'])->name('avatar');

Route::post('submit/graded/{assignment_id}',[App\Http\Controllers\ViewSubmitAssignmentController::class,'storeGrade'])->name('submit.grade');
//Route for Teacher Message
Route::post('teacher/message',[App\Http\Controllers\TeacherMessageController::class,'messageStore'])->name('teacher.message.store');
//Route for viewing message
Route::get('teacher/message',[App\Http\Controllers\TeacherMessageController::class,'messageView'])->name('teacher.message');
Route::get('teacher/sent_messages',[App\Http\Controllers\TeacherMessageController::class,'viewTeacherSentMessage'])->name('teacher_sent_messages');
Route::get('teacher/message/inbox',[App\Http\Controllers\TeacherMessageController::class,'viewTeacherInbox'])->name('teacher_message_inbox');
Route::post('teacher/reply/store/{sender_id}',[App\Http\Controllers\TeacherMessageController::class,'storeReply'])->name('store.teacher.reply');
Route::post('remove/message/teacher/{message_sent_id}',[App\Http\Controllers\TeacherMessageController::class,'removeSentMessage'])->name('remove.sent.message');

Route::get('sidenav/student',[App\Http\Controllers\TeacherMessageController::class,'sidenavStudent'])->name('sideNav.student');
Route::get('return',[App\Http\Controllers\TeacherMessageController::class,'returnToTeacher'])->name('return.teacher');
Route::post('create/message/teacher',[App\Http\Controllers\TeacherMessageController::class,'storeMessageTeacher'])->name('teacher.message.teacher.store');

Route::post('reply',[App\Http\Controllers\ReplyController::class,'reply'])->name('reply');



//Route::post('messages/sent/{id}',[App\Http\Controllers\MessageSentController::class,'index'],function ($id){
//
//})->name('message.sent');
Route::get('view/assignment/submitted',[App\Http\Controllers\ViewSubmitAssignmentController::class,'index'])->name('view.submit.assignment');

Route::get('view/assignment/work/{assignment_id}',[App\Http\Controllers\ViewSubmitAssignmentController::class,'viewsubmitwork'])->name('view.submit.work');


Route::post('upload/quiz/{class_id}/{quiz_id}',[App\Http\Controllers\UploadAssignmentController::class,'quizstore'])->name('quiz.upload');

Route::post('upload/assignment/{id}/{class_id}',[App\Http\Controllers\UploadAssignmentController::class,'store'])->name('upload');


Route::view('fileupload','fileupload');
Route::post('filetest',[FileTestController::class,'index'])->name('filetest');

Route::get('people',[App\Http\Controllers\PeopleController::class,'index'])->name('people');
Route::get('stream/details/{assignment_id}/{id}',[App\Http\Controllers\StudentStreamController::class,'detailsShow'],function ($assignment_id,$id){
})->name('stream.details');

Route::get('downloadfile/{fname}',[App\Http\Controllers\StudentStreamController::class,'downloadfile'],function ($fname){

})->name('downloadfile');



Route::get('stream/{teacher_class_id}',[App\Http\Controllers\StudentStreamController::class,'stream'])->name('stream.stream');

Route::resource('stream',App\Http\Controllers\StudentStreamController::class);

Route::get('classwork/assingment',[App\Http\Controllers\ClassWorkController::class,'assignment'])
          ->name('classwork.assignment');
Route::post('classwork/question/store',[ClassWorkController::class,'questionStore'])->name('question_store');
Route::post('classwork/assignment',[ClassWorkController::class,'assignmentStore'])->name('classwork_assignment');

Route::post('classwork/quiz/store',[App\Http\Controllers\ClassWorkController::class,'quizStore'])->name('classwork.quiz.store');


Route::get('classwork/announcement/store',[App\Http\Controllers\ClassWorkController::class,'announcementStore'])
          ->name('classwork.announcement.store');

Route::get('classwork/quiz',[App\Http\Controllers\ClassWorkController::class,'quiz'])
          ->name('classwork.quiz');
Route::get('classwork/question',[App\Http\Controllers\ClassWorkController::class,'question'])
          ->name('classwork.question');
Route::post('classwork/materials/store',[App\Http\Controllers\ClassWorkController::class,'materialStore'])
    ->name('classwork.material.store');
Route::get('classwork/materials',[App\Http\Controllers\ClassWorkController::class,'materials'])
          ->name('classwork.materials');
Route::resource('joins',App\Http\Controllers\ClassJoinController::class);
Route::get('tclass/another/{id}',[App\Http\Controllers\TClassController::class,'another'])
    ->name('tclass.another');
    Route::get('tclass/classwork',[App\Http\Controllers\TClassController::class,'classWork'])
    ->name('tclass.classwork');

Route::post('tclass/createclass',[App\Http\Controllers\TClassController::class,'classstore'])
    ->name('tclass.createclass');

Route::resource('tclass',App\Http\Controllers\TClassController::class);
//Admin Controller
Route::resource('subjects',App\Http\Controllers\SubjectController::class);
Route::resource('departments',App\Http\Controllers\DepartmentController::class);
Route::resource('users',App\Http\Controllers\UserController::class);
Route::resource('class',App\Http\Controllers\ClassController::class);
Route::resource('students',App\Http\Controllers\StudentsController::class);
Route::resource('teachers',App\Http\Controllers\TeacherController::class);
Route::resource('downloadable',App\Http\Controllers\DownloadableController::class);
Route::resource('assignment',App\Http\Controllers\UploadAssignmentController::class);
Route::resource('userlogs',App\Http\Controllers\UserLogController::class);
Route::resource('activitylogs',App\Http\Controllers\ActivityLogsController::class);
Route::resource('mystudent',App\Http\Controllers\MyStudentController::class);
require __DIR__.'/auth.php';
// Route::get('/', function()
// {
//     $img = Image::make('thumbnail.jpg');

//     return $img->response('jpg');
// });

