<?php

namespace App\Http\Controllers;

use App\Models\MasterBrand;
use App\Exports\ExportMasterBrand;
use App\Imports\ImportMasterBrand;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MasterBrandExportImportController extends Controller
{
    public function importView(){
        return view("master_brand.import");
    }

    public function import(Request $request){
        Excel::import(new ImportMasterBrand, $request->file("file"));
        return redirect()->route("master_brand.index")->with("success", strtoupper(str_replace("_", " ", "master_brand")) . " berhasil diimpor.");
    }

    public function export(){
        return Excel::download(new ExportMasterBrand, strtoupper(str_replace("_", " ", "master_brand")).".xlsx");
    }

    public function clear(){
        MasterBrand::where("id", ">", 0)->delete();
        return redirect()->route("master_brand.index")->with("success", strtoupper(str_replace("_", " ", "master_brand")) . " berhasil dikosongkan.");
    }
}
