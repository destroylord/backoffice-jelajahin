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
        Schema::create('gallery_restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image', 100);
            $table->enum('is_cover', ['0', '1']);

            $table->uuid('uuid_restaurant');
            $table->timestamps();

            $table->foreign('uuid_restaurant')
                    ->references('uuid_restaurant')
                    ->on('restaurants')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_restaurants');
    }
};
