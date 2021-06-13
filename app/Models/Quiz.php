<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $quiz_id
 * @property string $quiz_title
 * @property string $quiz_description
 * @property string $date_added
 * @property integer $teacher_id
 * @property string $created_at
 * @property string $updated_at
 */
class Quiz extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quiz';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'quiz_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['quiz_title', 'quiz_description', 'date_added', 'teacher_id', ];

}
