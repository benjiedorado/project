<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $school_year_id
 * @property string $school_year
 * @property string $created_at
 * @property string $updated_at
 */
class SchoolYear extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_year';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'school_year_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['school_year', ];

}
