<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $student_class_quiz_id
 * @property integer $class_quiz_id
 * @property integer $student_id
 * @property string $student_quiz_time
 * @property string $grade
 * @property string $created_at
 * @property string $updated_at
 */
class StudentClassQuiz extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_class_quiz';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'student_class_quiz_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['class_quiz_id', 'student_id', 'student_quiz_time', 'grade', ];

}
