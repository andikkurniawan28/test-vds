<?php

namespace App\Imports;

use App\Models\MasterSatuan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportMasterSatuan implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterSatuan([
           "kode_satuan_barang" => $row[0],
           "satuan_barang" => $row[1],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
