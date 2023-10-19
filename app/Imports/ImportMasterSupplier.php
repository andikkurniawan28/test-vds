<?php

namespace App\Imports;

use App\Models\MasterSupplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportMasterSupplier implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterSupplier([
           "kode_supplier"      => $row[1],
           "nama_supplier"      => $row[3],
           "alamat"             => $row[5],
           "kota"               => $row[6],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
