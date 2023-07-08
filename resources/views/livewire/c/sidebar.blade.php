<div>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link @if(Request::is('/'))
                    active
                    @endif" href="{{ url('/', []) }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link @if(Request::is('data-siswa'))
                    active
                    @endif" href="{{ url('data-siswa') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Data siswa aktif
                    </a>
                    <a class="nav-link @if(Request::is('data-siswa-alumni'))
                    active
                    @endif" href="{{ url('data-siswa-alumni') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Data siswa alumni
                    </a>
                    <a class="nav-link @if(Request::is('data-siswa-mutasi'))
                    active
                    @endif" href="{{ url('data-siswa-mutasi') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Data siswa mutasi
                    </a>

                    <div class="sb-sidenav-menu-heading">Addons</div>
                   @if(auth()->user()->role == 'admin')
                   <a class="nav-link @if(Request::is('kelola-akun'))
                   active
                   @endif" href="{{ url('kelola-akun') }}">
                       <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                       Kelola akun
                   </a>
                   @endif
                    <a  wire:click='logout' class="nav-link" href="javascipt:void()">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ auth()->user()->role }}
            </div>
        </nav>
    </div>
</div>
