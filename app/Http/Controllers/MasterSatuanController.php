<?php

namespace App\Http\Controllers;

use App\Models\MasterSatuan;
use Illuminate\Http\Request;
use App\Http\Requests\MasterSatuanStoreRequest;

class MasterSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_satuans = MasterSatuan::select(["id", "kode_satuan_barang", "satuan_barang"])->orderBy("id", "desc")->get();
        return view("master_satuan.index", compact("master_satuans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master_satuan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MasterSatuanStoreRequest $request)
    {
        MasterSatuan::create($request->all());
        return redirect()->route("master_satuan.index")->with("success", strtoupper(str_replace("_", " ", "master_satuan")) . " berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterSatuan $master_satuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MasterSatuan::whereId($id)->get()->last();
        return view("master_satuan.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        MasterSatuan::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("master_satuan.index")->with("success", strtoupper(str_replace("_", " ", "master_satuan")) . " berhasil diupdate.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MasterSatuan::whereId($id)->delete();
        return redirect()->route("master_satuan.index")->with("success", strtoupper(str_replace("_", " ", "master_satuan")) . " berhasil dihapus.");
    }
}
