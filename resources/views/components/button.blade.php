@php
    $supported_types = ['button', 'submit', 'reset', 'link'];
    $variant_class = "btn-{$variant}";
@endphp

@if (in_array($type, $supported_types))
    @if ($type != 'link')
        <button
            id="{{ $id }}"
            type="{{ $type }}"
            class="btn btn-flat {{ $variant_class }}"
        >
            {{ $label }}
        </button>
    @else
        <a
            id="{{ $id }}"
            href="{{ $link }}"
            role="button"
            class="btn btn-flat {{ $variant_class }}"
        >
            {{ $label }}
        </a>
    @endif
@else
    <p class="text-sm text-danger">
        Tidak mendukung tipe button {{ $type }}.
    </p>
@endif
