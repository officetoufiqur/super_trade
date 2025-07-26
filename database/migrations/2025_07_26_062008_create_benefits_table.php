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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->string('heading_eng')->nullable();
            $table->string('sub_heading_eng')->nullable();
            $table->string('image')->nullable();
            $table->text('icon')->nullable();
            $table->string('card_title_eng')->nullable();
            $table->longText('card_description_eng')->nullable();
            $table->string('card_btn_text_eng')->nullable();
            $table->string('newsletter_title_eng')->nullable();
            $table->string('newsletter_sub_title_eng')->nullable();
            $table->string('newsletter_btn_text_eng')->nullable();

            $table->string('heading_fr')->nullable();
            $table->string('sub_heading_fr')->nullable();
            $table->text('card_title_fr')->nullable();
            $table->longText('card_description_fr')->nullable();
            $table->string('card_btn_text_fr')->nullable();
            $table->string('newsletter_title_fr')->nullable();
            $table->string('newsletter_sub_title_fr')->nullable();
            $table->string('newsletter_btn_text_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
