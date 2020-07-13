@php
    $hasTreeviewClass = $treeview ? ' has-treeview' : '';
    $menuOpenClass = $treeview && $active ? ' menu-open' : '';
    $activeClass = $active ? ' active' : '';
@endphp

<li class="nav-item{{ $hasTreeviewClass }}{{ $menuOpenClass }}">
    <a href="{{ $link }}" class="nav-link{{ $activeClass }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
            {{-- <span class="right badge badge-danger">New</span> --}}
            @if ($treeview)<i class="right fas fa-angle-left"></i>@endif
        </p>
    </a>
    @if ($treeview)
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    @endif
</li>
