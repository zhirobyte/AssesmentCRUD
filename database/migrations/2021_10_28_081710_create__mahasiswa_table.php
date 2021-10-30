<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Migration database by Faiz Hanafi - 1910130008
|--------------------------------------------------------------------------
|
| Data ini adalah data migration yang saya buat sesuai dengan requirement
| thanks :)
| 
*/
class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('tahun_masuk');
            $table->dateTime('create_at');
            $table->dateTime('update_at');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
