<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $files_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property integer $teacher_id
 * @property integer $class_id
 * @property string $fname
 * @property string $uploade_by
 * @property string $created_at
 * @property string $updated_at
 */
class File extends Model
{
    use HasFactory;
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'files_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['floc', 'fdatein', 'fdesc', 'teacher_id', 'class_id', 'fname', 'uploade_by', 'created_at', 'updated_at'];

}
