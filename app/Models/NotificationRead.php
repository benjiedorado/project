<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $notification_read_id
 * @property integer $student_id
 * @property string $student_read
 * @property integer $notification_id
 * @property string $created_at
 * @property string $updated_at
 */
class NotificationRead extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_read';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'notification_read_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['student_id', 'student_read', 'notification_id', ];

}
