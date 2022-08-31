<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kirim;
use App\topup;
use App\pengguna;
use Illuminate\Support\Facades\Auth;

class transfercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email2 = Auth::user()->email;
        $transfer=kirim::all();
        return view('transfer.index',compact('transfer','email2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $email2 = Auth::user()->email;
        $pengguna = pengguna::all();

        return view('transfer.create',compact('pengguna','email2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email2 = Auth::user()->email;
        $us = (pengguna::where('email', $email2)->first());
        $us1 = $us->saldo;
       
        
        if($us1<$request->nominal){
            alert("Saldo Anda Kurang!");
            return redirect('/transfer')->with('danger', 'Saldo Anda Kurang!');
        }else{
            kirim::create([
                'email'=>$request->email,
                'email_penerima'=>$request->email_penerima,
                'nominal'=>$request->nominal,
                'ket'=>$request->ket,
                'tgl_transaksi'=>$request->tgl_transaksi
    
            ]);
            return redirect('/transfer')->with('success', 'Permintaan anda sedang di proses!');   
        }

        

        // return redirect('/transfer');
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
        $tf=kirim::find($id);
        return view('transfer.edit',compact('tf'));
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
        $tf=kirim::find($id);

        $tf->email=$request->email;
        $tf->email_penerima=$request->email_penerima;
        $tf->nominal=$request->nominal;
        $tf->ket=$request->ket;
        $tf->tgl_transaksi=$request->tgl_transaksi;
        $tf->status=$request->status;
        $tf->save();


        return redirect('/tf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tf=kirim::find($id);
        $tf->delete();


        return redirect('/transfer')->with('succes', 'Berhasil Dihapus!');
    }
}
