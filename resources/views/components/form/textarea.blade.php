<div class="form-group">
    <label
        for="{{ $id }}"
        class="text-sm"
    >
        {{ $label }}@if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        class="form-control form-control-sm @error($name) is-invalid @enderror"
        rows="3"
        {{ $required ? 'required' : '' }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
