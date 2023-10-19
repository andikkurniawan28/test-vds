<?php

namespace App\Http\Controllers;

use App\Models\MasterSupplier;
use Illuminate\Http\Request;

class MasterSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_suppliers = MasterSupplier::select(["id", "kode_supplier", "nama_supplier", "brand", "alamat", "kota"])->orderBy("id", "desc")->get();
        return view("master_supplier.index", compact("master_suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master_supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MasterSupplier::create($request->all());
        return redirect()->route("master_supplier.index")->with("success", strtoupper(str_replace("_", " ", "master_supplier")) . " berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterSupplier $master_supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MasterSupplier::whereId($id)->get()->last();
        return view("master_supplier.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        MasterSupplier::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("master_supplier.index")->with("success", strtoupper(str_replace("_", " ", "master_supplier")) . " berhasil diupdate.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MasterSupplier::whereId($id)->delete();
        return redirect()->route("master_supplier.index")->with("success", strtoupper(str_replace("_", " ", "master_supplier")) . " berhasil dihapus.");
    }
}
