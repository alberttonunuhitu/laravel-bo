<div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="text-center">
                <th width="20px">No</th>
                <th>Username</th>
                <th>Alamat Email</th>
                <th width="250px"></th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr class="text-center">
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $user->username }}</td>
                    <td class="align-middle">{{ $user->email }}</td>
                    <td class="align-middle">
                        <a
                            href="{{ route('users.edit', $user->id) }}"
                            class="btn btn-link"
                            role="button"
                        >
                            Ubah
                        </a>
                        |
                        <form
                            action="{{ route('users.destroy', $user->id) }}"
                            method="POST"
                            class="d-inline"
                            onsubmit="return confirm('Yakin hapus data ini ?')"
                        >
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-link"
                            >
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4">
                        Tidak ada data...
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex flex-column align-items-end">
        {{ $users->links() }}
    </div>
</div>
