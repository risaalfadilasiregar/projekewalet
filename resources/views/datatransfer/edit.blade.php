@extends('layouts1.app1')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">DATA TRANSFER </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('datatransfer.update',$id) }}">
                            @csrf
                            @method('put')
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Email Pengirim </th>
                                        <th>Email Penerima</th>
                                        <th>Nominal</th>
                                        <th>Ket</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td>{{ $datatransfer->pengguna->email}}</td>
                                            <td>{{ $datatransfer->email_penerima }}</td>
                                            <td>{{ $datatransfer->nominal }}</td>
                                            <td>{{ $datatransfer->ket }}</td>
                                            <td>{{ $datatransfer->tgl_transaksi }}</td>
                                            <input type = "hidden" value="{{ $datatransfer->nominal }}" name="nominal">
                                            <input type = "hidden" value="{{ $datatransfer->email }}" name="id2">

                                            <td>
                                                <select name="status" id="">
                                                    <option value="0" {{ $datatransfer->status == 0 ?  'selected':''}}>Diproses</option>
                                                    <option value="1" {{ $datatransfer->status == 1 ? 'selected':''}}>Berhasil</option>
                                                </select>
                                            </td>
                                        </tr>

                            </table>
                            </tbody>

                            <input type="submit" name=""  value="simpan" id="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@stop
