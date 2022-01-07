<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabeldokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nohp');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('spesialis');
            $table->text('foto');
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
        //
    }
}
