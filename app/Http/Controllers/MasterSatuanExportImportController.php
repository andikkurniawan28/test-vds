<?php

namespace App\Http\Controllers;

use App\Models\MasterSatuan;
use App\Exports\ExportMasterSatuan;
use App\Imports\ImportMasterSatuan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MasterSatuanExportImportController extends Controller
{
    public function importView(){
        return view("master_satuan.import");
    }

    public function import(Request $request){
        Excel::import(new ImportMasterSatuan, $request->file("file")->store("files"));
        return redirect()->route("master_satuan.index")->with("success", strtoupper(str_replace("_", " ", "master_satuan")) . " berhasil diimpor.");
    }

    public function export(){
        return Excel::download(new ExportMasterSatuan, strtoupper(str_replace("_", " ", "master_satuan")).".xlsx");
    }

    public function clear(){
        MasterSatuan::where("id", ">", 0)->delete();
        return redirect()->route("master_satuan.index")->with("success", strtoupper(str_replace("_", " ", "master_satuan")) . " berhasil dikosongkan.");
    }
}
