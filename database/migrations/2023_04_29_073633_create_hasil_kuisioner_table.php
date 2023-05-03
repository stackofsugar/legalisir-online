<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hasil_kuisioner', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumni');
            $table->foreign('id_alumni')->references('id')->on('alumni');
            $table->unsignedBigInteger('id_kuisioner');
            $table->foreign('id_kuisioner')->references('id')->on('kuisioner');
            $table->unsignedBigInteger('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
            $table->unsignedBigInteger('id_opsi_terpilih');
            $table->foreign('id_opsi_terpilih')->references('id')->on('opsi')->onDelete('set null');
            $table->text('hasil_essai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_kuisioner');
    }
};