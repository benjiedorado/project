<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ActivityLog
 *
 * @property integer $activity_log_id
 * @property string $username
 * @property string $date
 * @property string $action
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\ActivityLogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereActivityLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActivityLog whereUsername($value)
 */
	class ActivityLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Answer
 *
 * @property integer $answer_id
 * @property integer $quiz_question_id
 * @property string $answer_text
 * @property string $choices
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\AnswerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAnswerText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereChoices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereQuizQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Assignment
 *
 * @property integer $assignment_id
 * @property string $floc
 * @property string $fdatein
 * @property string $desc
 * @property integer $teacher_id
 * @property integer $class_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\AssignmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Assignment whereUpdatedAt($value)
 */
	class Assignment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassQuiz
 *
 * @property integer $class_quiz_id
 * @property integer $teacher_class_id
 * @property integer $quiz_time
 * @property integer $quiz_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\ClassQuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereClassQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereQuizTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassQuiz whereUpdatedAt($value)
 */
	class ClassQuiz extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ClassSubjectOverview
 *
 * @property integer $class_subject_overview_id
 * @property integer $teacher_class_id
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\ClassSubjectOverviewFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview whereClassSubjectOverviewId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassSubjectOverview whereUpdatedAt($value)
 */
	class ClassSubjectOverview extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Classes
 *
 * @property integer $class_id
 * @property string $classname
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ClassesFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereClassname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereUpdatedAt($value)
 */
	class Classes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Content
 *
 * @property integer $content_id
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\ContentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Content whereUpdatedAt($value)
 */
	class Content extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property integer $department_id
 * @property string $department_name
 * @property string $dean
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDean($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Event
 *
 * @property integer $event_id
 * @property string $title
 * @property integer $teacher_class_id
 * @property string $date_start
 * @property string $date_end
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\EventFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\File
 *
 * @property integer $files_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property integer $teacher_id
 * @property integer $class_id
 * @property string $fname
 * @property string $uploade_by
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\FileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 * @method static \Illuminate\Database\Eloquent\Builder|File whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFilesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereUploadeBy($value)
 */
	class File extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property integer $message_id
 * @property integer $receiver_id
 * @property string $content
 * @property string $date_sended
 * @property integer $sender_id
 * @property string $receiver_name
 * @property string $sender_name
 * @property string $message_status
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\MessageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereDateSended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessageStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MessageSent
 *
 * @property integer $message_sent_id
 * @property integer $receiver_id
 * @property string $content
 * @property string $date_sended
 * @property integer $sender_id
 * @property string $receiver_name
 * @property string $sender_name
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\MessageSentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent query()
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereDateSended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereMessageSentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereSenderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MessageSent whereUpdatedAt($value)
 */
	class MessageSent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property integer $notification_id
 * @property integer $teacher_class_id
 * @property string $notification
 * @property string $date_of_notification
 * @property string $link
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\NotificationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereDateOfNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationRead
 *
 * @property integer $notification_read_id
 * @property integer $student_id
 * @property string $student_read
 * @property integer $notification_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\NotificationReadFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereNotificationReadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereStudentRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationRead whereUpdatedAt($value)
 */
	class NotificationRead extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationReadTeacher
 *
 * @property integer $notification_read_teacher_id
 * @property integer $teacher_id
 * @property string $student_read
 * @property integer $notification_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\NotificationReadTeacherFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereNotificationReadTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereStudentRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotificationReadTeacher whereUpdatedAt($value)
 */
	class NotificationReadTeacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuestionType
 *
 * @property integer $question_type_id
 * @property string $question_type
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\QuestionTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType whereQuestionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType whereQuestionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionType whereUpdatedAt($value)
 */
	class QuestionType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quiz
 *
 * @property integer $quiz_id
 * @property string $quiz_title
 * @property string $quiz_description
 * @property string $date_added
 * @property integer $teacher_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\QuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereDateAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuizDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuizTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereUpdatedAt($value)
 */
	class Quiz extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuizQuestion
 *
 * @property integer $quiz_question_id
 * @property integer $quiz_id
 * @property string $question_text
 * @property integer $question_type_id
 * @property integer $points
 * @property string $date_added
 * @property string $answer
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\QuizQuestionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereDateAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereQuestionText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereQuestionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereQuizQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizQuestion whereUpdatedAt($value)
 */
	class QuizQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string|null $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolYear
 *
 * @property integer $school_year_id
 * @property string $school_year
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\SchoolYearFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereSchoolYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereSchoolYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear whereUpdatedAt($value)
 */
	class SchoolYear extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Student
 *
 * @property int $student_id
 * @property string $firstname
 * @property string $lastname
 * @property int|null $class_id
 * @property string $username
 * @property string|null $password
 * @property string|null $location
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\StudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUsername($value)
 */
	class Student extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentAssignment
 *
 * @property integer $student_assignment_id
 * @property integer $assignment_id
 * @property string $floc
 * @property string $assignment_fdatein
 * @property string $fdesc
 * @property string $fname
 * @property integer $student_id
 * @property integer $grade
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\StudentAssignmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereAssignmentFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereFdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereStudentAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentAssignment whereUpdatedAt($value)
 */
	class StudentAssignment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentBackpack
 *
 * @property integer $file_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property integer $student_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\StudentBackpackFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereFdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentBackpack whereUpdatedAt($value)
 */
	class StudentBackpack extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentClassQuiz
 *
 * @property integer $student_class_quiz_id
 * @property integer $class_quiz_id
 * @property integer $student_id
 * @property string $student_quiz_time
 * @property string $grade
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\StudentClassQuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereClassQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereStudentClassQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereStudentQuizTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentClassQuiz whereUpdatedAt($value)
 */
	class StudentClassQuiz extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property integer $subject_id
 * @property string $subject_code
 * @property string $subject_title
 * @property string $category
 * @property string $description
 * @property string $unit
 * @property string $Pre_req
 * @property string $semester
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\SubjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject wherePreReq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereSubjectCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereSubjectTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property integer $teacher_id
 * @property string|null $username
 * @property string|null $password
 * @property string $firstname
 * @property string $lastname
 * @property int|null $department_id
 * @property string|null $location
 * @property string|null $about
 * @property string|null $teacher_status
 * @property string|null $teacher_stat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TeacherFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereTeacherStat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereTeacherStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Teacher whereUsername($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherBackpack
 *
 * @property integer $file_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property integer $teacher_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\TeacherBackpackFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereFdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherBackpack whereUpdatedAt($value)
 */
	class TeacherBackpack extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherClass
 *
 * @property integer $teacher_class_id
 * @property integer $teacher_id
 * @property integer $class_id
 * @property integer $subject_id
 * @property string $thumbnails
 * @property string $school_year
 * @property string $created_at
 * @property string $updated_at
 * @property string $class_code
 * @method static \Database\Factories\TeacherClassFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereClassCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereSchoolYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereThumbnails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClass whereUpdatedAt($value)
 */
	class TeacherClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherClassAnnouncements
 *
 * @property integer $teacher_class_announcements_id
 * @property string $content
 * @property integer $teacher_id
 * @property integer $teacher_class_id
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\TeacherClassAnnouncementsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereTeacherClassAnnouncementsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassAnnouncements whereUpdatedAt($value)
 */
	class TeacherClassAnnouncements extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherClassStudent
 *
 * @property integer $teacher_class_student_id
 * @property integer $teacher_class_id
 * @property integer $student_id
 * @property integer $teacher_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\TeacherClassStudentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereTeacherClassStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherClassStudent whereUpdatedAt($value)
 */
	class TeacherClassStudent extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherNotification
 *
 * @property integer $teacher_notification_id
 * @property integer $teacher_class_id
 * @property string $notification
 * @property string $date_of_notification
 * @property string $link
 * @property integer $student_id
 * @property integer $assignment_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\TeacherNotificationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereAssignmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereDateOfNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereNotification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereTeacherClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereTeacherNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherNotification whereUpdatedAt($value)
 */
	class TeacherNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeacherShared
 *
 * @property integer $teacher_shared_id
 * @property integer $teacher_id
 * @property integer $shared_teacher_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\TeacherSharedFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereFdatein($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereFdesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereFloc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereFname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereSharedTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereTeacherSharedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeacherShared whereUpdatedAt($value)
 */
	class TeacherShared extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User orWherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHavePermission()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHaveRole()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserLog
 *
 * @property integer $user_log_id
 * @property string $username
 * @property string $login_date
 * @property string $logout_date
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 * @method static \Database\Factories\UserLogFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereLoginDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereLogoutDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUserLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUsername($value)
 */
	class UserLog extends \Eloquent {}
}

