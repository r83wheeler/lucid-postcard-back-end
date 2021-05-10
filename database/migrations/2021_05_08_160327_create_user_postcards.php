<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostcards extends Migration
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
            $table->user_id();
            $table->postcards_id();
            //$table->text();
            $table->cart_item_id();
            $table->address1();
            $table->address2();
            $table->city();
            $table->state();
            $table->zip();
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
