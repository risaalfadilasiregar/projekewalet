@extends('layouts.app1')
 @include('sweetalert::alert')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="30%">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">DATA SALDO
                            <a href="{{ route('topup.create') }}" class="btn btn-primary float-right"> Isi Saldo</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>

                                        <th>Email </th>
                                        <th>Nominal</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Melalui</th>
                                        <th>Status</th>
                                        <th class="text-center">
                                            Aksi
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($topup as $key)
                                    @if ($key->pengguna->email == $email2)


                                            <tr>

                                                <td>{{ $key->pengguna->email }}</td>
                                                <td>{{ $key->nominal }}</td>
                                                <td>{{ $key->tgl_transaksi }}</td>
                                                <td>{{ $key->melalui }}</td>
                                                <td>{{ $key->status ? 'Berhasil' : 'diproses' }}</td>

                                                <td class="d-flex justify-content-around">
                                                    <form action="{{ route('topup.destroy', $key->id) }}" method="post" onsubmit="return confirm('yakin hapus data?') ">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit"
                                                            class="btn btn-danger pull-right mr-3">Hapus</button>
                                                    </form>
                                                </td>


                                            </td>
                                            </tr>
                                        @endif
                                    @endforeach


                            </table>
                            </tbody>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   
@stop
