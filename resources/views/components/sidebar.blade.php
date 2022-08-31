<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        {{-- <a href="index.html"><img src="{{asset('latihan_quiz1/public/template/dist/assets/images/logo/logo2.png')}}" alt="Logo" srcset=""></a> --}}
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">USER</li>

                    <li class="sidebar-item active ">
                        <a href="{{ url('tampilan') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>BERANDA</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('topup') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-plus circle "></span></dt>
                            <span>ISI SALDO</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('transfer') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-paper-plane"></span></dt>
                            <span>KIRIM</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('pengguna') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-user-edit"></span></dt>
                            <span>PROFIL</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a class="btn btn-danger pull-right mr-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" onsubmit="return confirm('Anda yakin ingin keluar?')">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
