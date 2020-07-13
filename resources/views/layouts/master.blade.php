<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
<body class="hold-transition sidebar-mini text-sm">
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
                            <x-breadcrumb>
                                <x-breadcrumb.item
                                    label="Home"
                                    link="/"
                                />
                                @stack('breadcrumb')
                            </x-breadcrumb>
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
    >
        <x-slot name="modal_body">

        </x-slot>

        <x-slot name="modal_footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
    @stack('page_scripts')
</body>
</html>
