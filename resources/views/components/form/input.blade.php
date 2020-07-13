@php
    $supported_types = array('text', 'number', 'email', 'password');
@endphp

@if (in_array($type, $supported_types))
    <div class="form-group">
        <label
            for="{{ $id }}"
            class="text-sm"
        >
            {{ $label }}@if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
        </label>

        @if ($readonly)
            <input
                type="text"
                id="{{ $id }}"
                class="form-control-plaintext form-control-sm"
                value="{{ $value }}"
                readonly
            />
        @else

            <input
                type="{{ $type }}"
                id="{{ $id }}"
                class="form-control form-control-sm @error($name) is-invalid @enderror"
                name="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $autofocus ? 'autofocus' : '' }}
            />

        @endif

        @if ($description)
            <small
                id="{{ $helpBlock }}"
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
    <p class="text-sm text-danger">Tidak mendukung tipe inputan {{ $type }}.</p>
@endif
