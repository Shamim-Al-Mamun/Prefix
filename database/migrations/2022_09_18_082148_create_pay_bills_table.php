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
        Schema::create('pay_bills', function (Blueprint $table) {
            $table->id();
            $table->string('paybill_bg_image');
            $table->string('paybill_section_label')->nullable();
            $table->string('paybill_section_first_title')->nullable();
            $table->string('paybill_section_title_middle')->nullable();
            $table->string('paybill_section_title_last')->nullable();
            $table->longText('paybill_section_title_desc')->nullable();
            $table->string('paybill_tab_name_one')->nullable();
            $table->string('paybill_image_one')->nullable();
            $table->string('paybill_button_one')->nullable();
            $table->string('paybill_button_url_one')->nullable();
            $table->string('paybill_tab_name_two')->nullable();
            $table->string('paybill_image_two')->nullable();
            $table->string('paybill_button_two')->nullable();
            $table->string('paybill_button_url_two')->nullable();
            $table->string('paybill_tab_name_three')->nullable();
            $table->string('paybill_image_three')->nullable();
            $table->string('paybill_button_three')->nullable();
            $table->string('paybill_button_url_three')->nullable();
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
        Schema::dropIfExists('pay_bills');
    }
};
