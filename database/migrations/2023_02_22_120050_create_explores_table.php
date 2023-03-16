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
        Schema::create('explores', function (Blueprint $table) {
            $table->id();
            $table->string('card1_img')->nullable();;
            $table->string('card1_button_text')->nullable();;
            $table->string('card1_button_link')->nullable();;

            $table->string('card2_img')->nullable();;
            $table->string('card2_button_text')->nullable();;
            $table->string('card2_button_link')->nullable();;
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
        Schema::dropIfExists('explores');
    }
};
