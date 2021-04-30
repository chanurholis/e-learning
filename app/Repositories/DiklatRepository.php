<?php

namespace App\Repositories;

use App\Models\Diklat;
use App\Repositories\BaseRepository;

/**
 * Class DiklatRepository
 * @package App\Repositories
 * @version April 30, 2021, 4:09 pm UTC
*/

class DiklatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_diklat',
        'bidang_pelatihan',
        'jenis_kegiatan',
        'model_palatihan',
        'kode_diklat',
        'kode_profil',
        'nama_diklat',
        'tahun',
        'jenjang',
        'syarat_peserta',
        'syarat_wi',
        'deskripsi',
        'tujuan_diklat',
        'keterangan',
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
        return Diklat::class;
    }
}
