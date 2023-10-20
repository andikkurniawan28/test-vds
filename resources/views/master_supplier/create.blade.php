@extends("layouts.app_form_create")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_supplier")) }}
@endsection

@section("index")
    {{ route("master_supplier.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb2></x-breadcrumb2>
@endsection

@section("form")
    <form action="{{ route("master_supplier.store") }}" method="POST">
        @csrf @method("POST")
        <x-input1 name="kode_supplier" type="text" value="" placeholder="Masukkan kode_supplier" modifier="required autofocus"></x-input1>
        <x-input1 name="nama_supplier" type="text" value="" placeholder="Masukkan nama_supplier" modifier="required"></x-input1>
        <x-input1 name="brand" type="text" value="" placeholder="Masukkan brand" modifier="required"></x-input1>
        <x-input1 name="alamat" type="text" value="" placeholder="Masukkan alamat" modifier="required"></x-input1>
        <x-input1 name="kota" type="text" value="" placeholder="Masukkan kota" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
