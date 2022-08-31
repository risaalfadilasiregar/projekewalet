<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\User;
use Illuminate\Support\Facades\Auth;

class admin1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email2 = Auth::user()->email;
        $adm = admin :: all();
        return view('adminku.index',compact('adm','email2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email2 = Auth::user()->email;
        $adm = admin :: all();
        return view('adminku.create',compact('adm','email2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        admin::create([
            'email'=>$request->email,
            'nama_admin'=>$request->nama_admin,
            'notel'=>$request->notel,
            'alamat'=>$request->alamat


        ]);

        return redirect('/adm');
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
        $adm=admin::find($id);
        return view('adminku.edit',compact('adm'));
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
        $adm=admin::find($id);

        $adm->email=$request->email;
        $adm->nama_admin=$request->nama_admin;
        $adm->notel=$request->notel;
        $adm->alamat=$request->alamat;
        $adm->save();


        return redirect('/adm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adm=admin::find($id);
        $adm->delete();

        return redirect('/adm');
    }
}
