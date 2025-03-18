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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id(); // Primary Key (id_ukm)
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade'); // Foreign Key
            $table->string('nama');
            $table->string('image')->nullable(); // Bisa kosong
            $table->text('deskripsi')->nullable();
            $table->text('program_kerja')->nullable();
            $table->string('prestasi')->nullable();
            $table->integer('jumlah_anggota')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
