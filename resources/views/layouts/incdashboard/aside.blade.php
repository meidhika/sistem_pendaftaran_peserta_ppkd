<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('img/PPKDJP.png') }}" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    @if (auth()->check())
                        <!-- Pastikan pengguna terautentikasi -->
                        <span class="font-weight-bold mb-2">{{ auth()->user()->nama_lengkap ?? '' }}</span>
                        <span class="text-secondary text-small">{{ auth()->user()->level->nama_level ?? '' }}</span>
                    @else
                        <span>Welcome, Guest</span>
                    @endif



                </div>
            </a>
        </li>
        {{-- Menu Dashboard --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        {{-- Menu Administrator --}}
        @if (auth()->user()->level->id == 1)
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Master Data</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-database menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('levels.index') }}">Levels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jurusan.index') }}">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gelombang.index') }}">Gelombang</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        @if (auth()->user()->level->id !== 1 && auth()->user()->level->id !== 3 && auth()->user()->level->id == 2)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('gelombang.index') }}">
                    <span class="menu-title">Gelombang</span>
                    <i class="mdi mdi-animation-outline menu-icon"></i>
                </a>
            </li>
        @endif


        {{-- PIC dan Admin Aplikasi --}}
        @if (auth()->user()->level->id !== 3)
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#peserta" aria-expanded="false"
                    aria-controls="peserta">
                    <span class="menu-title">Data Peserta</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-database menu-icon"></i>
                </a>
                <div class="collapse" id="peserta">
                    <ul class="nav flex-column sub-menu">
                        @if (auth()->user()->level->id == 1 || auth()->user()->level->id == 2)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.index') }}">Data Semua Pendaftar</a>
                            </li>
                        @endif
                        @if (auth()->user()->level->id !== 2 && auth()->user()->level->id !== 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.filter') }}">Pendaftar /Jurusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.wawancara') }}">Peserta Wawancara</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.lolos') }}">Peserta Lolos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.gagal') }}">Peserta Tidak Lolos</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif

        {{-- Menu Report Untuk Pimipinan --}}
        @if (auth()->user()->level->id == 1 || auth()->user()->level->id == 3)
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                    aria-controls="icons">
                    <span class="menu-title">Report</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.index') }}">Report Statistik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reports.create') }}">Report Peserta</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif
    </ul>
</nav>
