<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('dev');
            $table->string('nama_dev');
            $table->string('alamat_dev');
            $table->string('no_hp');
            $table->string('asosiasi');
            $table->string('no_asosiasi');
            $table->string('nama_pro')->nullable();
            $table->string('alamat_pro')->nullable();
            $table->string('pemohon1')->nullable();
            $table->string('tel_pemohon1')->nullable();
            $table->string('pemohon2')->nullable();
            $table->string('tel_pemohon2')->nullable();
            $table->string('psu')->nullable();
            $table->string('kavling')->nullable();
            $table->string('total')->nullable();
            $table->string('total_kavling')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('action')->nullable()->default(0);
            $table->string('date')->nullable();
            $table->string('tahun')->nullable();
            $table->unsignedBigInteger('pengaju')->constrained()
                ->onUpdate('cascade');
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
        Schema::dropIfExists('pengajuans');
    }
};