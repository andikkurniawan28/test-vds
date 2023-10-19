@extends("layouts.app_form_edit")

@section("title")
    {{ strtoupper(str_replace("_", " ", "produk")) }}
@endsection

@section("index")
    {{ route("produk.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb3></x-breadcrumb3>
@endsection

@section("form")
    <form action="{{ route("produk.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        <x-input1 name="kode_barang_internal" type="text" value="{{ $data->kode_barang_internal }}" placeholder="Masukkan kode_barang_internal" modifier="required autofocus"></x-input1>
        <x-input1 name="kode_barcode_asli" type="text" value="{{ $data->kode_barcode_asli }}" placeholder="Masukkan kode_barcode_asli" modifier="required"></x-input1>
        <x-input1 name="nama_barang" type="text" value="{{ $data->nama_barang }}" placeholder="Masukkan nama_barang" modifier="required"></x-input1>
        <x-input1 name="nama_singkat_barang" type="text" value="{{ $data->nama_singkat_barang }}" placeholder="Masukkan nama_singkat_barang" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
