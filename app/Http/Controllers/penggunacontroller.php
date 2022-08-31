<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;
use Illuminate\Support\Facades\Auth;

class penggunacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;
        $pengguna=pengguna::all();

        return view('pengguna.index',compact('pengguna','email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna=pengguna::all();

        return view('pengguna.create',compact('pengguna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = 0;
        pengguna::create([
            'nama'=>$request->nama,
            'notel'=>$request->notel,
            'email'=>$request->email,
            'password'=>$request->password,
            'pin'=>$request->pin,
            'saldo'=> $a


        ]);

        return redirect('/pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna=pengguna::find($id);
        return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengguna=pengguna::find($id);

        $pengguna->nama=$request->nama;
        $pengguna->notel=$request->notel;
        $pengguna->email=$request->email;
        // $pengguna->password=$request->password;
        // $pengguna->pin=$request->pin;
        $pengguna->save();


        return redirect('/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna=pengguna::find($id);
        $pengguna->delete();
        // karyawan::where('pengguna',$id)->delete();

        return redirect('/pengguna');
    }
}
