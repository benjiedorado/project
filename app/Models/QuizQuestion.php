<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $quiz_question_id
 * @property integer $quiz_id
 * @property string $question_text
 * @property integer $question_type_id
 * @property integer $points
 * @property string $date_added
 * @property string $answer
 * @property string $created_at
 * @property string $updated_at
 */
class QuizQuestion extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quiz_question';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'quiz_question_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['quiz_id', 'question_text', 'question_type_id', 'points', 'date_added', 'answer', ];

}
