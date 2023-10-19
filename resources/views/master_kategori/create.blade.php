@extends("layouts.app_form_create")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_kategori")) }}
@endsection

@section("index")
    {{ route("master_kategori.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb2></x-breadcrumb2>
@endsection

@section("form")
    <form action="{{ route("master_kategori.store") }}" method="POST">
        @csrf @method("POST")
        <x-input1 name="kode_jenis_barang" type="text" value="" placeholder="Masukkan kode_jenis_barang" modifier="required autofocus"></x-input1>
        <x-input1 name="jenis_barang" type="text" value="" placeholder="Masukkan jenis_barang" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
