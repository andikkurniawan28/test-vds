<?php

namespace App\Http\Controllers;

use App\Models\MasterKategori;
use Illuminate\Http\Request;
use App\Http\Requests\MasterKategoriStoreRequest;

class MasterKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_kategoris = MasterKategori::select(["id", "kode_jenis_barang", "jenis_barang"])->orderBy("id", "desc")->get();
        return view("master_kategori.index", compact("master_kategoris"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master_kategori.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MasterKategoriStoreRequest $request)
    {
        MasterKategori::create($request->all());
        return redirect()->route("master_kategori.index")->with("success", strtoupper(str_replace("_", " ", "master_kategori")) . " berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterKategori $master_kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MasterKategori::whereId($id)->get()->last();
        return view("master_kategori.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        MasterKategori::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("master_kategori.index")->with("success", strtoupper(str_replace("_", " ", "master_kategori")) . " berhasil diupdate.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MasterKategori::whereId($id)->delete();
        return redirect()->route("master_kategori.index")->with("success", strtoupper(str_replace("_", " ", "master_kategori")) . " berhasil dihapus.");
    }
}
