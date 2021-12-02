<?php

namespace App\Repositories;

use App\Models\Persontype;
use App\Repositories\BaseRepository;

/**
 * Class PersontypeRepository
 * @package App\Repositories
 * @version May 17, 2021, 3:02 am UTC
*/

class PersontypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'persontype'
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
        return Persontype::class;
    }
}
