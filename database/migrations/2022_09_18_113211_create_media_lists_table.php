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
        Schema::create('media_lists', function (Blueprint $table) {
            $table->id();
            $table->string('medialist_thumbnail');
            $table->string('medialist_title');
            $table->string('medialist_link');
            $table->unsignedBigInteger('media_category_id');
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
        Schema::dropIfExists('media_lists');
    }
};
