@extends("layouts.app_form_edit")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_kategori")) }}
@endsection

@section("index")
    {{ route("master_kategori.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb3></x-breadcrumb3>
@endsection

@section("form")
    <form action="{{ route("master_kategori.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        <x-input1 name="kode_jenis_barang" type="text" value="{{ $data->kode_jenis_barang }}" placeholder="Masukkan kode_jenis_barang" modifier="required autofocus"></x-input1>
        <x-input1 name="jenis_barang" type="text" value="{{ $data->jenis_barang }}" placeholder="Masukkan jenis_barang" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
