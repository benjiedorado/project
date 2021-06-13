<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $class_subject_overview_id
 * @property integer $teacher_class_id
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class ClassSubjectOverview extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_subject_overview';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'class_subject_overview_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_class_id', 'content', ];

}
