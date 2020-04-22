<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujian;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ujian::all();
        return view('Ujian.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

        $Ujian = new Ujian();
        $Ujian->nama_mk=$request->txtnamamk;
        $Ujian->dosen=$request->txtdosen;
        $Ujian->jumlah_soal=$request->txtjumlah;
        $Ujian->keterangan=$request->txtketerangan;
        $Ujian->save();
        
        return redirect()->route('ujian.create')->with('success', 'Ujian berhasil ditambahkan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ujian = Ujian::findOrFail($id);
        return view('Ujian.edit', compact('ujian'));
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
        $Ujian = Ujian::findOrFail($id);    
        $Ujian->nama_mk=$request->txtnamamk;
        $Ujian->dosen=$request->txtdosen;
        $Ujian->jumlah_soal=$request->txtjumlah;
        $Ujian->keterangan=$request->txtketerangan;

        $Ujian->save();

        return redirect()->route('ujian.index')->with('info','Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $ujian = Ujian::find($id);
    $ujian->delete(); 
    
    return redirect()->route('ujian.index');
    }
}
