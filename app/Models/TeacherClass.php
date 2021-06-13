<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacher_class_id
 * @property integer $teacher_id
 * @property integer $class_id
 * @property integer $subject_id
 * @property string $thumbnails
 * @property string $school_year
 * @property string $created_at
 * @property string $updated_at
 */
class TeacherClass extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_class';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacher_class_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_id', 'class_id', 'subject_id', 'thumbnails', 'school_year',];
    /**
     * @var mixed
     */


}
