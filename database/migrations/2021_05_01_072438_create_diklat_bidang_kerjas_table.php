<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatBidangKerjasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat_bidang_kerjas', function (Blueprint $table) {
            $table->increments('id_kerja');
            $table->char('kode_jenis', 3);
            $table->char('kode_bidang', 3);
            $table->string('kode_kerja', 255);
            $table->string('nama_kerja', 255);
            $table->string('status_aktif', 2);
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
        Schema::drop('diklat_bidang_kerjas');
    }
}
