<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacher_notification_id
 * @property integer $teacher_class_id
 * @property string $notification
 * @property string $date_of_notification
 * @property string $link
 * @property integer $student_id
 * @property integer $assignment_id
 * @property string $created_at
 * @property string $updated_at
 */
class TeacherNotification extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_notification';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacher_notification_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_class_id', 'notification', 'date_of_notification', 'link', 'student_id', 'assignment_id', ];

}
