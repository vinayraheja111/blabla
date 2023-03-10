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
        Schema::create('post_rides', function (Blueprint $table) {
            $table->id();
            $table->string('orgin');
            $table->string('destination');
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->Integer('year');
            $table->string('luggage');
            $table->string('Back Sitting');
            $table->string('other');
            $table->Integer('seats');
            $table->Integer('price');
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
        Schema::dropIfExists('post_rides');
    }
};
