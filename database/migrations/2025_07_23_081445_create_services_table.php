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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->string('section_card_icon')->nullable();
            $table->string('section_card_title_eng')->nullable();
            $table->string('section_card_sub_title_eng')->nullable();
            $table->string('trading_header_eng')->nullable();
            $table->string('trading_sub_header_eng')->nullable();
            $table->string('trading_card_icon')->nullable();
            $table->string('trading_card_image')->nullable();
            $table->string('trading_card_title_eng')->nullable();
            $table->string('trading_card_sub_title_eng')->nullable();
            $table->string('trading_card_list1_eng')->nullable();
            $table->string('trading_card_list2_eng')->nullable();
            $table->string('trading_card_list3_eng')->nullable();
            $table->string('service_choose_header_eng')->nullable();
            $table->string('service_choose_sub_header_eng')->nullable();
            $table->string('service_choose_card_icon')->nullable();
            $table->string('service_choose_card_title_eng')->nullable();
            $table->string('service_choose_card_sub_title_eng')->nullable();

            $table->string('section_card_title_fr')->nullable();
            $table->string('section_card_sub_title_fr')->nullable();
            $table->string('trading_header_fr')->nullable();
            $table->string('trading_sub_header_fr')->nullable();
            $table->string('trading_card_title_fr')->nullable();
            $table->string('trading_card_sub_title_fr')->nullable();
            $table->string('trading_card_list1_fr')->nullable();
            $table->string('trading_card_list2_fr')->nullable();
            $table->string('trading_card_list3_fr')->nullable();
            $table->string('service_choose_header_fr')->nullable();
            $table->string('service_choose_sub_header_fr')->nullable();
            $table->string('service_choose_card_title_fr')->nullable();
            $table->string('service_choose_card_sub_title_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
