<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function master_supplier(){
        return $this->belongsTo(MasterSupplier::class);
    }

    public function master_brand(){
        return $this->belongsTo(MasterBrand::class);
    }

    public function master_kategori(){
        return $this->belongsTo(MasterKategori::class);
    }

    public function satuan_barang1(){
        return $this->belongsTo(MasterSatuan::class);
    }

    public function satuan_barang2(){
        return $this->belongsTo(MasterSatuan::class);
    }

    public function satuan_barang3(){
        return $this->belongsTo(MasterSatuan::class);
    }
}
