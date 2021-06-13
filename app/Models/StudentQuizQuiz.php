<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $student_quiz_id
 * @property integer $quiz_id
 * @property string $floc
 * @property string $quiz_fdatein
 * @property string $fdesc
 * @property string $fname
 * @property integer $student_id
 * @property integer $grade
 * @property string $created_at
 * @property string $updated_at
 */
class StudentQuizQuiz extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_quiz';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'student_quiz_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['quiz_id', 'floc', 'quiz_fdatein', 'fdesc', 'fname', 'student_id', 'grade', 'created_at', 'updated_at'];

}
