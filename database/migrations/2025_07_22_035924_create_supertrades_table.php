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
        Schema::create('supertrades', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('title_eng')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('card_title_eng')->nullable();
            $table->string('card_title_fr')->nullable();
            $table->longText('card_description_eng')->nullable();
            $table->longText('card_description_fr')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supertrades');
    }
};
