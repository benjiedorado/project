<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $student_assignment_id
 * @property integer $assignment_id
 * @property string $floc
 * @property string $assignment_fdatein
 * @property string $fdesc
 * @property string $fname
 * @property integer $student_id
 * @property integer $grade
 * @property string $created_at
 * @property string $updated_at
 */
class StudentAssignment extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_assignment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'student_assignment_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['assignment_id', 'floc', 'assignment_fdatein', 'fdesc', 'fname', 'student_id', 'grade', ];

}
