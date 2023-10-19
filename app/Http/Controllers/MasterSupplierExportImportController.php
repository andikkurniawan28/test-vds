<?php

namespace App\Http\Controllers;

use App\Models\MasterSupplier;
use App\Exports\ExportMasterSupplier;
use App\Imports\ImportMasterSupplier;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MasterSupplierExportImportController extends Controller
{
    public function importView(){
        return view("master_supplier.import");
    }

    public function import(Request $request){
        Excel::import(new ImportMasterSupplier, $request->file("file")->store("files"));
        return redirect()->route("master_supplier.index")->with("success", strtoupper(str_replace("_", " ", "master_supplier")) . " berhasil diimpor.");
    }

    public function export(){
        return Excel::download(new ExportMasterSupplier, strtoupper(str_replace("_", " ", "master_supplier")).".xlsx");
    }

    public function clear(){
        MasterSupplier::where("id", ">", 0)->delete();
        return redirect()->route("master_supplier.index")->with("success", strtoupper(str_replace("_", " ", "master_supplier")) . " berhasil dikosongkan.");
    }
}
