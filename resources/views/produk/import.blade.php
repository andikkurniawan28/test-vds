@extends("layouts.app_form_import")

@section("title")
    {{ strtoupper(str_replace("_", " ", "produk")) }}
@endsection

@section("index")
    {{ route("produk.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb4></x-breadcrumb4>
@endsection

@section("form")
    <form action="{{ route("produk-import") }}" method="POST" enctype="multipart/form-data">
    @csrf
        <x-input_file></x-input_file>
        <x-submit></x-submit>
    </form>
@endsection
