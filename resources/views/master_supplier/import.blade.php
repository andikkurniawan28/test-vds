@extends("layouts.app_form_import")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_supplier")) }}
@endsection

@section("index")
    {{ route("master_supplier.index") }}
@endsection

@section("breadcrumb")
    <x-breadcrumb4></x-breadcrumb4>
@endsection

@section("form")
    <form action="{{ route("master_supplier-import") }}" method="POST" enctype="multipart/form-data">
    @csrf
        <x-input_file></x-input_file>
        <x-submit></x-submit>
    </form>
@endsection
