<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('siswa_id');
            $table->string('name', 100);
            $table->string('phone');
            $table->string('alamat')->nullable();
            $table->enum('kelas', ['12','11','10','9','8','7','6','5','4','3'])->nullable();
            $table->enum('mataPelajaran',['Matematika','Fisika','Biologi','Kimia',
                                                'IPA','IPS','PKN','Agama Islam',
                                                'Bahasa Indonesia','Bahasa Inggris'])->nullable();
            $table->date('tanggal')->nullable();
            $table->time('pukul')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
