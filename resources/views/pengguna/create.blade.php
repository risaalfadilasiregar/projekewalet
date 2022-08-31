@extends('layouts.app')

@section('content')

<style>
    .img-ku{
    position: absolute;
    top: 0;
    width: 100%;
    z-index: -1;
}
</style>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">TAMBAH DATA pengguna</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pengguna.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Notel</label>
                                            <input type="text" class="form-control" name="notel" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="text" class="form-control" name="email" id="">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="text" class="form-control" name="password" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Pin</label>
                                            <input type="text" class="form-control" name="pin" id="">
                                        </div>
                                    </div>
                                </div> --}}
                                 {{-- <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Saldo</label>
                                            <input type="number" class="form-control" name="saldo" id="">
                                        </div>
                                    </div>
                                </div> --}}

                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{url('pengguna')}}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}">
@stop
