<div class="form-group">
    <label
        for="{{ $id }}"
        class="text-sm"
    >
        {{ $label }} @if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <br />

    <div id="{{ $id }}" class="clearfix @error($name) is-invalid @enderror">
        @for ($i = 0; $i < count($options); $i++)
            @php
                $radioId = $id . $i;
                $radioText = $options[$i]['text'];
                $radioValue = $options[$i]['value'];
                $radioChecked = $isChecked(old($name, $radioValue));
            @endphp

            <div class="custom-control custom-radio d-inline mr-2">
                <input
                    class="custom-control-input @error($name) is-invalid @enderror"
                    type="radio"
                    name="{{ $name }}"
                    id="{{ $radioId }}"
                    value="{{ $radioValue }}"
                    {{ $radioChecked ? 'checked' : '' }}
                />

                <label
                    class="custom-control-label text-sm"
                    for="{{ $radioId }}"
                >
                    {{ $radioText }}
                </label>
            </div>
        @endfor
    </div>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
