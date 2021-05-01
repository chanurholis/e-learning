<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatJenisKegiatansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat_jenis_kegiatans', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->string('kode_kegiatan', 10);
            $table->string('nama_kegiatan', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('diklat_jenis_kegiatans');
    }
}
