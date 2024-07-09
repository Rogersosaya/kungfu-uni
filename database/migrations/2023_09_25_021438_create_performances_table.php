<?php

use App\Models\Performance;
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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();  
            $table->string('title');     
            $table->string('weight');     
            $table->enum('category',[Performance::TAOLU,Performance::SANDA]);
            $table->enum('style',[Performance::MODERNO,Performance::TRADICIONAL]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
