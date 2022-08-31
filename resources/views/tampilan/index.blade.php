@extends('layouts.app1')

@section('content')
<style>
    /* .img-ku{
    position: absolute;
    top: 0;
    width: 70%;
    z-index: -1; */

    .btn {
  /* border: 2px solid black; */
  /* background-color: royalblue; */
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
}
</style>
    <div class="page-heading" style="text-color : white">
       <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="150" >
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-16 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        {{-- <div class="stats-icon blue">
                                            <dt class="the-icon"><span class="fa-fw select-all fas"></span></dt>
                                        </div> --}}
                                        <div class="btn btn-primary float-right">
                                        <?php
                                           use App\pengguna;
                                           use Illuminate\Support\Facades\Auth;

                                        $log = Auth::user()->email;
                                        $us = (pengguna::where('email', $log)->first());

                                        ?>
                                            {{-- <h6 class="the-icon">Rp {{ $total_nominal }}</h6> --}}
                                            {{-- <h6 class="text-muted font-semibold"><span class="fa-fw select-all fas"></span>Saldo</h6> --}}
                                            <dt class="the-icon">Rp {{ $us->saldo }}</dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">

                                        {{-- <div class="btn btn-primary float-right">
                                            <h6 class="the-icon"> Rp {{ $total_nominal }}</h6>
                                            <dt class="the-icon"><span class="fa-fw select-all fas"></span> Saldo</dt>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        {{-- <div class="stats-icon purple">
                                            <dt class="the-icon"><span class="fa fa-qrcode"></span></dt>
                                        </div> --}}

                                        <div class="btn btn-primary float-right">
                                            <dt class="the-icon"><span class="fa fa-qrcode"></span> Pindai</dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold"></h6>
                                        {{-- <button> <a href="{{ url('qcode') }}" class='sidebar-link'>c</button> --}}
                                        {{-- <h6 class="font-extrabold mb-0"></h6> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="btn btn-primary float-right">
                                            <dt class="the-icon">Rp<span class="fa fa-paper-plane"></span> Kirim</dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold"></h6>
                                        <h6 class="font-extrabold mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="btn btn-primary float-right">
                                            <dt class="the-icon"><span class="fa fa-share"></span>Minta<a href="{{ url('artikel') }} "></dt>
                                        </div>
                                        {{-- <div class="stats-icon red">
                                            <dt class="the-icon"><span class="fa fa-file"></span></dt>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold"></h6>
                                        {{-- <h6 class="font-extrabold mb-0"></h6> --}}
                                        {{-- <button> <a href="{{ url('artikel') }}" class='sidebar-link'>Lihat</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="template/image/art.png" width="100%" height="300" alt="artikel" />
                <button><a href="https://www.qoala.app/id/blog/bisnis/apa-itu-aplikasi-dana">Baca Selengkapnya</a></button>
                {{-- <div class="row">
                     <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>

                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">

                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">America</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div> --}}


            </section>

    </div>

    {{-- <svg class="svg-inline--fa fa-long-arrow-alt-left fa-w-14 fa-fw select-all" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg> --}}


@stop
