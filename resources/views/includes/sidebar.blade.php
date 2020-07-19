<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link navbar-light">
        <img
            src="{{ asset('illustrations/laravel-mark-cmyk-red.png') }}"
            alt="App Brand Logo"
            class="brand-image"
        />
        <span class="brand-text font-weight-normal text-danger">
            {{ config('app.name') }}
        </span>
    </a>

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
