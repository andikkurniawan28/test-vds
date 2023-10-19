<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Exports\ExportProduk;
use App\Imports\ImportProduk;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProdukExportImportController extends Controller
{
    public function importView(){
        return view("produk.import");
    }

    public function import(Request $request){
        $import = new ImportProduk();
        $import->sheets(0);
        Excel::import($import, $request->file("file"));
        return redirect()->route("produk.index")->with("success", strtoupper(str_replace("_", " ", "produk")) . " berhasil diimpor.");
    }

    public function export(){
        return Excel::download(new ExportProduk, strtoupper(str_replace("_", " ", "produk")).".xlsx");
    }

    public function clear(){
        Produk::where("id", ">", 0)->delete();
        return redirect()->route("produk.index")->with("success", strtoupper(str_replace("_", " ", "produk")) . " berhasil dikosongkan.");
    }
}
