<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @favicon

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('content-header') | {{ config('app.name') }}</title>

    <!-- Font Awesome Icons -->
    @fontawesome

    @stack('page_styles')

    <!-- overlayScrollbars -->
    @overlayScrollbarsStyle
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @navbar
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @sidebar

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('content-header')</h1>
                        </div>
                        <!-- /.col -->

                        <div class="col-sm-6">
                            @stack('breadcrumb')
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @footer
    </div>
    <!-- ./wrapper -->

    <x-modal
        id="modal_logout"
        title="Yakin ingin keluar dari aplikasi ?"
    >
        <x-slot name="modal_body">
            Pilih "Keluar" di bawah ini jika Anda siap untuk keluar dari aplikasi.
        </x-slot>

        <x-slot name="modal_footer">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button
                    type="button"
                    class="btn btn-flat btn-light"
                    data-dismiss="modal"
                >
                    Batal
                </button>

                <button
                    type="submit"
                    class="btn btn-flat btn-primary"
                >
                    Keluar
                </button>
            </form>
        </x-slot>
    </x-modal>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    @jqueryScript
    <!-- Bootstrap 4 -->
    @bootstrapScript
    <!-- overlayScrollbars -->
    @overlayScrollbarsScript
    <!-- App -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- PAGE PLUGINS -->
    @stack('page_plugins')

    <!-- PAGE SCRIPTS -->
    <script>
        $(document).ready(function () {
            @stack('page_scripts')
        });
    </script>
</body>
</html>
