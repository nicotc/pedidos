<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedidos
 * @package App\Models
 * @version November 24, 2021, 12:29 am UTC
 *
 * @property string $cliente
 * @property string $fecha
 * @property integer $taller
 * @property integer $express
 * @property string $boceto
 * @property string $medidas
 * @property string $notas
 * @property string $adjuntos
 */
class Pedidos extends Model
{
    use SoftDeletes;

    public $table = 'pedidos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cliente',
        // 'fecha',
        'taller',
        'express',
        'boceto',
        'medidas',
        'notas',
        'adjuntos',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente' => 'string',
        'taller' => 'integer',
        'estado' => 'integer',
        'express' => 'integer',
        'boceto' => 'string',
        'medidas' => 'string',
        'adjuntos' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
