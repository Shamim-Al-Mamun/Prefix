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
        Schema::create('hero_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->string('hero_sub_title')->nullable();
            $table->longText('hero_text')->nullable();
            $table->string('hero_main_button')->nullable();
            $table->string('hero_main_button_link')->nullable();
            $table->string('hero_main_button_two')->nullable();
            $table->string('hero_main_button_two_link')->nullable();
            $table->string('hero_link_button')->nullable();
            $table->string('hero_link_button_url')->nullable();
            $table->string('hero_link_button_thumbnail')->nullable();
            $table->string('hero_link_button_two')->nullable();
            $table->string('hero_link_button_two_url')->nullable();
            $table->string('hero_link_button_two_thumbnail')->nullable();
            $table->string('hero_link_button_three')->nullable();
            $table->string('hero_link_button_three_url')->nullable();
            $table->string('hero_link_button_three_thumbnail')->nullable();
            $table->string('hero_link_button_four')->nullable();
            $table->string('hero_link_button_four_url')->nullable();
            $table->string('hero_link_button_four_thumbnail')->nullable();
            $table->string('hero_thumbnail')->nullable();
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
        Schema::dropIfExists('hero_sliders');
    }
};
