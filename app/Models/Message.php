<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $message_id
 * @property integer $receiver_id
 * @property string $content
 * @property string $date_sended
 * @property integer $sender_id
 * @property string $receiver_name
 * @property string $sender_name
 * @property string $message_status
 * @property string $created_at
 * @property string $updated_at
 */
class Message extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'message';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'message_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['receiver_id', 'content', 'date_sended', 'sender_id', 'receiver_name', 'sender_name', 'message_status', ];

}
