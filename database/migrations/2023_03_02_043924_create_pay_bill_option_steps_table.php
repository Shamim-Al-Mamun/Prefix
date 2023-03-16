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
        Schema::create('pay_bill_option_steps', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->longText('text')->nullable();
            $table->unsignedBigInteger('pay_bill_options_id')->nullable();
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
        Schema::dropIfExists('pay_bill_option_steps');
    }
};
