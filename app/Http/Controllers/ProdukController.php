<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\MasterBrand;
use App\Models\MasterSatuan;
use Illuminate\Http\Request;
use App\Models\MasterKategori;
use App\Models\MasterSupplier;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::orderBy("id", "desc")->get();
        return view("produk.index", compact("produks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $master_suppliers = MasterSupplier::orderBy("id", "asc")->get();
        $master_brands = MasterBrand::orderBy("id", "asc")->get();
        $master_kategoris = MasterKategori::orderBy("id", "asc")->get();
        $master_satuans = MasterSatuan::orderBy("id", "asc")->get();
        return view("produk.create", compact("master_suppliers", "master_brands", "master_kategoris", "master_satuans"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route("produk.index")->with("success", strtoupper(str_replace("_", " ", "produk")) . " berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Produk::whereId($id)->get()->last();
        $master_suppliers = MasterSupplier::orderBy("id", "asc")->get();
        $master_brands = MasterBrand::orderBy("id", "asc")->get();
        $master_kategoris = MasterKategori::orderBy("id", "asc")->get();
        $master_satuans = MasterSatuan::orderBy("id", "asc")->get();
        return view("produk.edit", compact("data", "master_suppliers", "master_brands", "master_kategoris", "master_satuans"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Produk::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("produk.index")->with("success", strtoupper(str_replace("_", " ", "produk")) . " berhasil diupdate.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Produk::whereId($id)->delete();
        return redirect()->route("produk.index")->with("success", strtoupper(str_replace("_", " ", "produk")) . " berhasil dihapus.");
    }
}
