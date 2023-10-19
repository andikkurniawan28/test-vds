@extends("layouts.app_form_create")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_satuan")) }}
@endsection

@section("index")
    {{ route("master_satuan.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb2></x-breadcrumb2>
@endsection

@section("form")
    <form action="{{ route("master_satuan.store") }}" method="POST">
        @csrf @method("POST")
        <x-input1 name="kode_satuan_barang" type="text" value="" placeholder="Masukkan kode_satuan_barang" modifier="required autofocus"></x-input1>
        <x-input1 name="satuan_barang" type="text" value="" placeholder="Masukkan satuan_barang" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
