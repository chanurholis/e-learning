<?php

namespace App\Imports;

use App\Models\DiklatJenis;
use Maatwebsite\Excel\Concerns\ToModel;

class DiklatJenisImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DiklatJenis([
            'kode_jenis'   => $row[0],
            'nama_jenis'   => $row[1],
            'status_aktif' => $row[2]
        ]);
    }
}
