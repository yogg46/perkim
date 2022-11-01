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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('berkas');
            $table->string('status')->default(0);
            $table->unsignedBigInteger('persyaratan')->constrained()
                ->onUpdate('cascade')
                ->nullable();
            $table->string('catatan')->nullable();
            $table->unsignedBigInteger('pengajuan')->constrained()
                ->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('files');
    }
};