@extends("layouts.app_table_import_export")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_satuan")) }}
@endsection

@section("breadcrumb")
    <x-breadcrumb1></x-breadcrumb1>
@endsection

@section("create")
    {{ route("master_satuan.create") }}
@endsection

@section("import")
    {{ route("master_satuan-import-view") }}
@endsection

@section("export")
    {{ route("master_satuan-export") }}
@endsection

@section("clear")
    {{ route("master_satuan-clear") }}
@endsection

@section("table")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{ strtoupper(str_replace("_", " ", "kode_satuan_barang")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "satuan_barang")) }}</th>
                <th>{{ strtoupper("action") }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($master_satuans as $data)
            <tr>
                <td>{{ $data->kode_satuan_barang }}</td>
                <td>{{ $data->satuan_barang }}</td>
                <td>
                    @include("components.action_group_button", [
                        "show"      => route("master_satuan.show", $data->id),
                        "edit"      => route("master_satuan.edit", $data->id),
                        "delete"    => $data->id,
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($master_satuans as $data)
    <x-delete_modal
        data="{{ $data->id }}"
        title="{{ strtoupper(str_replace('_', ' ', 'master_satuan')) }}"
        header="Menghapus {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }}"
        body="Anda akan menghapus {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }} dengan kode_satuan_barang : {{ $data->kode_satuan_barang ?? '-' }} & satuan_barang : {{ $data->satuan_barang ?? '-' }}.
        Menghapus {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }} ini akan menghapus semua produk dengan {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }} ini. Apakah Anda yakin ?"
        route="{{ route('master_satuan.destroy', $data->id) }}"
    >
    </x-delete_modal>
    @endforeach

    <x-clear_modal
        id="clear"
        header="Kosongkan {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }}"
        body="Mengosongkan {{ strtoupper(str_replace('_', ' ', 'master_satuan')) }} akan sekaligus menghapus data yang berkaitan dengannya, apakah Anda yakin ?"
        route="{{ route('master_satuan-clear') }}"
    >
    </x-clear_modal>
@endsection
