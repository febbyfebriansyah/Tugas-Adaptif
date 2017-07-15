<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penduduk_id');
            $table->integer('user_id');
            $table->string('noKtp');
            $table->string('nama');
			$table->string('tmptLahir')->nullable();
            $table->string('tglLahir');
            $table->integer('jk'); //1=laki-laki, 2=perempuan
            $table->string('agama');
            $table->string('alamat');
			$table->string('noTelp')->nullable();
            $table->integer('accepted')->default('0');
            $table->string('alasan');
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
        Schema::dropIfExists('modifications');
    }
}
