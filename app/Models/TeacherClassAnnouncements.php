<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $teacher_class_announcements_id
 * @property string $content
 * @property integer $teacher_id
 * @property integer $teacher_class_id
 * @property string $date
 * @property string $created_at
 * @property string $updated_at
 */
class TeacherClassAnnouncements extends Model
{
    use HasFactory;
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teacher_class_announcements_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['content', 'teacher_id', 'teacher_class_id', 'date', ];

}
