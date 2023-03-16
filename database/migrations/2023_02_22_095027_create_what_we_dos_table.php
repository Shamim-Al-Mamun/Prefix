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
        Schema::create('what_we_dos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();;
            $table->string('sub_title')->nullable();;
            $table->longText('text')->nullable();

            $table->string('list1')->nullable();
            $table->string('list2')->nullable();
            $table->string('list3')->nullable();
            $table->string('list4')->nullable();
            $table->string('list5')->nullable();
            $table->string('list6')->nullable();
            $table->string('list7')->nullable();
            $table->string('list8')->nullable();
            $table->string('list9')->nullable();
            $table->string('list10')->nullable();

            $table->string('card1_logo')->nullable();
            $table->string('card1_title')->nullable();
            $table->string('card1_text')->nullable();

            $table->string('card2_logo')->nullable();
            $table->string('card2_title')->nullable();
            $table->string('card2_text')->nullable();

            $table->string('card3_logo')->nullable();
            $table->string('card3_title')->nullable();
            $table->string('card3_text')->nullable();

            $table->string('card4_logo')->nullable();
            $table->string('card4_title')->nullable();
            $table->string('card4_text')->nullable();

            $table->string('card5_logo')->nullable();
            $table->string('card5_title')->nullable();
            $table->string('card5_text')->nullable();

            $table->string('card6_logo')->nullable();
            $table->string('card6_title')->nullable();
            $table->string('card6_text')->nullable();

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
        Schema::dropIfExists('what_we_dos');
    }
};
