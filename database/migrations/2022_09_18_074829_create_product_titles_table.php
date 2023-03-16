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
        Schema::create('product_titles', function (Blueprint $table) {
            $table->id();
            $table->string('product_section_label')->nullable();
            $table->string('product_section_first_title')->nullable();
            $table->string('product_section_title_middle')->nullable();
            $table->string('product_section_title_last')->nullable();
            $table->longText('product_section_title_desc')->nullable();
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
        Schema::dropIfExists('product_titles');
    }
};
