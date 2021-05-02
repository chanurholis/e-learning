<?php

namespace App\Imports;

use App\DiklatBidangKerja;
use Maatwebsite\Excel\Concerns\ToModel;

class DiklatBidangKerjaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DiklatBidangKerja([
            //
        ]);
    }
}
