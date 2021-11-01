<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
/**
     * Display a listing of the resource.
     * controller ini berfungsi sebagai laman menampung berbebagi fungsi  method yang dibutuhkan.
     * dalam crud sederhanna assesment.
     *
     */
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ini adlaah function untuk index mahasiswa


        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //bikin data baru ke database
         $mahasiswa = new Mahasiswa;
         return view('mahasiswa.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nyetorin data ke database
   
        
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->create_at = $request->create_at;
        $mahasiswa->update_at = $request->update_at;
        $mahasiswa->save();
    
        return redirect()->route('mahasiswa.index');
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //ini untuk nampilkan data 
        return view('mahasiswa.show',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id); 
        return view('mahasiswa.edit', compact('mahasiswa'));
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
       
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->create_at = $request->create_at;
        $mahasiswa->update_at = $request->update_at;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus delete hancurin datanya
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');
    }
}
