<form
    action="{{ $action }}"
    method="POST"
>
    @csrf
    @method($method)

    {{ $slot }}

    <hr />

    <div class="text-right">
        @if ($back)
            <x-button
                type="link"
                link="{{ $back }}"
                label="Kembali"
                variant="light"
            />
        @endif

        <x-button
            type="submit"
            label="Simpan"
        />
    </div>
</form>
