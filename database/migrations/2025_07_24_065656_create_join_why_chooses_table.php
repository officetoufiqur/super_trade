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
        Schema::create('join_why_chooses', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('join_why_chooses_count_eng')->nullable();
            $table->string('join_why_chooses_count_title_eng')->nullable();
            $table->string('join_why_chooses_image_eng')->nullable();
            $table->string('join_why_chooses_title_eng')->nullable();
            $table->string('join_why_chooses_list1_eng')->nullable();
            $table->string('join_why_chooses_list2_eng')->nullable();
            $table->string('join_why_chooses_list3_eng')->nullable();
            $table->string('join_why_chooses_list4_eng')->nullable();
            $table->string('join_why_chooses_list5_eng')->nullable();
            $table->string('join_why_chooses_list6_eng')->nullable();
            $table->string('join_why_chooses_list7_eng')->nullable();
            $table->string('join_why_chooses_list8_eng')->nullable();
            $table->string('join_why_chooses_offer_number_eng')->nullable();
            $table->string('join_why_chooses_offer_title_eng')->nullable();

            $table->string('join_why_chooses_count_fr')->nullable();
            $table->string('join_why_chooses_count_title_fr')->nullable();
            $table->string('join_why_chooses_image_fr')->nullable();
            $table->string('join_why_chooses_title_fr')->nullable();
            $table->string('join_why_chooses_list1_fr')->nullable();
            $table->string('join_why_chooses_list2_fr')->nullable();
            $table->string('join_why_chooses_list3_fr')->nullable();
            $table->string('join_why_chooses_list4_fr')->nullable();
            $table->string('join_why_chooses_list5_fr')->nullable();
            $table->string('join_why_chooses_list6_fr')->nullable();
            $table->string('join_why_chooses_list7_fr')->nullable();
            $table->string('join_why_chooses_list8_fr')->nullable();
            $table->string('join_why_chooses_offer_number_fr')->nullable();
            $table->string('join_why_chooses_offer_title_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_why_chooses');
    }
};
