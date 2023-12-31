<?php

namespace App\Exports;

use App\Models\MasterSupplier;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMasterSupplier implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $data = MasterSupplier::select(["kode_barang_internal", "kode_barcode_asli", "nama_barang", "kota"])->get();
        return $data;
    }
}
