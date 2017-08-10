<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreeAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('firstname');
            $table->string('title');
            $table->bigInteger('price');
            $table->text('longdesc');
            $table->text('shortdesc');
            $table->string('location');
            $table->text('phone');
            $table->string('image_name');
            $table->binary('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('free_ads');
    }
}
