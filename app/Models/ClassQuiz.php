<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $class_quiz_id
 * @property integer $teacher_class_id
 * @property integer $quiz_time
 * @property integer $quiz_id
 * @property string $created_at
 * @property string $updated_at
 */
class ClassQuiz extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_quiz';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'class_quiz_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_class_id', 'quiz_time', 'quiz_id', ];

}
