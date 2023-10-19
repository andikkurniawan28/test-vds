@extends("layouts.app_form_edit")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_satuan")) }}
@endsection

@section("index")
    {{ route("master_satuan.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb3></x-breadcrumb3>
@endsection

@section("form")
    <form action="{{ route("master_satuan.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        <x-input1 name="kode_satuan_barang" type="text" value="{{ $data->kode_satuan_barang }}" placeholder="Masukkan kode_satuan_barang" modifier="required autofocus"></x-input1>
        <x-input1 name="satuan_barang" type="text" value="{{ $data->satuan_barang }}" placeholder="Masukkan satuan_barang" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
