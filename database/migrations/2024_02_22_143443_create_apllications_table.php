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
        Schema::create('apllications', function (Blueprint $table) {
            $table->id();
            $table->string('number_car',11);
            $table->text('description');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->enum('status',['новое','подтверждено','отклонено'])->default('новое');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apllications');
    }
};
