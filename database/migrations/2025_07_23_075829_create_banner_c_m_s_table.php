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
        Schema::create('banner_c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->string('title_eng')->nullable();
            $table->text('sub_title_eng')->nullable();
            $table->string('btn_text1_eng')->nullable();
            $table->string('btn_text2_eng')->nullable();
            $table->string('title_fr')->nullable();
            $table->text('sub_title_fr')->nullable();
            $table->string('btn_text1_fr')->nullable();
            $table->string('btn_text2_fr')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_c_m_s');
    }
};
