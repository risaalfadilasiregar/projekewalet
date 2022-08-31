@extends('layouts.app')

@section('content')

    <style>
        .img-ku {
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
                            <h4 class="card-title">Kirim</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('transfer.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email Pengirim</label>
                                            <select name="email">
                                                @foreach ($pengguna as $data)
                                                    @if ($data->email == $email2)
                                                        <option value="{{ $data->id }}">{{ $data->email }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email Penerima</label>
                                            <input type="text" class="form-control" name="email_penerima" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nominal</label>
                                            <select name="nominal" id="">
                                                <option value="20000">20.000</option>
                                                <option value="30000">30.000</option>
                                                <option value="50000">50.000</option>
                                                <option value="70000">70.000</option>
                                                <option value="100000">100.000</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Ket</label>
                                            <input type="text" class="form-control" name="ket" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tgl Transaksi</label>
                                            <input type="date" class="form-control" name="tgl_transaksi" id="">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('transfer') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
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
