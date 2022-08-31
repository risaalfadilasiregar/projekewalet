@extends('layouts.app1')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-16 col-lg-12">
            <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="30%">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">KIRIM
                            <a href="{{ route('transfer.create') }}" class="btn btn-primary float-right"> Tambah Data</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primay">
                                    <tr>
                                        <th>Email Pengirim </th>
                                        <th>Email Penerima</th>
                                        <th>Nominal</th>
                                        <th>Status</th>
                                        <th>Ket</th>
                                        <th>Tgl Transaksi</th>
                                        <th> Aksi </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transfer as $key)
                                     @if ($key->pengguna->email == $email2)
                                        <tr>
                                            <td>{{ $key->pengguna->email}}</td>
                                            <td>{{ $key->email_penerima}}</td>
                                            <td>{{ $key->nominal }}</td>
                                            <td>{{ $key->ket }}</td>
                                            <td>{{ $key->tgl_transaksi }}</td>
                                            <td>{{ $key->status ? 'Berhasil':'diproses'}}</td>
                                            

                                            <td class="d-flex justify-content-around">
                                                    <form action="{{ route('transfer.destroy', $key->id) }}" method="post"onsubmit="return confirm('yakin hapus data?') ">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit"
                                                            class="btn btn-danger pull-right mr-3">Hapus</button>
                                                    </form>
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
@include('sweetalert::alert')
@stop
