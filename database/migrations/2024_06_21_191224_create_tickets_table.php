<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['aberto', 'em_andamento', 'fechado'])->default('aberto');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
