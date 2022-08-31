<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transfer;
use App\kirim;
use App\pengguna;

class datatransfercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatransfer=kirim::all();
        return view('datatransfer.index',compact('datatransfer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $datatransfer=kirim::find($id);
        return view('datatransfer.edit',compact('datatransfer','id'));
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
        // ddd($request->id2);
        $saldolama = $pengguna1->saldo;
        $saldobaru = $saldolama - $request->nominal;
        $pengguna1->saldo = $saldobaru;
        $pengguna1->save();
        

        // if($saldolama<$request->nominal){
        //     return redirect('/datatransfer')->with('warning', 'Saldo anda kurang!');
        
        
        // }  
      
    
        $transfer=kirim::find($id);

        $transfer->email=isset($request->email)?$request->email:$transfer->email;
        $transfer->email_penerima=isset($request->email_penerima)?$request->email_penerima:$transfer->email_penerima;
        $transfer->nominal=isset($request->nominal)?$request->nominal:$transfer->nominal;
        $transfer->ket=isset($request->ket)?$request->ket:$transfer->ket;
        $transfer->tgl_transaksi=isset($request->tgl_transaksi)?$request->tgl_transaksi:$transfer->tgl_transaksi;

        $transfer->status=$request->status;
        $transfer->update();


        return redirect('/transfer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transfer=kirim::find($id);
        $transfer->delete();


        return redirect('/datatransfer')->with('succes', 'Berhasil Dihapus!');
    }
}
