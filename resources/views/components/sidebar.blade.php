@php
    $auth_user = auth::user();
@endphp

<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img
                src="{{ $auth_user->avatar() }}"
                class="img-circle" alt="User Image"
            />
        </div>

        <div class="info">
            <a href="javascript:void(0)" class="d-block">
                {{ $auth_user->name }}
            </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul
            class="nav nav-flat nav-sidebar flex-column"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
        >
            {{ $slot }}
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
