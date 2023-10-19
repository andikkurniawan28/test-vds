<?php

namespace App\Exports;

use App\Models\MasterSatuan;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMasterSatuan implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $data = MasterSatuan::select(["kode_satuan_barang", "satuan_barang"])->get();
        return $data;
    }
}
