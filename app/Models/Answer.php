<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $answer_id
 * @property integer $quiz_question_id
 * @property string $answer_text
 * @property string $choices
 * @property string $created_at
 * @property string $updated_at
 */
class Answer extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answer';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'answer_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['quiz_question_id', 'answer_text', 'choices', ];

}
