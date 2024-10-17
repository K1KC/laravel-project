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
        Schema::create('profil', function (Blueprint $table) {
            $table->id(); //Field auto incerement - primary key -> integer
            $table->bigInteger('nim')->unique();
            $table->string('nama');
            $table->string('email');
            $table->enum('jurusan', ['TI', 'SI', 'Akuntansi']);
            $table->text('alamat');
            $table->timestamps(); //2 field -> created_at, updated_at
            // nim,nama,jurusan,alamat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
