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
        Schema::create('join_forms', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->text('join_form_icon_eng')->nullable();
            $table->string('join_form_title_eng')->nullable();
            $table->text('join_form_sub_title_eng')->nullable();
            $table->string('join_form_cname_label_eng')->nullable();
            $table->string('join_form_cname_placeholder_eng')->nullable();
            $table->string('join_form_name_label_eng')->nullable();
            $table->string('join_form_name_placeholder_eng')->nullable();
            $table->string('join_form_phone_label_eng')->nullable();
            $table->string('join_form_phone_placeholder_eng')->nullable();
            $table->string('join_form_email_label_eng')->nullable();
            $table->string('join_form_email_placeholder_eng')->nullable();
            $table->string('join_form_business_label_eng')->nullable();
            $table->string('join_form_business_placeholder_eng')->nullable();
            $table->string('join_form_address_label_eng')->nullable();
            $table->string('join_form_address_placeholder_eng')->nullable();
            $table->string('join_form_about_us_label_eng')->nullable();
            $table->string('join_form_about_us_placeholder_eng')->nullable();
            $table->string('join_form_about_us_menu1_eng')->nullable();
            $table->string('join_form_about_us_menu2_eng')->nullable();
            $table->string('join_form_about_us_menu3_eng')->nullable();
            $table->string('join_form_about_us_menu4_eng')->nullable();
            $table->string('join_form_about_us_menu5_eng')->nullable();
            $table->string('join_form_about_us_menu6_eng')->nullable();

            $table->text('join_form_icon_fr')->nullable();
            $table->string('join_form_title_fr')->nullable();
            $table->text('join_form_sub_title_fr')->nullable();
            $table->string('join_form_cname_label_fr')->nullable();
            $table->string('join_form_cname_placeholder_fr')->nullable();
            $table->string('join_form_name_label_fr')->nullable();
            $table->string('join_form_name_placeholder_fr')->nullable();
            $table->string('join_form_phone_label_fr')->nullable();
            $table->string('join_form_phone_placeholder_fr')->nullable();
            $table->string('join_form_email_label_fr')->nullable();
            $table->string('join_form_email_placeholder_fr')->nullable();
            $table->string('join_form_business_label_fr')->nullable();
            $table->string('join_form_business_placeholder_fr')->nullable();
            $table->string('join_form_address_label_fr')->nullable();
            $table->string('join_form_address_placeholder_fr')->nullable();
            $table->string('join_form_about_us_label_fr')->nullable();
            $table->string('join_form_about_us_placeholder_fr')->nullable();
            $table->string('join_form_about_us_menu1_fr')->nullable();
            $table->string('join_form_about_us_menu2_fr')->nullable();
            $table->string('join_form_about_us_menu3_fr')->nullable();
            $table->string('join_form_about_us_menu4_fr')->nullable();
            $table->string('join_form_about_us_menu5_fr')->nullable();
            $table->string('join_form_about_us_menu6_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_forms');
    }
};
