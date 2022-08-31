<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    protected $table = 'topups';
    protected $fillable = ['email','nominal','tgl_transaksi','melalui'];

    public function pengguna(){
        return $this->belongsTo('App\pengguna','email','id');
    }

    public static function getTotalNominal(){
        // return topup::all()->sum('nominal');
        return topup::where('status',1)->sum('nominal');


    }
}
