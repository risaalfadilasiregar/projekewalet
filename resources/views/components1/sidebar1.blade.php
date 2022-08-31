<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="{{url('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                        {{-- <a href="index.html"><img src="{{asset('latihan_quiz1/public/template/dist/assets/images/logo/logo2.png')}}" alt="Logo" srcset=""></a> --}}
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">ADMIN</li>

                    <li class="sidebar-item active ">
                        <a href="{{ url('admin') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('adm') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-user-edit"></span></dt>
                            <span>Data Admin</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('datapengguna') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-user-edit"></span></dt>
                            <span>Data Pengguna</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('datatopup') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-plus circle "></span></dt>
                            <span>Data TopUp</span>
                        </a>
                    </li>
                    <li class="sidebar-item active">
                        <a href="{{ url('datatransfer') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-paper-plane"></span></dt>
                            <span>Data Transfer</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-item active">
                        <a href="{{ route('fromemail.index') }}" class='sidebar-link'>
                            <dt class="the-icon"><span class="fa fa-paper-plane"></span></dt>
                            <span>Pesan</span>
                        </a>
                    </li> --}}


                    <li class="sidebar-item active">
                        <a class="btn btn-danger pull-right mr-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Anda yakin ingin keluar?')" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
