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
    public function up(): void
{
    Schema::create('qurbans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_peserta');
        $table->string('telepon');
        $table->text('alamat');
        $table->string('paket'); // nama hewan/paket
        $table->decimal('harga', 12, 2);
        $table->string('jenis_hewan');
        $table->enum('status', ['pending', 'lunas', 'diproses', 'selesai'])->default('pending');
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
        Schema::dropIfExists('qurbans');
    }
};
