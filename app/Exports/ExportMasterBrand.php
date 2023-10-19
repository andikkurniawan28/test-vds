<?php

namespace App\Exports;

use App\Models\MasterBrand;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMasterBrand implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $data = MasterBrand::select(["kode_brand", "nama_brand"])->get();
        return $data;
    }
}
