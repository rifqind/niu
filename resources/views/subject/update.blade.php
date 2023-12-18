<x-niu-layout>
    <x-slot name="title">
        create
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
        <li class="breadcrumb-item active">
            Update Subject
        </li>
    </x-slot>
    <div class="container-fluid">
        <div class="h4">
            Subject
        </div>
        <div class="card">
            <div class="card-body">
                <form id = "SubjectForm" method="POST" class="form-horizontal" action="{{ route('subject.update') }}">
                    @csrf
                    @method('PUT') <!-- Add this line to override the form method -->

                    <div class="form-group">
                        <label for="label">Nama Subject</label>
                        <input class="form-control mb-3" name="label" value="{{ $subject->label }}"
                            placeholder="Isi Nama Subject" required>
                        <input class="form-control mb-3 d-none" name="id"
                            value="{{ Illuminate\Support\Facades\Crypt::encrypt($subject->id) }}" readonly>

                    </div>
                    <div class="ml-auto">
                        <button type="submit" id="subject-save" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <x-slot name="script">

    </x-slot>
</x-niu-layout>
