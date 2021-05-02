<?php

namespace App\Imports;

use App\Models\DiklatBidangPelatihan;
use Maatwebsite\Excel\Concerns\ToModel;

class DiklatBidangPelatihanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DiklatBidangPelatihan([
            'kode_jenis'   => $row[0],
            'kode_bidang'  => $row[1],
            'nama_bidang'  => $row[2],
            'status_aktif' => $row[3]
        ]);
    }
}
