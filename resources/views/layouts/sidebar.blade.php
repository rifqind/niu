<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('') }}" class="brand-link">
        <img src="{{ url('') }}/dist/img/karlota-logo.png" alt="Karlota Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}"
                        class="nav-link {{ Request::is('/', 'dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (auth()->user()->role === 'admin')
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
                    <li class="nav-item">
                        <a href="{{ url('user/index') }}"
                            class="nav-link {{ Request::is('user/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                    {{-- @endif --}}
                    {{-- @if (auth()->user()->role === 'admin') --}}
                    <li class="nav-item {{ Request::is('tables*') ? 'menu-open' : '' }}">
                        <a href="" class="nav-link {{ Request::is('tables*') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-building"></i>
                            <p>
                                Kelola Tabel
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('tables/index') }}"
                                    class="nav-link {{ Request::is('tables/index') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-list-ol"></i>
                                    <p>
                                        Daftar Tabel
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('tables/create') }}"
                                    class="nav-link {{ Request::is('tables/create') ? 'active' : '' }}">
                                    <i class="nav-icon fa-solid fa-plus"></i>
                                    <p>
                                        Tambah Tabel
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('user/index') }}"
                            class="nav-link {{ Request::is('user/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('subject/index') }}"
                            class="nav-link {{ Request::is('subject/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-tags"></i>
                            <p>Kelola Subjek</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('column/index') }}"
                            class="nav-link {{ Request::is('column/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fas fa-bars"></i>
                            <p>Kelola Kolom</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('rows/index') }}"
                            class="nav-link {{ Request::is('rows/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fas fa-th-list"></i>
                            <p>Kelola Baris</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('periods/index') }}"
                            class="nav-link {{ Request::is('periods/index') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid far fa-calendar-alt"></i>
                            <p>Kelola Periode</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ url('fenomena/viewAll') }}"
                        class="nav-link {{ Request::is('fenomena/viewAll') ? 'active' : '' }}">
                        <i class="far fa-star nav-icon"></i>
                        <p>Lihat Fenomena</p>
                    </a>
                </li>
                @if (auth()->user()->satker_id == 1)
                    <li class="nav-item">
                        <a href="{{ url('fenomena/monitoring') }}"
                            class="nav-link {{ Request::is('fenomena/monitoring') ? 'active' : '' }}">
                            <i class="far fa-star-half nav-icon"></i>
                            <p>Monitoring Fenomena</p>
                        </a>
                    </li>
                @endif

                @can('admin')
                    <li class="nav-header">PENGATURAN</li>
                    <li class="nav-item">
                        <a href="{{ url('user') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Pengguna
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('period') }}" class="nav-link {{ Request::is('period*') ? 'active' : '' }}">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Jadwal
                            </p>
                        </a>
                    </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
