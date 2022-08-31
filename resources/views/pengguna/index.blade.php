@extends('layouts.app1')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
            <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}" styles : width="100%"
                    height="150" >
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">PROFIL
                            {{-- <a href="{{ route('pengguna.create') }}" class="btn btn-primary float-right"> Tambah Data</a> --}}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Nama </th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        {{-- <th>Password</th>
                                        <th>Pin</th> --}}
                                        <th>Saldo</th>

                                        <th class="text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $key)
                                        <tr>
                                       
                                            @if ($key->email == $email)
                                                <td>{{ $key->nama }}</td>
                                                <td>{{ $key->notel }}</td>
                                                <td>{{ $key->email }}</td>
                                                {{-- <td>{{ $key->password }}</td>
                                                <td>{{ $key->pin }}</td> --}}
                                                <td>{{ $key->saldo}}</td>
                                           
                                            <td class="d-flex justify-content-around">
                                                <a class="btn btn-primary pull-right"
                                                    href="{{ route('pengguna.edit', $key->id) }}">Edit</a>
                                                <form action="{{ route('pengguna.destroy', $key->id) }}" method="post" onsubmit="return confirm('yakin hapus data?') ">
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


    {{-- <div class="col-12 col-xl-8">
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
    </div> --}}
    </div>
@stop
