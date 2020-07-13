<div class="form-group">
    <label
        for="{{ $id }}"
        class="text-sm"
    >
        {{ $label }}@if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <select
        name="{{ $name }}"
        id="{{ $id }}"
        class="form-control{{ $select2 ? ' select2bs4' : ' form-control-sm' }} @error($name) is-invalid @enderror"
        {{ $required ? 'required' : '' }}
    >
        @foreach ($options as $option)
            <option
                value="{{ $option['value'] }}"
                {{ $isSelected($option['value']) ? 'selected' : '' }}
            >
                {{ $option['text'] }}
            </option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
