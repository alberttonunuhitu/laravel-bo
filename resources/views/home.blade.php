@extends('layouts.master')

@push('page_styles')
    @select2Style
    @tempusdominusStyle
@endpush

@push('breadcrumb')
    <x-breadcrumb.item
        label="Starter Page"
        active
    />
@endpush

@section('content-header', 'Starter Page')

@section('content')
    <x-card>
        <x-slot name="card_body">
            <x-form action="">
                <x-button />
            </x-form>
        </x-slot>
    </x-card>
@endsection

@push('page_plugins')
    @select2Script
    @tempusdominusScript
@endpush

@push('page_scripts')

@endpush
