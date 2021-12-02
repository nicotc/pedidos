<?php

namespace App\Repositories;

use App\Models\Estados;
use App\Repositories\BaseRepository;

/**
 * Class EstadosRepository
 * @package App\Repositories
 * @version November 23, 2021, 10:24 pm UTC
*/

class EstadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estado',
        'color'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estados::class;
    }
}
