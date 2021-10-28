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
class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('create_at');
            $table->string('update_at');
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
        Schema::dropIfExists('_dosen');
    }
}
