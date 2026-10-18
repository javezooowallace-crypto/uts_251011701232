<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('ingredients');            // satu bahan per baris
            $table->text('steps');                  // satu langkah per baris
            $table->unsignedSmallInteger('cook_time'); // menit
            $table->string('image');                // nama file di public/assets/images/
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
