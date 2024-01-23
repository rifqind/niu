<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('') }}" class="brand-link">
        <img src="{{ url('') }}/images/favicon2.ico" alt="Nothing"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}"
                        class="nav-link {{ Request::is('/', 'dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('tabel/index', 'tabel/create', 'tabel/deletedList') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ Request::is('tabel/index', 'tabel/create', 'tabel/deletedList') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-building"></i>
                        <p>
                            Kelola Tabel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('tabel.index') }}"
                                class="nav-link {{ Request::is('tabel/index') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-list-ol"></i>
                                <p>
                                    Daftar Tabel
                                </p>
                            </a>
                        </li>
                        @if (auth()->user()->role === 'admin')
                            <li class="nav-item">
                                <a href="{{ route('tabel.create') }}"
                                    class="nav-link {{ Request::is('tabel/create') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-plus"></i>
                                    <p>
                                        Tambah Tabel
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tabel.deletedList') }}"
                                    class="nav-link {{ Request::is('tabel/deletedList') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-recycle"></i>
                                    <p>
                                        Recycle Bin
                                    </p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                @if (auth()->user()->role === 'admin')
                    <li class="nav-item">
                        <a href="{{ url('user/index') }}"
                            class="nav-link {{ Request::is('user/index', 'user/create') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('dinas*') ? 'menu-open' : '' }}">
                        <a href="" class="nav-link {{ Request::is('dinas*') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-building"></i>
                            <p>
                                Kelola Dinas
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dinas/index') }}"
                                    class="nav-link {{ Request::is('dinas/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-list-ol"></i>
                                    <p>
                                        Daftar Dinas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dinas/create') }}"
                                    class="nav-link {{ Request::is('dinas/create') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-plus"></i>
                                    <p>
                                        Tambah Dinas
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- @endif --}}
                    {{-- @if (auth()->user()->role === 'admin') --}}
                    {{-- <li class="nav-item {{ Request::is('tabel*') ? 'menu-open' : '' }}"> --}}
                    <li
                        class="nav-item {{ collect([
                            'tabel/master*',
                            'subject*',
                            'column-group*',
                            'column*',
                            'rows*',
                            'rowLabels*',
                            'periode*',
                            'periode-group*',
                        ])->contains(function ($pattern) {
                            return Str::is($pattern, request()->path());
                        })
                            ? 'menu-open'
                            : '' }}
                    ">
                        <a href=""
                            class="nav-link {{ collect([
                                'tabel/master*',
                                'subject*',
                                'column-group*',
                                'column*',
                                'rows*',
                                'rowLabels*',
                                'periode*',
                                'periode-group*',
                            ])->contains(function ($pattern) {
                                return Str::is($pattern, request()->path());
                            })
                                ? 'active'
                                : '' }}">
                            <i class="nav-icon fa-solid fa-building"></i>
                            <p>
                                Kelola Master
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('tabel.master') }}"
                                    class="nav-link {{ Request::is('tabel/master') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Tabel
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('subject/index') }}"
                                    class="nav-link {{ Request::is('subject/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-tags"></i>
                                    <p> Subjek</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('column-group/index') }}"
                                    class="nav-link {{ Request::is('column-group/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fas fa-bars"></i>
                                    <p> Kelompok Kolom</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('column/index') }}"
                                    class="nav-link {{ Request::is('column/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fas fa-bars"></i>
                                    <p> Kolom</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('rowLabels/index') }}"
                                    class="nav-link {{ Request::is('rowLabels/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fas fa-th-list"></i>
                                    <p> Kelompok Baris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('rows/index') }}"
                                    class="nav-link {{ Request::is('rows/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fas fa-th-list"></i>
                                    <p> Baris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('periode-group/index') }}"
                                    class="nav-link {{ Request::is('periode-group/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid far fa-calendar-alt"></i>
                                    <p> Kelompok Periode</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('periode/index') }}"
                                    class="nav-link {{ Request::is('periode/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid far fa-calendar-alt"></i>
                                    <p> Periode</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('users.edit') }}"
                        class="nav-link {{ Request::is('user/edit') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Edit Profile
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
