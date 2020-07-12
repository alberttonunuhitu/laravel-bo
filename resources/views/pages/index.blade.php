@extends('layouts.master')

@push('breadcrumb')
    <x-breadcrumb.item
        label="Starter Page"
        active
    />
@endpush

@section('content-header', 'Starter Page')


@section('content')

@endsection
