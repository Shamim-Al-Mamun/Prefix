<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            $table->string('about_image')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_experience_icon')->nullable();
            $table->string('about_experience_number')->nullable();
            $table->string('about_experience_after_number')->nullable();
            $table->string('about_experience_text')->nullable();
            $table->string('about_section_label')->nullable();
            $table->string('about_section_first_title')->nullable();
            $table->string('about_section_title_middle')->nullable();
            $table->string('about_section_title_last')->nullable();
            $table->longText('about_section_title_desc')->nullable();
            $table->longText('about_section_title_rich_desc')->nullable();
            $table->string('about_progress_label')->nullable();
            $table->string('about_progress_percent')->nullable();
            $table->string('about_progress_label_two')->nullable();
            $table->string('about_progress_label_two_percent')->nullable();
            $table->string('about_progress_label_three')->nullable();
            $table->string('about_progress_label_three_percent')->nullable();
            $table->string('about_progress_label_four')->nullable();
            $table->string('about_progress_label_four_percent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_settings');
    }
};
