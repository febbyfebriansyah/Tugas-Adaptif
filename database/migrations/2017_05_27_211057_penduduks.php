<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Penduduks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noKtp')->unique();
            $table->string('nama')->index();
			$table->string('tmptLahir')->nullable();
            $table->string('tglLahir');
            $table->integer('jk'); //1=laki-laki, 2=perempuan
            $table->string('agama');
            $table->string('alamat');
			$table->string('no_telp')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('penduduk');
    }
}
