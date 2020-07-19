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
                $radio_id = $id . $i;
                $radio_text = $options[$i]['text'];
                $radio_value = $options[$i]['value'];
                $radio_checked = $isChecked(old($name, $radio_value));
            @endphp

            <div class="custom-control custom-radio d-inline mr-2">
                <input
                    type="radio"
                    id="{{ $radio_id }}"
                    class="custom-control-input @error($name) is-invalid @enderror"
                    name="{{ $name }}"
                    value="{{ $radio_value }}"
                    {{ $radio_checked ? 'checked' : '' }}
                />

                <label
                    class="custom-control-label"
                    for="{{ $radio_id }}"
                >
                    {{ $radio_text }}
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
