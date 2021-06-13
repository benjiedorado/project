<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $notification_id
 * @property integer $teacher_class_id
 * @property string $notification
 * @property string $date_of_notification
 * @property string $link
 * @property string $created_at
 * @property string $updated_at
 */
class Notification extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'notification_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['teacher_class_id', 'notification', 'date_of_notification', 'link', ];

}
