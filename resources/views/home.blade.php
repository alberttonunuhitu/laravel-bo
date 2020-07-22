@extends('layouts.master')

@push('page_styles')
    @select2Style
    @tempusdominusStyle
@endpush

@push('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                Home
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Starter Page
        </li>
    </ol>
@endpush

@section('content-header', 'Starter Page')

@section('content')
    <x-card>

    </x-card>
@endsection

@push('page_plugins')
    @select2Script
    @tempusdominusScript
@endpush

@push('page_scripts')

@endpush
