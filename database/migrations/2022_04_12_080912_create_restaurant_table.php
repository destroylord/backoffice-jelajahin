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
        Schema::create('restaurant', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("address");
            $table->string("image");
            $table->string("restaurant_type");
            $table->char("harga");
            $table->string("food_type");
            $table->string("website");
            $table->string("province");
            $table->string("city");
            $table->float("latitude");
            $table->float("longtitude");
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
        Schema::dropIfExists('restaurant');
    }
};
