<div class="form-group">
    <label
        for="{{ $id }}"
        class="text-sm"
    >
        {{ $label }}@if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <div
        class="input-group date @error($name) is-invalid @enderror"
        id="{{ $id }}"
        data-target-input="nearest"
    >
        <input
            type="text"
            class="form-control form-control-sm datetimepicker-input @error($name) is-invalid @enderror"
            data-target="#{{ $id }}"
            name="{{ $name }}"
            value="{{ $value }}"
            readonly
            {{ $required ? 'required' : '' }}
        />

        <div
            class="input-group-append"
            data-target="#{{ $id }}"
            data-toggle="datetimepicker"
        >
            <div class="input-group-text">
                <i class="fa fa-calendar"></i>
            </div>
        </div>
    </div>

    <small
        id="{{ $help_block }}"
        class="form-text text-info text-bold"
    >
        Format: <i>Tahun-Bulan-Tanggal</i>
    </small>

    @error($name)
        <div class="invalid-feedback text-sm">
            {{ $message }}
        </div>
    @enderror
</div>

@push('page_scripts')
    $('#{!! $id !!}').datetimepicker({
        locale: 'id',
        ignoreReadonly: true,
        format: 'YYYY-MM-DD'
    });
@endpush
