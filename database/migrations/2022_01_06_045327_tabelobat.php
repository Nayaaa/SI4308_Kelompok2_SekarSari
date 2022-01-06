<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelobat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->text('Foto');
            $table->text('Isi');
            $table->string('Harga');
            $table->text('Komposisi');
            $table->text('Seskripsi');
            $table->string('NoRegis');
            $table->string('Manufaktur');
            $table->text('Indikasi');
            $table->string('Dosis');
            $table->text('KontraIndikasi');
            $table->string('NamaObat');
            $table->string('Segmentasi');
            $table->text('Perhatian');
            $table->text('EfekSamping');
            $table->string('Kemasan');
            $table->text('AturanPakai');
            $table->string('Kategori');
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
