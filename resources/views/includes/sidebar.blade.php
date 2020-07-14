<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link logo-switch">
        <img
            src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/img/AdminLTELogo.png"
            alt="AdminLTE Docs Logo Small"
            class="brand-image-xl logo-xs"
        />

        <img
            src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/img/AdminLTELogo.png"
            alt="AdminLTE Docs Logo Large"
            class="brand-image-xs logo-xl"
            style="left: 12px"
        />
    </a>

    {{-- <a href="javascript:void(0)" class="brand-link text-center">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a> --}}

    <!-- Sidebar -->
    <x-sidebar>
        <x-sidebar.item
            label="Starter Pages"
            icon="tachometer-alt"
            treeview
            active
        >
            <x-sidebar.item
                label="Active Page"
                active
            />

            <x-sidebar.item
                label="Inactive Page"
            />
        </x-sidebar.item>

        <x-sidebar.item
            label="Simple Link"
            icon="th"
        />
    </x-sidebar.item>
    <!-- /.sidebar -->
  </aside>
