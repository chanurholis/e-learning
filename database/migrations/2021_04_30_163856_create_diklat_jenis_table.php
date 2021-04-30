<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatJenisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat_jenis', function (Blueprint $table) {
            $table->increments('id_jenis');
            $table->string('kode_jenis', 2);
            $table->string('nama_jenis', 50);
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
        Schema::drop('diklat_jenis');
    }
}
