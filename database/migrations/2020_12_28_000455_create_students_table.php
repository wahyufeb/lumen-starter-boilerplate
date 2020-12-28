<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id_student')->primary();
            $table->string('nama_depan', 30);
            $table->string('nama_belakang', 30);
            $table->enum('jenjang_pendidikan', ['SMP', 'SMA']);
            $table->string('nama_sekolah', 50);
            $table->integer('kelas');
            $table->string('bidang_olim', 20);
            $table->string('no_wa', 13);
            $table->string('email');
            $table->binary('bukti_pembayaran');
            $table->binary('kartu_pelajar');
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
        Schema::dropIfExists('students');
    }
}
