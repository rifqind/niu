<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <link rel="icon" href="{{ url('') }}/images/favicon2.ico">

    <!-- Google Font: Source Sans Pro -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/bf51cd7a13.js" crossorigin="anonymous"></script>

    {{ $head }}
    @vite(['resources/css/app.css',
    'resources/js/app.js'
    ])
</head>

<body class="hold-transition">
    <!-- Site wrapper -->
    <div class="wrapper">
        <div class="text-center overlay d-none" id="spinner-border">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a80606">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-3">
                        <a class="nav-link text-white text-bold" href="{{ route('home') }}">Beranda</a>
                    </li>
                    @guest
                        <li class="nav-item active mx-3">
                            <a class="nav-link text-white text-bold" href="{{ route('users.login') }}">Masuk</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item active mx-3">
                            <a class="nav-link text-white text-bold" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper ml-0">
            <!-- Main content -->
            <section class="content">
                {{ $slot }}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer ml-0">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> Alpha
            </div>
            <div class="text-center">
                <strong>Copyright &copy; 2023 <a href="https://sulut.bps.go.id">BPS Provinsi Sulawesi Utara</a></strong>
            </div>
        </footer>

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
    {{-- <script src="{{ url('') }}/dist/js/adminlte.min.js"></script> --}}
    {{-- <script src="{{ url('') }}/plugins/select2/js/select2.full.min.js"></script> --}}
    {{-- <script src="{{ url('') }}/dist/js/adminlte.min.js"></script> --}}
    {{-- <script src="{{ url('') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <!-- Bootstrap JS -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <script></script>
    {{ $script }}
</body>

</html>
