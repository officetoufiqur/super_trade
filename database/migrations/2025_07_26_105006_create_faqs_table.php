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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('section');
            $table->text('heading_eng')->nullable();
            $table->text('sub_heading_eng')->nullable();
            $table->text('question_eng')->nullable();
            $table->longText('answer_eng')->nullable();

            $table->text('heading_fr')->nullable();
            $table->text('sub_heading_fr')->nullable();
            $table->text('question_fr')->nullable();
            $table->longText('answer_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
