<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $teacher_id

 */
class Teacher extends Model
{

    protected $table = 'teacher';
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'firstname',
        'lastname',
        'department_id',
        'location',
        'about',
        'teacher_status',
        'teacher_stat'
    ];
    protected $primaryKey = 'teacher_id';
    protected $keyType = 'integer';
}
