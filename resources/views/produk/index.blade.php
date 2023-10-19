@extends("layouts.app_table_import_export")

@section("title")
    {{ strtoupper(str_replace("_", " ", "produk")) }}
@endsection

@section("breadcrumb")
    <x-breadcrumb1></x-breadcrumb1>
@endsection

@section("create")
    {{ route("produk.create") }}
@endsection

@section("import")
    {{ route("produk-import-view") }}
@endsection

@section("export")
    {{ route("produk-export") }}
@endsection

@section("clear")
    {{ route("produk-clear") }}
@endsection

@section("table")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{ strtoupper(str_replace("_", " ", "id")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "kode_barang_internal")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "kode_barcode_asli")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "nama_barang")) }}</th>
                <th>{{ strtoupper(str_replace("_", " ", "nama_singkat_barang")) }}</th>
                <th>{{ strtoupper("action") }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->kode_barang_internal }}</td>
                <td>{{ $data->kode_barcode_asli }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->nama_singkat_barang }}</td>
                <td>
                    @include("components.action_group_button", [
                        "show"      => route("produk.show", $data->id),
                        "edit"      => route("produk.edit", $data->id),
                        "delete"    => $data->id,
                    ])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($produks as $data)
    <x-delete_modal
        data="{{ $data->id }}"
        title="{{ strtoupper(str_replace('_', ' ', 'produk')) }}"
        header="Menghapus {{ strtoupper(str_replace('_', ' ', 'produk')) }}"
        body="Anda akan menghapus {{ strtoupper(str_replace('_', ' ', 'produk')) }} dengan kode_barang_internal : {{ $data->kode_barang_internal ?? '-' }} & kode_barcode_asli : {{ $data->kode_barcode_asli ?? '-' }}.
        Menghapus {{ strtoupper(str_replace('_', ' ', 'produk')) }} ini akan menghapus semua produk dengan {{ strtoupper(str_replace('_', ' ', 'produk')) }} ini. Apakah Anda yakin ?"
        route="{{ route('produk.destroy', $data->id) }}"
    >
    </x-delete_modal>
    @endforeach

    <x-clear_modal
        id="clear"
        header="Kosongkan {{ strtoupper(str_replace('_', ' ', 'produk')) }}"
        body="Mengosongkan {{ strtoupper(str_replace('_', ' ', 'produk')) }} akan sekaligus menghapus data yang berkaitan dengannya, apakah Anda yakin ?"
        route="{{ route('produk-clear') }}"
    >
    </x-clear_modal>
@endsection
