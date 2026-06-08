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
    Schema::create('revistas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('editora');
        $table->string('categoria');
        $table->integer('edicao');
        $table->integer('ano_publicacao');
        $table->integer('quantidade_paginas');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revistas');
    }
};
