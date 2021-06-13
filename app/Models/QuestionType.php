<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $question_type_id
 * @property string $question_type
 * @property string $created_at
 * @property string $updated_at
 */
class QuestionType extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'question_type_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['question_type', ];

}
