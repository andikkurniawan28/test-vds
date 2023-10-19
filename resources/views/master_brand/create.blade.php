@extends("layouts.app_form_create")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_brand")) }}
@endsection

@section("index")
    {{ route("master_brand.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb2></x-breadcrumb2>
@endsection

@section("form")
    <form action="{{ route("master_brand.store") }}" method="POST">
        @csrf @method("POST")
        <x-input1 name="kode_brand" type="text" value="" placeholder="Masukkan kode_brand" modifier="required autofocus"></x-input1>
        <x-input1 name="nama_brand" type="text" value="" placeholder="Masukkan nama_brand" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
