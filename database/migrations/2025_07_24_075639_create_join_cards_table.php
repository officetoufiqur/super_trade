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
        Schema::create('join_cards', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->string('join_card_heading_eng')->nullable();
            $table->string('join_card_sub_heading_eng')->nullable();
            $table->text('join_card_icon_eng')->nullable();
            $table->string('join_card_title_eng')->nullable();
            $table->string('join_card_sub_title_eng')->nullable();

            $table->string('join_card_heading_fr')->nullable();
            $table->string('join_card_sub_heading_fr')->nullable();
            $table->text('join_card_icon_fr')->nullable();
            $table->string('join_card_title_fr')->nullable();
            $table->string('join_card_sub_title_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_cards');
    }
};
