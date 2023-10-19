@extends("layouts.app_table_import_export")

@section("title")
    {{ strtoupper(str_replace("_", " ", "master_brand")) }}
@endsection

@section("breadcrumb")
    <x-breadcrumb1></x-breadcrumb1>
@endsection

@section("create")
    {{ route("master_brand.create") }}
@endsection

@section("import")
    {{ route("master_brand-import-view") }}
@endsection

@section("export")
    {{ route("master_brand-export") }}
@endsection

@section("clear")
    {{ route("master_brand-clear") }}
@endsection

@section("table")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{ strtoupper(str_replace("_", " ", "kode_brand")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "nama_brand")) }}</th>
                <th>{{ strtoupper("action") }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($master_brands as $data)
            <tr>
                <td>{{ $data->kode_brand }}</td>
                <td>{{ $data->nama_brand }}</td>
                <td>
                    @include("components.action_group_button", [
                        "show"      => route("master_brand.show", $data->id),
                        "edit"      => route("master_brand.edit", $data->id),
                        "delete"    => $data->id,
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($master_brands as $data)
    <x-delete_modal
        data="{{ $data->id }}"
        title="{{ strtoupper(str_replace('_', ' ', 'master_brand')) }}"
        header="Menghapus {{ strtoupper(str_replace('_', ' ', 'master_brand')) }}"
        body="Anda akan menghapus {{ strtoupper(str_replace('_', ' ', 'master_brand')) }} dengan kode_brand : {{ $data->kode_brand ?? '-' }} & nama_brand : {{ $data->nama_brand ?? '-' }}.
        Menghapus {{ strtoupper(str_replace('_', ' ', 'master_brand')) }} ini akan menghapus semua produk dengan {{ strtoupper(str_replace('_', ' ', 'master_brand')) }} ini. Apakah Anda yakin ?"
        route="{{ route('master_brand.destroy', $data->id) }}"
    >
    </x-delete_modal>
    @endforeach

    <x-clear_modal
        id="clear"
        header="Kosongkan {{ strtoupper(str_replace('_', ' ', 'master_brand')) }}"
        body="Mengosongkan {{ strtoupper(str_replace('_', ' ', 'master_brand')) }} akan sekaligus menghapus data yang berkaitan dengannya, apakah Anda yakin ?"
        route="{{ route('master_brand-clear') }}"
    >
    </x-clear_modal>
@endsection
