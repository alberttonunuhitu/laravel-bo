<div class="form-group">
    <label
        class="text-sm"
        for="{{ $id }}"
    >
        {{ $label }}@if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <div
        class="input-group input-group-sm date @error($name) is-invalid @enderror"
        id="{{ $id }}"
        data-target-input="nearest"
    >
        <input
            type="text"
            class="form-control datetimepicker-input @error($name) is-invalid @enderror"
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
        id="{{ $helpBlock }}"
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
    <script>
        $('#{!! $id !!}').datetimepicker({
            locale: 'id',
            ignoreReadonly: true,
            format: 'YYYY-MM-DD'
        });
    </script>
@endpush
