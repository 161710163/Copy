<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contohs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('wali kelas');
            $table->string('namasekolah');
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
        Schema::dropIfExists('contohs');
    }
}
