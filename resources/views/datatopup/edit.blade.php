@extends('layouts1.app1')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
             <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="30%">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">ISI SALDO </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('datatopup.update',$id) }}">
                            @csrf
                            @method('put')
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Email </th>
                                        <th>Nominal</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Melalui</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>

                                        <tr>
                                            <td>{{ $datatopup->pengguna->email}}</td>
                                            <td>{{ $datatopup->nominal }}</td>
                                            <td>{{ $datatopup->tgl_transaksi }}</td>
                                            <td>{{ $datatopup->melalui }}</td>
                                            <input type = "hidden" value="{{ $datatopup->nominal }}" name="nominal">
                                            <input type = "hidden" value="{{ $datatopup->email }}" name="id2">
                                            <td>
                                                <select name="status" id="">
                                                    <option value="0" {{ $datatopup->status == 0 ?  'selected':''}}>Diproses</option>
                                                    <option value="1" {{ $datatopup->status == 1 ? 'selected':''}}>Berhasil</option>
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
