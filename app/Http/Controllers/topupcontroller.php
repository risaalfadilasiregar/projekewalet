<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topup;
use App\pengguna;
use App\User;
use Illuminate\Support\Facades\Auth;

class topupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email2 = Auth::user()->email;
        // ddd($email2);
        $topup=topup::all();
        // $pengguna2 = User::all();
        return view('topup.index',compact('topup','email2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email2 = Auth::user()->email;
        // $topup=topup::all();
        $pengguna = pengguna::all();
        $pengguna2 = User::all();


        return view('topup.create',compact('pengguna','pengguna2','email2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        topup::create([
            'email'=>$request->email,
            'nominal'=>$request->nominal,
            'tgl_transaksi'=>$request->tgl_transaksi,
            'melalui'=>$request->melalui,
            'status'=>$request->status


        ]);

        return redirect('/topup')->with('success', 'Permintaan anda sedang di proses!');
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
        $topup=topup::find($id);
        return view('topup.edit',compact('topup'));

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
        $topup=topup::find($id);

        // $topup->email=$request->nama;
        $topup->nominal=$request->nominal;
        // $topup->tgl_transaksi=$request->tgl_transaksi;
        // $topup->melalui=$request->melalui;
        // $topup->status=$request->status;
        $topup->save();


        return redirect('/topup');
        // return view('topup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topup=topup::find($id);
        $topup->delete();


        return redirect('/topup')->with('succes', 'Berhasil Dihapus!');
    }
}
