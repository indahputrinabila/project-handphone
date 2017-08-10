<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\pembeli;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $transaksi = transaksi::all();
        return view('transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
        $pembeli = pembeli::all();
        $transaksi = transaksi::all();
        return view('transaksi.create',compact('transaksi','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $transaksi = new transaksi;
        $transaksi->pembeli_id=$request->a;
        $transaksi->tanggal=$request->b;
        $transaksi->save();
        return redirect('transaksi'); 
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
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi.show',compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pembeli = pembeli::all();
        $transaksi = transaksi::findOrFail($id);
        return view('transaksi.edit',compact('pembeli','transaksi'));
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
        $transaksi = transaksi::findOrFail($id);
        $transaksi->pembeli_id=$request->a;
        $transaksi->tanggal=$request->b;
        $transaksi->save();
        return redirect('transaksi'); 
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect('transaksi');
    }
}
