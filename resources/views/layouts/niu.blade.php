<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="csp-nonce" content="{{ csp_nonce() }}">
    <title>{{ config('app.name', 'Laravel') }} | {{ $title }}</title>
    <link rel="icon" href="{{ url('') }}/images/favicon2.ico">

    <!-- Google Font: Source Sans Pro -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- <script src="https://kit.fontawesome.com/bf51cd7a13.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/fontawesome.js') }}" nonce="{{ Vite::cspNonce() }}"></script>

    {{ $head }}
    @vite(['resources/css/app.css',
     'resources/js/app.js'
    ])
</head>

<body class="hold-transition layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <div class="text-center overlay d-none" id="spinner-border">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Navbar -->
        @include('layouts.modal')

        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                {{-- <div class="loader d-none">
                    <div class="spinner-grow text-success"></div>
                    <div class="spinner-grow text-success"></div>
                    <div class="spinner-grow text-success"></div>
                    <div class="spinner-grow text-success"></div>
                </div> --}}

                <div class="container-fluid">
                    {{ $slot }}
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <script nonce="{{ Vite::cspNonce() }}">
        document.addEventListener("DOMContentLoaded", function() {
            //Initialize Select2 Elements
            document.getElementById("logoutButton").addEventListener("click", function(e) {
                    console.log("logged out");
                    $.ajax({
                        url: $(this).attr("action"),
                        data: {_token: '{{ csrf_token() }}'},
                        type: "POST",
                        success: function(data) {
                            console.log("wasu");
                            window.location.href = "{{ route('/')}}";
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(errorThrown);
                        }
                    })
                })
        });
    </script>
    <script src="{{ asset('js/pagination.js') }}"></script>
    <script src="{{ asset('js/download.js') }}"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js" nonce="{{ Vite::cspNonce() }}"></script>
    {{-- <script src="{{ url('') }}/dist/js/adminlte.min.js"></script> --}}
    {{-- <script src="{{ url('') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <!-- Bootstrap JS -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    {{ $script }}
</body>

</html>
