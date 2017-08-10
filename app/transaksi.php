<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
  protected $table = "transaksis";
    protected $fillable = ['pembeli_id','tanggal'];
    protected $visible = ['pembeli_id','tanggal'];
    public $timestamps = true;

    public function pembeli()

    {
    	return $this->Belongsto('App\pembeli','pembeli_id');
    }
}
