@extends('layouts1.app1')

@section('content')
{{-- <style>
    .img-ku{
    position: absolute;
    top: 0;
    width: 50%;
    z-index: -1;
    }
</style> --}}
    <div class="page-heading">
        <h3>ADMIN</h3>
     <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="160" >
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
                                        <div class="stats-icon blue">
                                            <dt class="the-icon"><span class="fa-fw select-all fas"></span></dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Saldo</h6>
                                        {{-- <h6 class="font-extrabold mb-0"> Rp {{ $total_nominal }}</h6> --}}
                                        <h6 class="font-extrabold mb-0">Rp</h6>
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
                                        <div class="stats-icon purple">
                                            <dt class="the-icon"><span class="fa fa-qrcode"></span></dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Scan</h6>
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
                                        <div class="stats-icon green">
                                            <i class="fa fa-paper-plane"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Kirim</h6>
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
                                        <div class="stats-icon red">
                                            <dt class="the-icon"><span class="fa fa-share"></span></dt>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Minta</h6>
                                        <h6 class="font-extrabold mb-0"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <img src="template/image/art.png" width="100%" height="300" alt="artikel" />
                <button><a href="https://www.qoala.app/id/blog/bisnis/apa-itu-aplikasi-dana">Baca Selengkapnya</a></button>
        </section>
    </div>

@stop
