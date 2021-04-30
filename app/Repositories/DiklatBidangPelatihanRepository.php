<?php

namespace App\Repositories;

use App\Models\DiklatBidangPelatihan;
use App\Repositories\BaseRepository;

/**
 * Class DiklatBidangPelatihanRepository
 * @package App\Repositories
 * @version April 30, 2021, 5:59 pm UTC
*/

class DiklatBidangPelatihanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return DiklatBidangPelatihan::class;
    }
}
