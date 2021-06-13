<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacher_shared_id
 * @property integer $teacher_id
 * @property integer $shared_teacher_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 */
class TeacherShared extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teacher_shared';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacher_shared_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_id', 'shared_teacher_id', 'floc', 'fdatein', 'fdesc', 'fname',];

}
