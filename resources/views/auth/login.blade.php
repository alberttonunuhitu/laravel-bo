@extends('layouts.app', [
    'body_class' => ' login-page',
    'page_title' => 'Masuk'
])

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <b>{{ config('app.name') }}</b>
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    Masuk untuk memulai sesi Anda
                </p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <div class="input-group @error('username') is-invalid @enderror">
                            <input
                                type="text"
                                class="form-control @error('username') is-invalid @enderror"
                                placeholder="Username"
                                name="username"
                                value="{{ old('username') }}"
                                required
                                autofocus
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group @error('password') is-invalid @enderror">
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Kata sandi"
                                name="password"
                                required
                            >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="custom-control custom-checkbox">
                                <input
                                    type="checkbox"
                                    id="remember"
                                    class="custom-control-input"
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                />

                                <label
                                    for="remember"
                                    class="custom-control-label"
                                >
                                    Ingat saya
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button
                                type="submit"
                                class="btn btn-flat btn-primary btn-block"
                            >
                                Masuk
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
