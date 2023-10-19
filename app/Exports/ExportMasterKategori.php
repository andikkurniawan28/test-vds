<?php

namespace App\Exports;

use App\Models\MasterKategori;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportMasterKategori implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $data = MasterKategori::select(["kode_jenis_barang", "jenis_barang"])->get();
        return $data;
    }
}
