<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $activity_log_id
 * @property string $username
 * @property string $date
 * @property string $action
 * @property string $created_at
 * @property string $updated_at
 */
class ActivityLog extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_log';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'activity_log_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['username', 'date', 'action', ];

}
