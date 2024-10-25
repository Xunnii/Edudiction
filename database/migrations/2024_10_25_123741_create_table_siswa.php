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
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birthday')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('email')->unique();
            $table->string('phone', 20)->nullable();
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
