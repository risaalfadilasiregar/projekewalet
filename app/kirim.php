<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kirim extends Model
{
    protected $table = 'kirims';
    protected $fillable = ['email','email_penerima','nominal','ket','tgl_transaksi'];


    public function pengguna(){
        return $this->belongsTo('App\pengguna','email','id');
    }


    public static function getTotalNominal(){
        // return kirim::all()->sum('nominal');
        return kirim::where('status',1)->sum('nominal');
    }
}
