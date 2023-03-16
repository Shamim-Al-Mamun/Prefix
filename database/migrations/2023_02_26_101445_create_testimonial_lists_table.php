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
        Schema::create('testimonial_lists', function (Blueprint $table) {
            $table->id();
            $table->string('testimonial_text')->nullable();
            $table->string('testimonial_img')->nullable();
            $table->string('testimonial_rating')->nullable();
            $table->string('testimonial_name')->nullable();
            $table->string('testimonial_title')->nullable();
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
        Schema::dropIfExists('testimonial_lists');
    }
};
