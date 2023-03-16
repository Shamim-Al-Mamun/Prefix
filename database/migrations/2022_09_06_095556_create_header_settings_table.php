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
        Schema::create('header_settings', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo')->nullable();
            $table->string('header_phone')->nullable();
            $table->string('header_email')->nullable();
            $table->string('header_button')->nullable();
            $table->string('header_main_button')->nullable();
            $table->string('header_main_button_url')->nullable();
            $table->string('header_button_url')->nullable();
            $table->string('header_button_two')->nullable();
            $table->string('header_button_two_url')->nullable();
            $table->string('header_button_three')->nullable();
            $table->string('header_button_three_url')->nullable();
            $table->string('header_facebook_url')->nullable();
            $table->string('header_twitter_url')->nullable();
            $table->string('header_linkedin_url')->nullable();
            $table->string('header_instagram_url')->nullable();
            $table->string('header_youtube_url')->nullable();
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
        Schema::dropIfExists('header_settings');
    }
};
