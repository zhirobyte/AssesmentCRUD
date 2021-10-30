<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected  $fillable = 
       
        [
        'nama','nim', 'tanggal_lahir','alamat','tahun_masuk',
        'create_at','update_at','timestamp'
        
        ] ;
    
}
