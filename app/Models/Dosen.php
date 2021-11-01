<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
 
    protected $fillable = [
        'nama',
        'nidn',
        'alamat',
        'kontak',
        'create_at',
        'update_at',

    ]; 
}


