<?php

namespace App\Imports;

use App\Models\MasterBrand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportMasterBrand implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterBrand([
           "kode_brand" => $row[0],
           "nama_brand" => $row[2],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
