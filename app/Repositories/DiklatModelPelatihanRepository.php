<?php

namespace App\Repositories;

use App\Models\DiklatModelPelatihan;
use App\Repositories\BaseRepository;

/**
 * Class DiklatModelPelatihanRepository
 * @package App\Repositories
 * @version April 30, 2021, 7:02 pm UTC
*/

class DiklatModelPelatihanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_model',
        'nama_model'
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
        return DiklatModelPelatihan::class;
    }
}
