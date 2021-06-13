<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $assignment_id
 * @property string $floc
 * @property string $fdatein
 * @property string $desc
 * @property integer $teacher_id
 * @property integer $class_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 */
class Assignment extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assignment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'assignment_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['floc', 'fdatein', 'desc', 'teacher_id', 'class_id', 'fname', ];

}
