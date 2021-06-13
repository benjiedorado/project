<?php

namespace Some\\Other\\NSpace;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $class_id
 * @property string $classname
 * @property string $created_at
 * @property string $updated_at
 */
class Classes extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'class';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'class_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['classname', 'created_at', 'updated_at'];

}
