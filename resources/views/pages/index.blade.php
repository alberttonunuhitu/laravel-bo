@extends('layouts.master')

@push('page_styles')

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
            <x-form>

            </x-form>
        </x-slot>
    </x-card>
@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
