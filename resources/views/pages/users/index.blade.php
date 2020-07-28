@extends('layouts.master')

@push('page_styles')
    @livewireStyles
@endpush

@push('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                <i class="fas fa-home fw"></i>
            </a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Pengguna
        </li>
    </ol>
@endpush

@section('content-header', 'Pengguna')

@section('content')
    <x-card>
        <x-slot name="header">
            <div class="d-flex flex-column align-items-end">
                <x-button
                    type="link"
                    icon="plus"
                    label="Tambah"
                    link="{{ route('users.create') }}"
                />
            </div>
        </x-slot>

        <x-slot name="body">
            @livewire('user.table')
        </x-slot>
    </x-card>
@endsection

@push('page_plugins')
    @livewireScripts
@endpush

@push('page_scripts')

@endpush
