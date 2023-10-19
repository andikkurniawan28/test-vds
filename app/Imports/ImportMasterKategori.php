<?php

namespace App\Imports;

use App\Models\MasterKategori;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ImportMasterKategori implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterKategori([
           "kode_jenis_barang" => $row[0],
           "jenis_barang" => $row[2],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
