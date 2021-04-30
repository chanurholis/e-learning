<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatBidangPelatihansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat_bidang_pelatihans', function (Blueprint $table) {
            $table->increments('id_bidang');
            $table->char('kode_jenis', 5);
            $table->string('kode_bidang', 5);
            $table->string('nama_bidang', 50);
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
        Schema::drop('diklat_bidang_pelatihans');
    }
}
