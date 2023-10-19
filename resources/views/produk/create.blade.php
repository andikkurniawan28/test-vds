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
        <x-submit></x-submit>
    </form>
@endsection
