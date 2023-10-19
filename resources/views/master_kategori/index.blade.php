@extends("layouts.app_table_import_export")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_kategori")) }}
@endsection

@section("breadcrumb")
    <x-breadcrumb1></x-breadcrumb1>
@endsection

@section("create")
    {{ route("master_kategori.create") }}
@endsection

@section("import")
    {{ route("master_kategori-import-view") }}
@endsection

@section("export")
    {{ route("master_kategori-export") }}
@endsection

@section("clear")
    {{ route("master_kategori-clear") }}
@endsection

@section("table")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{ strtoupper(str_replace("_", " ", "kode_jenis_barang")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "jenis_barang")) }}</th>
                <th>{{ strtoupper("action") }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($master_kategoris as $data)
            <tr>
                <td>{{ $data->kode_jenis_barang }}</td>
                <td>{{ $data->jenis_barang }}</td>
                <td>
                    @include("components.action_group_button", [
                        "show"      => route("master_kategori.show", $data->id),
                        "edit"      => route("master_kategori.edit", $data->id),
                        "delete"    => $data->id,
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($master_kategoris as $data)
    <x-delete_modal
        data="{{ $data->id }}"
        title="{{ strtoupper(str_replace('_', ' ', 'master_kategori')) }}"
        header="Menghapus {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }}"
        body="Anda akan menghapus {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }} dengan kode_jenis_barang : {{ $data->kode_jenis_barang ?? '-' }} & jenis_barang : {{ $data->jenis_barang ?? '-' }}.
        Menghapus {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }} ini akan menghapus semua produk dengan {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }} ini. Apakah Anda yakin ?"
        route="{{ route('master_kategori.destroy', $data->id) }}"
    >
    </x-delete_modal>
    @endforeach

    <x-clear_modal
        id="clear"
        header="Kosongkan {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }}"
        body="Mengosongkan {{ strtoupper(str_replace('_', ' ', 'master_kategori')) }} akan sekaligus menghapus data yang berkaitan dengannya, apakah Anda yakin ?"
        route="{{ route('master_kategori-clear') }}"
    >
    </x-clear_modal>
@endsection
