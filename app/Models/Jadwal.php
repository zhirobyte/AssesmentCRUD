<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
    
        'mahasiswa_id',
        'dosen_id',
        'judul',
        'deskripsi',
        'awal',
        'akhir',
        'create_at',
        'update_at'

    ];



    function getDataMahasiswa()
    {
        return Mahasiswa::find($this->mahasiswa_id);
    }
    function getDataDosen()
    {
        return Dosen::find($this->dosen_id);
    }
}
