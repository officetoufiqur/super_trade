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
        Schema::create('super_faits', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('title_eng')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('btn_text_eng')->nullable();
            $table->string('btn_text_fr')->nullable();
            $table->longText('description_eng')->nullable();
            $table->longText('description_fr')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_faits');
    }
};
