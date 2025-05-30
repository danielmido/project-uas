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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kendaraan', 100);
            $table->integer('tahun_kendaraan', 10);
            $table->string('transmisi_kendaraan', 100);
            $table->string('plat_kendaraan', 100);
            $table->integer('harga_kendaraan', 20);
            $table->integer('kapasitasMesinOP_kendaraan', 20);
            $table->integer('kilometerOP_kendaraan');
            $table->string('bahanBakarOP_kendaraan', 100);
            $table->string('warnaFisikOP_kendaraan', 100);
            $table->string('foto', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
