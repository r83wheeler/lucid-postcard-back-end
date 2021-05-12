<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPostcards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_postcards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->unsignedBigInteger('postcard_id')->references('id')->on('postcards');
            $table->text('text');
            //$table->unsignedBigInteger('cart_item_id');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
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
         Schema::dropIfExists('user_postcards');
    }
}
