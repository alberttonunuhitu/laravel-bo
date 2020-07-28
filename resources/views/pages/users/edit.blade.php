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
            Perbaharui
        </li>
    </ol>
@endpush

@section('content-header', 'Perbaharui Pengguna')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <x-card>
                <x-slot name="body">
                    <x-form
                        action="{{ route('users.update', $user->id) }}"
                        back="{{ route('users.index') }}"
                        method="PUT"
                    >
                        <x-form.input
                            label="Nama Pengguna"
                            name="name"
                            :value="$user->name"
                            required
                        />

                        <x-form.input
                            label="Username"
                            name="username"
                            :value="$user->username"
                            readonly
                            required
                        />

                        <x-form.input
                            type="email"
                            label="Alamat email"
                            name="email"
                            :value="$user->email"
                        />

                        <x-form.select
                            label="Hak akses"
                            :options="$roles"
                            name="role"
                            :selected="$user->roles->first()->id"
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
