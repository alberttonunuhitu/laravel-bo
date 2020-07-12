<li class="breadcrumb-item{{ $active ? ' active' : '' }}">
    @if ($active)
        {{ $label }}
    @else
        <a href="{{ $link }}">{{ $label }}</a>
    @endif
</li>
