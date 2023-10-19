@extends("layouts.app_form_edit")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_brand")) }}
@endsection

@section("index")
    {{ route("master_brand.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb3></x-breadcrumb3>
@endsection

@section("form")
    <form action="{{ route("master_brand.update", $data->id) }}" method="POST">
        @csrf @method("PUT")
        <x-input1 name="kode_brand" type="text" value="{{ $data->kode_brand }}" placeholder="Masukkan kode_brand" modifier="required autofocus"></x-input1>
        <x-input1 name="nama_brand" type="text" value="{{ $data->nama_brand }}" placeholder="Masukkan nama_brand" modifier="required"></x-input1>
        <x-submit></x-submit>
    </form>
@endsection
