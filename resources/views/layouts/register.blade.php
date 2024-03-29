<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="csp-nonce" content="{{ csp_nonce() }}">
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <link rel="icon" href="{{ url('') }}/images/favicon2.ico">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('') }}/plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    {{ $head }}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        {{-- @include('layouts.navbar') --}}
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- @include('layouts.sidebar') --}}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ml-0">
            <!-- Content Header (Page header) -->
            {{-- <section class="content-header"> --}}
            {{-- <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                {{ $breadcrumb }}
                            </ol>
                        </div>
                    </div>
                </div> --}}
            <!-- /.container-fluid -->
            {{-- </section> --}}

            <!-- Main content -->
            <section class="content" {{-- style="background-color: #b0d7ff;" --}}>
                {{-- <div class="container-fluid"> --}}
                {{ $slot }}
                {{-- </div> --}}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        {{-- @include('layouts.footer') --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    {{-- <script src="{{ url('') }}/plugins/jquery/jquery.min.js"></script> --}}
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ url('') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <!-- AdminLTE App -->
    <script nonce="{{ Vite::cspNonce() }}">
    document.addEventListener('DOMContentLoaded', function(e) {
        $(document).ready(function() {
            $('.main-footer').css('margin-left', 0);
        })
    })
    </script>
    {{ $script }}
</body>

</html>
