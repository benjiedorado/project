<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $subject_id
 * @property string $subject_code
 * @property string $subject_title
 * @property string $category
 * @property string $description
 * @property string $unit
 * @property string $Pre_req
 * @property string $semester
 * @property string $created_at
 * @property string $updated_at
 */
class Subject extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subject';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'subject_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['subject_code', 'subject_title', 'category', 'description', 'unit', 'Pre_req', 'semester', ];

}
