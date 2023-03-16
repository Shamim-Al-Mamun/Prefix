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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('pricing_title')->nullable();
            $table->string('pricing_megabytes')->nullable();
            $table->string('pricing_megabytes_text')->nullable();
            $table->string('pricing_price_amount')->nullable();
            $table->string('pricing_price_amount_bottom')->nullable();
            $table->longText('pricing_price_desc')->nullable();
            $table->longText('pricing_price_offer_desc')->nullable();
            $table->string('pricing_price_button_text')->nullable();
            $table->string('pricing_price_button_url')->nullable();
            $table->unsignedBigInteger('pricing_category_id');
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
        Schema::dropIfExists('pricings');
    }
};
