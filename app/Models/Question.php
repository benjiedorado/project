<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $question_id
 * @property string $question_title
 * @property string $question_description
 * @property string $date_added
 * @property integer $teacher_id
 * @property string $created_at
 * @property string $updated_at
 */
class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'question_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['question_title', 'question_description', 'date_added', 'teacher_id', 'created_at', 'updated_at'];

}
