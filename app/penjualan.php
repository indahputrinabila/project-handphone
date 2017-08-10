<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
   protected $table = "penjualans";
    protected $fillable = ['barang_id','nama_barang','satuan','jumlah_beli'];
    protected $visible = ['barang_id','nama_barang','satuan','jumlah_beli'];
    public $timestamps = true;

    public function barang()

    {
    	return $this->Belongsto('App\barang','barang_id');
    }
}
