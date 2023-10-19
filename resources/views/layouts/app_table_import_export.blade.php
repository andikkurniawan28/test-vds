@extends("layouts.app")

@section("additional_style")
    <link href="./sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section("content")
@yield("breadcrumb")
@include("components.alert")
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">@yield("title")</h4>
    </div>
    <div class="card-body">
        <div class="btn-group" role="group" aria-label="Action button">
            <a href="@yield("create")" class="btn btn-outline-primary btn-sm">{{ strtoupper("Tambah") }} @yield("title")<i class="fas fa-plus"></i></a>
            <a href="@yield("import")" class="btn btn-outline-secondary btn-sm">{{ strtoupper("Impor Excel") }} <i class="fas fa-download"></i></a>
            <a href="@yield("export")" class="btn btn-outline-info btn-sm">{{ strtoupper("Ekspor Excel") }} <i class="fas fa-upload"></i></a>
            <a href="#" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#clear">{{ strtoupper("kosongkan (testing only)") }} <i class="fas fa-trash"></i></a>
        </div>
        <div class="table-responsive">
            <br>
            @yield("table")
        </div>
    </div>
</div>
@endsection

@section("additional_script")
    <script src="./sbadmin2/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="./sbadmin2/js/demo/datatables-demo.js"></script>
@endsection
