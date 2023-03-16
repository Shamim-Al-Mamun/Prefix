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
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string('footer_bg_image');
            $table->string('footer_logo')->nullable();
            $table->string('footer_heading')->nullable();
            $table->longText('footer_text')->nullable();
            $table->string('footer_facebook_url')->nullable();
            $table->string('footer_twitter_url')->nullable();
            $table->string('footer_linkedin_url')->nullable();
            $table->string('footer_instagram_url')->nullable();
            $table->string('footer_youtube_url')->nullable();
            $table->string('footer_link_one')->nullable();
            $table->string('footer_link_one_url')->nullable();
            $table->string('footer_link_two')->nullable();
            $table->string('footer_link_two_url')->nullable();
            $table->string('footer_link_three')->nullable();
            $table->string('footer_link_three_url')->nullable();
            $table->string('footer_link_four')->nullable();
            $table->string('footer_link_four_url')->nullable();
            $table->string('footer_link_five')->nullable();
            $table->string('footer_link_five_url')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('support_title')->nullable();
            $table->string('support_number')->nullable();
            $table->string('footer_large_image')->nullable();
            $table->longText('footer_copyright')->nullable();
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
        Schema::dropIfExists('footer_settings');
    }
};
