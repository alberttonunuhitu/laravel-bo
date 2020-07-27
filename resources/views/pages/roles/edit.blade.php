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
            <a href="{{ route('settings.access') }}">
                Hak Akses
            </a>
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            Atur
        </li>
    </ol>
@endpush

@section('content-header', 'Atur Hak Akses')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <x-card>
                <x-form
                    action="{{ route('roles.update', $role->id) }}"
                    method="PUT"
                >
                    <x-form.input
                        type="text"
                        label="Nama Hak Akses"
                        name="role_name"
                        :value="$role->name"
                        required
                        readonly
                    />

                    @foreach ($permissions as $rows)
                        <div class="form-group">
                            <div class="clearfix">
                                @foreach ($rows as $column)
                                    <div class="custom-control custom-checkbox d-inline mr-2">
                                        <input
                                            type="checkbox"
                                            id="checkboxPermission{{ $column->id }}"
                                            class="custom-control-input"
                                            name="role_permissions[]"
                                            value="{{ $column->id }}"
                                            {{ in_array($column->id, $role_permissions) ? 'checked' : '' }}
                                        />

                                        <label
                                            class="custom-control-label"
                                            for="checkboxPermission{{ $column->id }}"
                                        >
                                            {{ $column->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </x-form>
            </x-card>
        </div>
    </div>
@endsection

@push('page_plugins')

@endpush

@push('page_scripts')

@endpush
