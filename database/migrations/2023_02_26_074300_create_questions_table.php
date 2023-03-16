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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_bg_img')->nullable();
            $table->string('question_title')->nullable();
            $table->longText('question_text')->nullable();

            $table->string('question_btn1_text')->nullable();
            $table->string('question_btn1_link')->nullable();

            $table->string('question_btn2_text')->nullable();
            $table->string('question_btn2_link')->nullable();

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
        Schema::dropIfExists('questions');
    }
};
