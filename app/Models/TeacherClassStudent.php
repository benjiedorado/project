<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacher_class_student_id
 * @property integer $teacher_class_id
 * @property integer $student_id
 * @property integer $teacher_id
 * @property string $created_at
 * @property string $updated_at
 */
class TeacherClassStudent extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_class_student';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacher_class_student_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_class_id', 'student_id', 'teacher_id', ];

}
