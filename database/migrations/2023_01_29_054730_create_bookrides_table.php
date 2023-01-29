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
        Schema::create('bookrides', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->bigInteger('post_id')->unsigned()->index(); 
            $table->foreign('post_id')->references('id')->on('post_rides'); 
            $table->date('date');
            $table->Integer('seat');
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
        Schema::dropIfExists('bookrides');
    }
};
