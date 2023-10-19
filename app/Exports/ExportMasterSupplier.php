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
        $data = MasterSupplier::select(["kode_supplier", "nama_supplier", "alamat", "kota"])->get();
        return $data;
    }
}
