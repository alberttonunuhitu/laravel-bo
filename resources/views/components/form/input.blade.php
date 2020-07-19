@php
    $supported_types = array('text', 'number', 'email', 'password');
@endphp

@if (in_array($type, $supported_types))
    <div class="form-group">
        <label
            for="{{ $id }}"
        >
            {{ $label }}
            @if (!$required)
                <span class="text-muted font-weight-light">(optional)</span>
            @endif
        </label>

        @if ($readonly)
            <input
                type="text"
                id="{{ $id }}"
                class="form-control-plaintext"
                value="{{ $value }}"
                readonly
            />
        @else
            <input
                type="{{ $type }}"
                id="{{ $id }}"
                class="form-control @error($name) is-invalid @enderror"
                name="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                {{ $autofocus ? 'autofocus' : '' }}
                {{ $required ? 'required' : '' }}
            />
        @endif

        @if ($description)
            <small
                id="{{ $help_block }}"
                class="form-text text-info"
            >
                <i>{{ $description }}</i>
            </small>
        @endif

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
@else
    <p class="text-danger">
        Tidak mendukung tipe inputan {{ $type }}.
    </p>
@endif
