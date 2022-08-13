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
        Schema::create('type_bangunans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_id')->constrained()
                ->onUpdate('cascade');
            $table->string('type');
            $table->integer('jumlah');
            $table->string('kategori');
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
        Schema::dropIfExists('type_bangunans');
    }
};