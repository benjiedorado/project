<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $file_id
 * @property string $floc
 * @property string $fdatein
 * @property string $fdesc
 * @property integer $student_id
 * @property string $fname
 * @property string $created_at
 * @property string $updated_at
 */
class StudentBackpack extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_backpack';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'file_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['floc', 'fdatein', 'fdesc', 'student_id', 'fname',];

}
