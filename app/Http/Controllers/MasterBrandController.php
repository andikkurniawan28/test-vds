<?php

namespace App\Http\Controllers;

use App\Models\MasterBrand;
use Illuminate\Http\Request;
use App\Http\Requests\MasterBrandStoreRequest;

class MasterBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_brands = MasterBrand::select(["id", "kode_brand", "nama_brand"])->orderBy("id", "desc")->get();
        return view("master_brand.index", compact("master_brands"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master_brand.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MasterBrandStoreRequest $request)
    {
        MasterBrand::create($request->all());
        return redirect()->route("master_brand.index")->with("success", strtoupper(str_replace("_", " ", "master_brand")) . " berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterBrand $master_brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = MasterBrand::whereId($id)->get()->last();
        return view("master_brand.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        MasterBrand::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("master_brand.index")->with("success", strtoupper(str_replace("_", " ", "master_brand")) . " berhasil diupdate.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MasterBrand::whereId($id)->delete();
        return redirect()->route("master_brand.index")->with("success", strtoupper(str_replace("_", " ", "master_brand")) . " berhasil dihapus.");
    }
}
