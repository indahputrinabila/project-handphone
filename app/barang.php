<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
   protected $table = "barangs";
    protected $fillable = ['nama_barang','satuan','jumlah_beli','harga_beli','harga_jual'];
    protected $visible = ['nama_barang','satuan','jumlah_beli','harga_beli','harga_jual'];
    public $timestamps = true;

    public function penjualans()

    {
    	return $this->hasMany('App\penjualan','barang_id');
    }
}
