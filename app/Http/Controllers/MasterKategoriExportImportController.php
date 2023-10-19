<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use App\Exports\ExportMasterKategori;
use App\Imports\ImportMasterKategori;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MasterKategoriExportImportController extends Controller
{
    public function importView(){
        return view("master_kategori.import");
    }

    public function import(Request $request){
        Excel::import(new ImportMasterKategori, $request->file("file")->store("files"));
        return redirect()->route("master_kategori.index")->with("success", strtoupper(str_replace("_", " ", "master_kategori")) . " berhasil diimpor.");
    }

    public function export(){
        return Excel::download(new ExportMasterKategori, strtoupper(str_replace("_", " ", "master_kategori")).".xlsx");
    }

    public function clear(){
        MasterKategori::where("id", ">", 0)->delete();
        return redirect()->route("master_kategori.index")->with("success", strtoupper(str_replace("_", " ", "master_kategori")) . " berhasil dikosongkan.");
    }
}
