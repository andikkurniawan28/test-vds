@extends("layouts.app_form_edit")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_supplier")) }}
@endsection

@section("index")
    {{ route("master_supplier.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb3></x-breadcrumb3>
@endsection

@section("form")
    <form action="{{ route("master_supplier.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        <x-input1 name="kode_supplier" type="text" value="{{ $data->kode_supplier }}" placeholder="Masukkan kode_supplier" modifier="required autofocus"></x-input1>
        <x-input1 name="nama_supplier" type="text" value="{{ $data->nama_supplier }}" placeholder="Masukkan nama_supplier" modifier="required"></x-input1>
        <x-input1 name="brand" type="text" value="{{ $data->brand }}" placeholder="Masukkan brand" modifier="required"></x-input1>
        <x-input1 name="alamat" type="text" value="{{ $data->alamat }}" placeholder="Masukkan alamat" modifier="required"></x-input1>
        <x-input1 name="kota" type="text" value="{{ $data->kota }}" placeholder="Masukkan kota" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
