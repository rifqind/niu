<x-niu-layout>
    <x-slot name="title">
        Index
    </x-slot>
    <x-slot name="head">
        <!-- Additional resources here -->
        <meta name="csrf-token" content="content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('') }}/plugins/select2/css/select2.min.css">
        <script></script>
        <style type="text/css">
        </style>
        @vite(['resources/css/app.css'])
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">Daftar Metadata Variabel</li>
    </x-slot>
    <div class="container-fluid">
        {{-- <hr> --}}
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success temporary-message">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger temporary-message">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="row mb-2 justify-content-between">
            <div class="col-9">
                <h4>Tabel : {{ $judul[0] }} : <span>{{ $status_desc [0]}}</span></h4>
            </div>
            <div class="col-3 text-right">
                <div class="mr-1">
                    <a class="btn bg-info-fordone" data-toggle="modal" data-target="#createModal"><i
                            class="fa-solid fa-plus"></i>
                        Tambah Metadata Variabel Baru</a>
                </div>
            </div>
        </div>
        <div id="list-tabels">
            @include('metadata_variabel.list-tabel')
        </div>
        @include('metadata_variabel.create-modal')
    </div>


    <x-slot name="script">
        <!-- Additional JS resources -->
        <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="{{ asset('js/public.js') }}"></script>
        {{-- <script src="{{ asset('js/tabel.js') }}"></script> --}}
        <script>
            let satuans = {{ Js::from($satuan[0]) }}
            const id = {{ Js::from($id) }}
            const roles = {{ Js::from($this_role) }}
            let status = {{ Js::from($status_metavars) }}
            if (status.length == 0) {
                status = 0
            } else {
                status = status[0]
            }
            document.addEventListener('DOMContentLoaded', function() {
                $('#satuan').val(satuans);
                $('#id_tabel').val(id);
                if (roles != "produsen") {
                    $("#user-need-prompt").addClass("d-none");
                    if (status == "3") {
                        $("#admin-need-prompt").removeClass("d-none");
                    }
                    if (status == "5") {
                        $("#final-metavar").addClass("d-none");
                    }
                } else {
                    if (status == "3" | status == "5") {
                        $("#user-need-prompt").addClass("d-none");
                    } else {
                        $("#user-need-prompt").removeClass("d-none");
                    }
                }
                $(document).on("click", ".final-reject", function(e) {
                    e.preventDefault();
                    const button = this;
                    const decisions = this.id;
                    $.ajax({
                        url: "{{ route('metavar.adminHandleMetavar') }}",
                        type: "GET",
                        data: {
                            id: id,
                            decisions: decisions,
                        },
                        success: function(data) {
                            // console.log(data);
                            window.location.href = "{{ route('metavar.index') }}"
                        },
                        error: function(jqxhr, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    });
                })
                $("#form-store").on('submit', function(e) {
                    e.preventDefault();
                    let data = $(this).serialize();
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        data: data,
                        success: function(data) {
                            if (data.hasOwnProperty('error')) {
                                alert('Server error:', response.error);
                                alert('Exception message:', response.message);
                            } else {
                                $("#createModal").modal('hide');
                                $("#list-tabels").html(data);
                            }
                        },
                        error: function(data) {
                            alert(data);
                        }
                    })
                })
                $(document)
                    // (".show-edit-button")
                    .on("click", ".show-edit-button", function(e) {
                        // Find the closest tr and then find the .this-id element within it
                        var thisId = $(this).closest('tr').find('.this-id').attr('id');
                        let shows;
                        if ($(this).hasClass("show-button")) {
                            shows = "1";
                        } else {
                            shows = "0";
                        }
                        $.ajax({
                            url: "{{ route('metavar.show') }}",
                            type: "GET",
                            data: {
                                id: thisId
                            },
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    // Check if there is an element with the matching id
                                    var element = $("#show-" + key);
                                    $("#show-satuan").val(satuans);
                                    if (element.length > 0) {
                                        // Set the value of the form element
                                        element.val(value);
                                        if (shows == "1") {
                                            element.prop('disabled', true);
                                            element.css('background-color', 'white');
                                        } else {
                                            element.prop('disabled', false);
                                        }
                                    }
                                });
                                if (shows == "1") {
                                    $("#updateMetavar").addClass('d-none');
                                } else {
                                    $("#updateMetavar").removeClass('d-none');
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert(errorThrown);
                            }
                        });
                    })
                $("#form-update").on('submit', function(e) {
                    e.preventDefault();
                    let data = $(this).serialize();
                    // console.log(data);
                    $.ajax({
                        url: $(this).attr('action'),
                        type: "POST",
                        data: data,
                        success: function(data) {
                            // console.log(data);
                            $("#updateModal").modal('hide');
                            $("#list-tabels").html(data);
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                })
                $(document).on("click", ".delete-button", function(e) {
                    var thisId = $(this).closest('tr').find('.this-id').attr('id');
                    $("#delete-id").val(thisId);
                    var thisLabel = $(this).closest('tr').find('.this-label').html();
                    $("#judul-deleted").html(thisLabel);
                })
                $("#deleteMetavar").on("click", function(e) {
                    let thisId = $("#delete-id").val();
                    $.ajax({
                        url: "{{ route('metavar.destroy') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: thisId,
                        },
                        success: function(data) {
                            // console.log(data);
                            $("#deleteModal").modal('hide');
                            $("#list-tabels").html(data);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(errorThrown);
                        }
                    })
                })
            })
        </script>
    </x-slot>
</x-niu-layout>
