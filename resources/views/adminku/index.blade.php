@extends('layouts1.app1')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
            <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="30%">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">DATA ADMIN
                            <a href="{{ route('adm.create') }}" class="btn btn-primary float-right"> Tambah Data</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Email </th>
                                        <th>Nama </th>
                                        <th>Notel</th>
                                        <th>Alamat</th>
                                        <th class="text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($adm as $key)
                                      {{-- @if ($key->pengguna->email == $email2) --}}
                                        <tr>
                                            <td>{{ $key->email}}</td>
                                            <td>{{ $key->nama_admin}}</td>
                                            <td>{{ $key->notel}}</td>
                                            <td>{{ $key->alamat}}</td>


                                            <td class="d-flex justify-content-around">
                                                <a class="btn btn-primary pull-right" href="{{route('adm.edit',$key->id)}}">Edit</a>
                                                <form action="{{route('adm.destroy',$key->id)}}" method="post" onsubmit="return confirm('yakin hapus data?') ">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger pull-right mr-3">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                     {{-- @endif --}}
                                    @endforeach

                            </table>

                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
