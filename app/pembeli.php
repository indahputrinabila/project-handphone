<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    
   protected $table = "pembelis";
    protected $fillable = ['nama_pembeli','alamat'];
    protected $visible = ['nama_pembeli','alamat'];
    public $timestamps = true;

    public function transaksis()

    {
    	return $this->hasMany('App\transaksi','pembeli_id');
    }
}
