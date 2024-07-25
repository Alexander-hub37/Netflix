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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_movie');
            $table->enum('qualifications', ['No es para mí', 'Me gusta', 'Me encanta']);
            $table->timestamps();

            $table->foreign('id_movie')->references('id')->on('movies')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('qualifications', function (Blueprint $table) {
            $table->dropForeign(['id_movie']);
        });
        Schema::dropIfExists('qualifications');
    }
};
