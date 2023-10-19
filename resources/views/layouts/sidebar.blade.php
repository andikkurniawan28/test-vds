        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route("dashboard") }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ ENV("APP_NAME") }}</div>
            </a>
            <hr class="sidebar-divider my-0">
                <x-sidebar_item icon="tachometer-alt" route="{{ route('dashboard') }}" title="dashboard"></x-sidebar_item>
                <x-sidebar_item icon="key" route="{{ route('role.index') }}" title="role"></x-sidebar_item>
                <x-sidebar_item icon="users" route="{{ route('user.index') }}" title="user"></x-sidebar_item>
                <x-sidebar_item icon="tag" route="{{ route('master_brand.index') }}" title="master_brand"></x-sidebar_item>
                <x-sidebar_item icon="filter" route="{{ route('master_kategori.index') }}" title="master_kategori"></x-sidebar_item>
                <x-sidebar_item icon="asterisk" route="{{ route('master_satuan.index') }}" title="master_satuan"></x-sidebar_item>
                <x-sidebar_item icon="truck" route="{{ route('master_supplier.index') }}" title="master_supplier"></x-sidebar_item>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
