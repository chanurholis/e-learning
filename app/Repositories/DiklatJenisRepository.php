<?php

namespace App\Repositories;

use App\Models\DiklatJenis;
use App\Repositories\BaseRepository;

/**
 * Class Diklat-JenisRepository
 * @package App\Repositories
 * @version April 30, 2021, 4:38 pm UTC
 */

class DiklatJenisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_jenis',
        'nama_jenis',
        'status_aktif'
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
        return DiklatJenis::class;
    }
}
