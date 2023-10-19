<?php

namespace App\Imports;

use App\Models\Produk;
use App\Models\MasterBrand;
use App\Models\MasterSatuan;
use App\Models\MasterKategori;
use App\Models\MasterSupplier;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;

class ImportProduk implements ToModel, WithStartRow, WithMultipleSheets
{

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }

    public function model(array $row)
    {
        return new Produk([
           "kode_barang_internal"       => $row[0],
           "kode_barcode_asli"          => $row[1],
           "nama_barang"                => $row[2],
           "nama_singkat_barang"        => $row[2],
        //    "master_supplier_id"         => MasterSupplier::where("nama_supplier", $row[8])->get()->last()->id ?? NULL,
        //    "master_brand_id"            => MasterBrand::where("kode_brand", $row[12])->get()->last()->id ?? NULL,
        //    "master_kategori_id"         => MasterKategori::where("kode_jenis_barang", $row[13])->get()->last()->id ?? NULL,
        //    "satuan_barang1"             => MasterSatuan::where("satuan_barang", $row[14])->get()->last()->id ?? NULL,
        //    "satuan_barang2"             => MasterSatuan::where("satuan_barang", $row[15])->get()->last()->id ?? NULL,
        //    "satuan_barang3"             => MasterSatuan::where("satuan_barang", $row[16])->get()->last()->id ?? NULL,
        ]);
    }

    public function startRow(): int
    {
        return 5;
    }
}
