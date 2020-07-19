<div class="form-group">
    <label
        for="{{ $id }}"
    >
        {{ $label }} @if (!$required) <span class="text-muted font-weight-light">(optional)</span> @endif
    </label>

    <br />

    <div id="{{ $id }}" class="clearfix @error($name) is-invalid @enderror">
        @for ($i = 0; $i < count($options); $i++)
            @php
                $checkbox_id = $id . $i;
                $checkbox_text = $options[$i]['text'];
                $checkbox_value = $options[$i]['value'];
                $checkbox_checked = $isChecked($checkbox_value);
            @endphp

            <div class="custom-control custom-checkbox d-inline mr-2">
                <input
                    type="checkbox"
                    id="{{ $checkbox_id }}"
                    class="custom-control-input @error($name) is-invalid @enderror"
                    name="{{ $name }}"
                    value="{{ $checkbox_value }}"
                    {{ $checkbox_checked ? 'checked' : '' }}
                />

                <label
                    class="custom-control-label"
                    for="{{ $checkbox_id }}"
                >
                    {{ $checkbox_text }}
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
