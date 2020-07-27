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
            Profil
        </li>
    </ol>
@endpush

@section('content-header', 'Profil')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <x-card>
                <x-form
                    action="{{ route('me.profile') }}"
                    method="PUT"
                >
                    <x-form.input
                        type="text"
                        label="Nama"
                        name="user_name"
                        :value="$user->name"
                        required
                    />

                    <x-form.input
                        type="email"
                        label="Alamat email"
                        :value="$user->email"
                        name="user_email"
                    />
                </x-form>
            </x-card>
        </div>
    </div>
@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
