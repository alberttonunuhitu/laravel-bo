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

        <li class="breadcrumb-item" aria-current="page">
            <a href="{{ route('settings.profile') }}">
                Pengaturan
            </a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Keamanan
        </li>
    </ol>
@endpush

@section('content-header', 'Keamanan')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <x-card>
                <x-form
                    action="{{ route('me.password') }}"
                    method="PUT"
                >
                    <legend class="font-weight-light">
                        Ubah kata sandi
                    </legend>

                    <hr />

                    <x-form.input
                        type="password"
                        label="Kata sandi lama"
                        name="password_old"
                        required
                    />

                    <x-form.input
                        type="password"
                        label="Kata sandi baru"
                        name="password"
                        required
                    />

                    <x-form.input
                        type="password"
                        label="Konfirmasi kata sandi baru"
                        name="password_confirmation"
                        required
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
