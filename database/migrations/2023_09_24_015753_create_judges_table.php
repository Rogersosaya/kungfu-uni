<?php

use App\Models\Judge;
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
        Schema::create('judges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category',[Judge::TAOLU,Judge::SANDA]);
            $table->enum('style',[Judge::MODERNO,Judge::TRADICIONAL]);
            $table->enum('type',[Judge::A,Judge::B]);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('judges');
    }
};
