<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $material_id
 * @property string $title
 * @property string $floc
 * @property string $fdatein
 * @property string $desc
 * @property integer $teacher_id
 * @property integer $class_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 */
class Material extends Model
{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'material_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'floc', 'fdatein', 'desc', 'teacher_id', 'class_id', 'fname', 'created_at', 'updated_at'];

}
