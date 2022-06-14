<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahpompasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahpompas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi');
            $table->string('lokasi');
            $table->string('telepon');
            $table->date('tahun_pembuatan');
            $table->string('pembuat');
            $table->string('pdam');
            $table->text('keterangan');
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
        Schema::dropIfExists('rumahpompas');
    }
}
