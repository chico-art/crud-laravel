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
        Schema::create('crud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_bisnis');
            $table->string('nama');
            $table->string('email');
            $table->string('jenis_layanan');
            $table->string('no', 20)->change();
            $table->string('kebutuhan');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('crud', function (Blueprint $table) {
            $table->string('no', 10)->change(); // Ubah kembali ke panjang semula jika dibutuhkan
        });
    }
};
