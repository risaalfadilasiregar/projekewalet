<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datapengguna extends Model
{
    protected $table = 'datapenggunas';
    protected $fillable = ['id_pengguna'];

    public function penggunaku(){
        return $this->belongsTo('App\pengguna','id_pengguna','id');
    }

    
}
