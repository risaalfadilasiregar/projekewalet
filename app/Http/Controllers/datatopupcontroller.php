<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topup;
use App\pengguna;
use Illuminate\Support\Facades\Auth;

class datatopupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatopup=topup::all();
        return view('datatopup.index',compact('datatopup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $datatopup=topup::find($id)->with('pengguna')->first();
        $datatopup = topup::find($id);
        return view('datatopup.edit',compact('datatopup','id'));
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
        
        $pengguna1 = pengguna::find($request->id2);
        $saldolama = $pengguna1->saldo;
        $saldobaru = $saldolama + $request->nominal;
        
        $pengguna1->saldo = $saldobaru;
        $pengguna1->save();

        $topup=topup::find($id);

        $topup->email=isset($request->email)?$request->email:$topup->email;
        $topup->nominal=isset($request->nominal)?$request->nominal:$topup->nominal;
        $topup->tgl_transaksi=isset($request->tgl_transaksi)?$request->tgl_transaksi:$topup->tgl_transaksi;
        $topup->melalui=isset($request->melalui)?$request->melalui:$topup->melalui;
        $topup->status=$request->status;
        // dd($request->status);
        $topup->update();


        return redirect('/datatopup');
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


        return redirect('/datatopup')->with('succes', 'Berhasil Dihapus!');
    }
}
