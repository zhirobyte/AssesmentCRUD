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
Geometric Gems is a creative exploration of beauty and perfection through geometric shapes, colors, harmony and symmetry, space and dimensions.

A unique selection created by David Mascha. Minted on the Ethereum blockchain.

*Special unlockable content.
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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn');
            $table->string('alamat');
            $table->string('kontak');
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
        Schema::dropIfExists('dosen');
    }
}
