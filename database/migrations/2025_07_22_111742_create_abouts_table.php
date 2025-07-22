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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->string('banner_title_eng')->nullable();
            $table->string('banner_sort_title_eng')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('about_header_eng')->nullable();
            $table->string('about_title_eng')->nullable();
            $table->text('about_sub_title_eng')->nullable();
            $table->string('card_image')->nullable();
            $table->string('card_title_eng')->nullable();
            $table->text('card_percentage_eng')->nullable();
            $table->string('mission_title_eng')->nullable();
            $table->text('mission_description_eng')->nullable();
            $table->string('mission_sub_title1_eng')->nullable();
            $table->string('mission_sort_desc1_eng')->nullable();
            $table->string('mission_sub_title2_eng')->nullable();
            $table->string('mission_sort_desc2_eng')->nullable();
            $table->string('mission_image')->nullable();
            $table->string('banner_title_fr')->nullable();
            $table->string('banner_sort_title_fr')->nullable();
            $table->string('about_header_fr')->nullable();
            $table->string('about_title_fr')->nullable();
            $table->text('about_sub_title_fr')->nullable();
            $table->string('card_title_fr')->nullable();
            $table->text('card_percentage_fr')->nullable();
            $table->string('mission_title_fr')->nullable();
            $table->text('mission_description_fr')->nullable();
            $table->string('mission_sub_title1_fr')->nullable();
            $table->string('mission_sort_desc1_fr')->nullable();
            $table->string('mission_sub_title2_fr')->nullable();
            $table->string('mission_sort_desc2_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
