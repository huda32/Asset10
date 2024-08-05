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
        Schema::create('mesin', function (Blueprint $table) {
            $table->id('id_mesin');
            $table->integer('id_gedung');
            $table->integer('id_merk');
            $table->integer('id_jenis_mesin');
            $table->string('no_mesin');
            $table->string('sn_mesin');
            $table->string('tahun_perolehan');
            $table->string('pengguna');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesin');
    }
};
