<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           //ini adlaah function untuk index dosen

           $dosen = Dosen::all();
           return view('dosen.index', compact('dosen'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           //bikin data baru ke database
           $dosen = new Dosen;
           return view('dosen.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $dosen = new Dosen();
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->alamat = $request->alamat;
        $dosen->kontak = $request->kontak;
        $dosen->create_at = $request->create_at;
        $dosen->update_at = $request->update_at;
        $dosen->save();
    
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.show',compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosen::find($id); 
        return view('dosen.edit', compact('dosen'));
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
        $dosen = Dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->alamat = $request->alamat;
        $dosen->kontak = $request->kontak;
        $dosen->create_at = $request->create_at;
        $dosen->update_at = $request->update_at;
        $dosen->save();
        return redirect('dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //hapus delete hancurin datanya
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->route('mahasiswa.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');
    }
}
