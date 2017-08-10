<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::all();
        return view('pembeli.index',compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pembeli = new pembeli;
        $pembeli->nama_pembeli=$request->a;
        $pembeli->alamat=$request->b;
        $pembeli->save();
        return redirect('pembeli');
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
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.show',compact('pembeli'));
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
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.edit',compact('pembeli'));
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
        //
        $pembeli=pembeli::findOrFail($id);
        $pembeli->nama_pembeli=$request->a;
        $pembeli->alamat=$request->b;
        $pembeli->save();
        return redirect('pembeli');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
