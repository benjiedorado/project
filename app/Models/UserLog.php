<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_log_id
 * @property string $username
 * @property string $login_date
 * @property string $logout_date
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class UserLog extends Model

{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_log';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_log_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['username', 'login_date', 'logout_date', 'user_id',];

}
