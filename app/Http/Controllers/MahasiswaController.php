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
        // $mahasiswa = Mahasiswa::latest()->paginate(5);

        // return view('mahasiswa.index',compact('mahasiswa'))
        // ->with('1', (request()->input('page',1) - 1) * 5);


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
        return view('mahasiswa.create');
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
   
        $request->validate([
            'nama' =>  'required',
            'nim' =>  'required',
            'tanggal_lahir' => 'required',
            'alamat' =>  'required',
            'tahun_masuk' => 'required',
            'create_at' =>  'required',
            'update_at' =>  'required',

        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')
        ->with('sukses!', 'Mahasiswa berhasil dibuat');
        //menunjukkan bahwa proses selesai
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
    public function edit(Mahasiswa $mahasiswa)
    {
        //ini untuk ngedit nya
        return view('mahasiswa.edit',compact('mahasiwa'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Mahasiswa $mahasiswa )//setiap variable perlu dideclarekan
    {
        //in tuh untuk update nya jangan lupa validasi data 
        //unntuuk keamanan :)

        $request->validate([
            'nama' =>  'required',
            'nim' =>  'required',
            'alamat' =>  'required',
            'kontak' =>  'required',
            'create_at' =>  'required',
            'update_at' =>  'required',

        ]);

        $mahasiswa->update($request->all());

        return redirect('mahasiswa.index')
        ->with('Selamat!', 'Mahasiswa berhasil diuppdate');
        //ucapan berhasil diupdate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //hapus delete hancurin datanya
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');
    }
}
