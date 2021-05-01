<?php

namespace App\Repositories;

use App\Models\DiklatJenisKegiatan;
use App\Repositories\BaseRepository;

/**
 * Class DiklatJenisKegiatanRepository
 * @package App\Repositories
 * @version April 30, 2021, 6:25 pm UTC
*/

class DiklatJenisKegiatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_kegiatan',
        'nama_kegiatan'
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
        return DiklatJenisKegiatan::class;
    }
}
