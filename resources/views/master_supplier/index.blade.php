@extends("layouts.app_table_import_export")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_supplier")) }}
@endsection

@section("breadcrumb")
    <x-breadcrumb1></x-breadcrumb1>
@endsection

@section("create")
    {{ route("master_supplier.create") }}
@endsection

@section("import")
    {{ route("master_supplier-import-view") }}
@endsection

@section("export")
    {{ route("master_supplier-export") }}
@endsection

@section("clear")
    {{ route("master_supplier-clear") }}
@endsection

@section("table")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{ strtoupper(str_replace("_", " ", "kode_supplier")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "nama_supplier")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "alamat")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "kota")) }}</th>
                <th>{{ strtoupper("action") }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($master_suppliers as $data)
            <tr>
                <td>{{ $data->kode_supplier }}</td>
                <td>{{ $data->nama_supplier }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->kota }}</td>
                <td>
                    @include("components.action_group_button", [
                        "show"      => route("master_supplier.show", $data->id),
                        "edit"      => route("master_supplier.edit", $data->id),
                        "delete"    => $data->id,
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($master_suppliers as $data)
    <x-delete_modal
        data="{{ $data->id }}"
        title="{{ strtoupper(str_replace('_', ' ', 'master_supplier')) }}"
        header="Menghapus {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }}"
        body="Anda akan menghapus {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }} dengan kode_supplier : {{ $data->kode_supplier ?? '-' }} & nama_supplier : {{ $data->nama_supplier ?? '-' }}.
        Menghapus {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }} ini akan menghapus semua produk dengan {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }} ini. Apakah Anda yakin ?"
        route="{{ route('master_supplier.destroy', $data->id) }}"
    >
    </x-delete_modal>
    @endforeach

    <x-clear_modal
        id="clear"
        header="Kosongkan {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }}"
        body="Mengosongkan {{ strtoupper(str_replace('_', ' ', 'master_supplier')) }} akan sekaligus menghapus data yang berkaitan dengannya, apakah Anda yakin ?"
        route="{{ route('master_supplier-clear') }}"
    >
    </x-clear_modal>
@endsection
