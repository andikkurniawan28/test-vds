<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

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
        return view("produk.create");
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
        return view("produk.edit", compact("data"));
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
