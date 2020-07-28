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
            label="Beranda"
            icon="tachometer-alt"
            link="{{ route('home') }}"
            active="{{ request()->is('/') }}"
        />

        @can('read users')
            <x-sidebar.item
                label="Pengguna"
                icon="users"
                link="{{ route('users.index') }}"
                active="{{ request()->is('users*') }}"
            />
        @endcan

        <x-sidebar.item
            label="Pengaturan"
            icon="cog"
            treeview
            active="{{ request()->is('settings*') }}"
        >
            <x-sidebar.item
                label="Profil"
                link="{{ route('settings.profile') }}"
                active="{{ request()->is('settings/profile*') }}"
            />

            <x-sidebar.item
                label="Keamanan"
                link="{{ route('settings.security') }}"
                active="{{ request()->is('settings/security*') }}"
            />

            @can('access settings')
                <x-sidebar.item
                    label="Hak Akses"
                    link="{{ route('settings.access') }}"
                    active="{{ request()->is('settings/access*') }}"
                />
            @endcan
        </x-sidebar.item>
    </x-sidebar.item>
    <!-- /.sidebar -->
  </aside>
