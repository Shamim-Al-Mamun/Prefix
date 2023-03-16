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
        Schema::create('contact_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('contact_phone_icon')->nullable();
            $table->string('contact_phone_title')->nullable();
            $table->string('contact_phone_text')->nullable();
            $table->string('contact_email_icon')->nullable();
            $table->string('contact_email_title')->nullable();
            $table->string('contact_email_text')->nullable();
            $table->string('contact_location_icon')->nullable();
            $table->string('contact_location_title')->nullable();
            $table->string('contact_location_text')->nullable();
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
        Schema::dropIfExists('contact_boxes');
    }
};
