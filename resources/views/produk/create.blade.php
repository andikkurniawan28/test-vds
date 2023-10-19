@extends("layouts.app_form_create")

@section("title")
    {{ strtoupper(str_replace("_", " ", "produk")) }}
@endsection

@section("index")
    {{ route("produk.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb2></x-breadcrumb2>
@endsection

@section("form")
    <form action="{{ route("produk.store") }}" method="POST">
        @csrf @method("POST")
        <x-input1 name="kode_barang_internal" type="text" value="" placeholder="Masukkan kode_barang_internal" modifier="required autofocus"></x-input1>
        <x-input1 name="kode_barcode_asli" type="text" value="" placeholder="Masukkan kode_barcode_asli" modifier="required"></x-input1>
        <x-input1 name="nama_barang" type="text" value="" placeholder="Masukkan nama_barang" modifier="required"></x-input1>
        <x-input1 name="nama_singkat_barang" type="text" value="" placeholder="Masukkan nama_singkat_barang" modifier="required"></x-input1>
        <x-select1 name="master_supplier_id" title="supplier" :data="$master_suppliers" item="nama_supplier"></x-select1>
        <x-select1 name="master_brand_id" title="brand" :data="$master_brands" item="nama_brand"></x-select1>
        <x-select1 name="master_kategori_id" title="kategori" :data="$master_kategoris" item="jenis_barang"></x-select1>
        <x-select1 name="satuan_barang1_id" title="satuan_barang1" :data="$master_satuans" item="satuan_barang"></x-select1>
        <x-select1 name="satuan_barang2_id" title="satuan_barang2" :data="$master_satuans" item="satuan_barang"></x-select1>
        <x-select1 name="satuan_barang3_id" title="satuan_barang3" :data="$master_satuans" item="satuan_barang"></x-select1>
        <x-submit></x-submit>
    </form>
@endsection
