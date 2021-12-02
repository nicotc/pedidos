<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estados
 * @package App\Models
 * @version November 23, 2021, 10:24 pm UTC
 *
 * @property string $estado
 */
class Estados extends Model
{
    use SoftDeletes;

    public $table = 'estados';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'estado',
        'color',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estado' => 'string',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
