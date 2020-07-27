@extends('layouts.master')

@push('page_styles')

@endpush

@push('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                <i class="fas fa-home fw"></i>
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ route('settings.profile') }}">
                Pengaturan
            </a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Hak Akses
        </li>
    </ol>
@endpush

@section('content-header', 'Hak Akses')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <x-card>
                <x-slot name="body">
                    <p class="font-weight-bold">
                        {{ $roles->count() }} peran tersedia.
                    </p>

                    <table class="table table-hover">
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>
                                        {{ Str::title($role->name) }}
                                    </td>

                                    <td></td>

                                    <td class="text-center">
                                        <b>{{ $role->users->count() }}</b> user
                                    </td>

                                    <td class="text-center">
                                        <a
                                            href="{{ route('roles.edit', $role->id) }}"
                                        >
                                            Ubah
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
