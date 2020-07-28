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

        <li class="breadcrumb-item active" aria-current="page">
            Beranda
        </li>
    </ol>
@endpush

@section('content-header', 'Beranda')

@section('content')

@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
