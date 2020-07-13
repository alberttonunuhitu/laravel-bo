<form
    action="{{ $action }}"
    method="POST"
>
    @csrf
    @method($method)

    {{ $slot }}

    <hr />

    <div class="text-right">
        <x-button
            type="link"
            link="{{ $back }}"
            label="Kembali"
            variant="light"
        />

        <x-button
            type="submit"
            label="Simpan"
        />
    </div>
</form>
