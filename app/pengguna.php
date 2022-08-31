<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'penggunas';
    protected $fillable = ['nama','notel','email','password','pin','saldo'];


    
}
