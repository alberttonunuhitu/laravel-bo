@php
    $has_tree_view_class = $treeview ? ' has-treeview' : '';
    $menu_open_class = $treeview && $active ? ' menu-open' : '';
    $active_class = $active ? ' active' : '';
@endphp

<li class="nav-item{{ $has_tree_view_class }}{{ $menu_open_class }}">
    <a href="{{ $link }}" class="nav-link{{ $active_class }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
            @if ($treeview)<i class="right fas fa-angle-left"></i>@endif
        </p>
    </a>
    @if ($treeview)
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    @endif
</li>
