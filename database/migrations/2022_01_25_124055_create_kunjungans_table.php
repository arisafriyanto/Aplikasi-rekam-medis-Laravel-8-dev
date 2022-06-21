<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKunjungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poli_id');
            $table->foreignId('pasien_id');
            $table->foreignId('dokter_id');
            $table->foreignId('user_id');
            $table->date('tgl_kunjungan');
            $table->enum('jenis_kunjungan', ['Kunjungan sakit', 'Kunjungan sehat']);
            $table->enum('tindak_lanjut', ['Pulang sehat', 'Rawat jalan', 'Pemeriksaan berkala', 'Rujukan']);
            $table->string('keluhan');
            $table->string('terapi')->nullable();
            $table->string('kesadaran')->nullable();
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('tekanan_darah');
            $table->integer('respiratory_rake')->nullable();
            $table->integer('heart_rafe')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('biaya');
            $table->enum('status', ['Belum dilayani', 'Sudah dilayani']);
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
        Schema::dropIfExists('kunjungans');
    }
}
