<?php

namespace App\Repositories;

use App\Models\DiklatBidangKerja;
use App\Repositories\BaseRepository;

/**
 * Class DiklatBidangKerjaRepository
 * @package App\Repositories
 * @version May 1, 2021, 7:24 am UTC
*/

class DiklatBidangKerjaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_jenis',
        'kode_bidang',
        'kode_kerja',
        'nama_kerja',
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
        return DiklatBidangKerja::class;
    }
}
