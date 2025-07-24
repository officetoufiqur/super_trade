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
        Schema::create('join_nows', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('join_heading_eng')->nullable();
            $table->string('join_sub_heading_eng')->nullable();
            $table->string('join_title_eng')->nullable();
            $table->text('join_description_eng')->nullable();
            $table->string('join_video_eng')->nullable();
            $table->string('join_list1_eng')->nullable();
            $table->string('join_list2_eng')->nullable();
            $table->string('join_list3_eng')->nullable();
            $table->string('join_list4_eng')->nullable();
            $table->string('join_list5_eng')->nullable();
            $table->text('join_card_icon1_eng')->nullable();
            $table->text('join_card_icon2_eng')->nullable();
            $table->text('join_card_icon3_eng')->nullable();
            $table->string('join_card_title1_eng')->nullable();
            $table->string('join_card_title2_eng')->nullable();
            $table->string('join_card_title3_eng')->nullable();
            $table->string('join_card_sub_title1_eng')->nullable();
            $table->string('join_card_sub_title2_eng')->nullable();
            $table->string('join_card_sub_title3_eng')->nullable();

            $table->string('join_heading_fr')->nullable();
            $table->string('join_sub_heading_fr')->nullable();
            $table->string('join_title_fr')->nullable();
            $table->text('join_description_fr')->nullable();
            $table->string('join_video_fr')->nullable();
            $table->string('join_list1_fr')->nullable();
            $table->string('join_list2_fr')->nullable();
            $table->string('join_list3_fr')->nullable();
            $table->string('join_list4_fr')->nullable();
            $table->string('join_list5_fr')->nullable();
            $table->text('join_card_icon1_fr')->nullable();
            $table->text('join_card_icon2_fr')->nullable();
            $table->text('join_card_icon3_fr')->nullable();
            $table->string('join_card_title1_fr')->nullable();
            $table->string('join_card_title2_fr')->nullable();
            $table->string('join_card_title3_fr')->nullable();
            $table->string('join_card_sub_title1_fr')->nullable();
            $table->string('join_card_sub_title2_fr')->nullable();
            $table->string('join_card_sub_title3_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_nows');
    }
};
