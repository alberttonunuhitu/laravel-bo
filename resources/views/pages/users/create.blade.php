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
            <a href="{{ route('users.index') }}">
                Pengguna
            </a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Tambah
        </li>
    </ol>
@endpush

@section('content-header', 'Tambah Pengguna')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <x-card>
                <x-slot name="body">
                    <x-form
                        action="{{ route('users.store') }}"
                        back="{{ route('users.index') }}"
                    >
                        <x-form.input
                            label="Nama Pengguna"
                            name="name"
                            autofocus
                            required
                        />

                        <x-form.input
                            label="Username"
                            name="username"
                            required
                        />

                        <x-form.input
                            type="email"
                            label="Alamat email"
                            name="email"
                        />

                        <x-form.input
                            type="password"
                            label="Kata sandi"
                            name="password"
                            required
                        />

                        <x-form.input
                            type="password"
                            label="Konfirmasi kata sandi"
                            name="password_confirmation"
                            required
                        />

                        <x-form.select
                            label="Hak akses"
                            :options="$roles"
                            name="role"
                            required
                        />
                    </x-form>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
