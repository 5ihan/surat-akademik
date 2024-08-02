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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('users')->onDelete('cascade'); // Foreign key
            $table->string('kepada')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('alamat_surat')->nullable();

            // Data untuk izin penelitian
            $table->string('judul_penelitian')->nullable();

            // Data untuk Magang
            $table->string('perusahaan_magang')->nullable();
            $table->integer('waktu_magang')->nullable();
            $table->text('deskripsi_magang')->nullable();

            // Data untuk Surat Lain
            $table->string('nik')->nullable();
            $table->integer('semester')->nullable();
            $table->string('ipk')->nullable();
            $table->integer('jml_sks')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('nama_koordinator')->nullable();
            $table->string('nomor_koordinator')->nullable();
            $table->string('email_koordinator')->nullable();

            $table->string('tembusan')->nullable();
            $table->string('prodi')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('jenis_surat');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
