<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Movie; 
use App\Models\Gender;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gender_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Gender::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gender_movie');
    }
};
