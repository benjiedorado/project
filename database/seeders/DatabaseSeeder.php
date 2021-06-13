<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use App\Models\Answer;
use App\Models\Assignment;
use App\Models\Classes;
use App\Models\ClassQuiz;
use App\Models\ClassSubjectOverview;
use App\Models\Content;
use App\Models\Department;
use App\Models\Event;
use App\Models\Message;
use App\Models\MessageSent;
use App\Models\NotificationRead;
use App\Models\NotificationReadTeacher;
use App\Models\QuestionType;
use App\Models\QuizQuestion;
use App\Models\SchoolYear;
use App\Models\Student;
use App\Models\StudentAssignment;
use App\Models\StudentBackpack;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherBackpack;
use App\Models\TeacherClass;
use App\Models\TeacherClassAnnouncements;
use App\Models\TeacherNotification;
use App\Models\TeacherShared;
use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            ActivityLogSeeder::class,
            AnswerSeeder::class,
            AssignmentSeeder::class,
            ClassesSeeder::class,
            ClassQuizSeeder::class,
            ClassSubjectOverviewSeeder::class,
            ContentSeeder::class,
            DepartmentSeeder::class,
            EventSeeder::class,
            FileSeeder::class,
            MessageSeeder::class,
            MessageSentSeeder::class,
            NotificationReadSeeder::class,
            NotificationReadTeacherSeeder::class,
            NotificationSeeder::class,
            QuestionTypeSeeder::class,
            QuizQuestionSeeder::class,
            QuizSeeder::class,
            SchoolYearSeeder::class,
            StudentAssignmentSeeder::class,
            StudentBackpackSeeder::class,
            StudentSeeder::class,
            SubjectSeeder::class,
            TeacherBackpackSeeder::class,
            TeacherClassAnnouncementsSeeder::class,
            TeacherClassSeeder::class,
            TeacherClassStudentSeeder::class,
            TeacherNotificationSeeder::class,
            TeacherSeeder::class,
            TeacherSharedFactorySeeder::class,
            UserLogSeeder::class,
            LaratrustSeeder::class
        ]);


    }
}
