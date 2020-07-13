<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img
                src="https://ui-avatars.com/api?name=Alexander Pierce&background=dc3545&color=fff"
                class="img-circle" alt="User Image"
            />
        </div>

        <div class="info">
            <a href="javascript:void(0)" class="d-block">
                Alexander Pierce
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
