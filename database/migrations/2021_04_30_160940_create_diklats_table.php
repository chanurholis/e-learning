<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklats', function (Blueprint $table) {
            $table->increments('id_diklat');
            $table->string('jenis_diklat', 2);
            $table->string('bidang_pelatihan', 2);
            $table->string('jenis_kegiatan', 2);
            $table->string('model_pelatihan', 2);
            $table->string('kode_diklat', 20);
            $table->string('kode_profil', 10);
            $table->string('nama_diklat', 100);
            $table->string('tahun', 4);
            $table->string('jenjang', 10);
            $table->text('syarat_peserta');
            $table->text('syarat_wi');
            $table->text('deskripsi');
            $table->text('tujuan_diklat');
            $table->text('keterangan');
            $table->enum('status_aktif', ['Y', 'N']);
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
        Schema::drop('diklats');
    }
}
