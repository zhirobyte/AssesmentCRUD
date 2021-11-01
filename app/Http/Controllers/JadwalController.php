<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              //ini adlaah function untuk index dosen

              $jadwal = Jadwal::all();
              return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //bikin data baru ke database
       $dataMahasiswa = Mahasiswa::all();
       $dataDosen = Dosen::all();
       $jadwal = new jadwal;
       return view('jadwal.create', compact('jadwal', 'dataMahasiswa', 'dataDosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           

        $jadwal = new Jadwal();
        $jadwal->mahasiswa_id = $request->mahasiswa_id;
        $jadwal->dosen_id = $request->dosen_id;
        $jadwal->judul = $request->judul;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->awal = $request->awal;
        $jadwal->akhir = $request->akhir;
        $jadwal->create_at = $request->create_at;
        $jadwal->update_at = $request->update_at;
        $jadwal->save();
    
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
