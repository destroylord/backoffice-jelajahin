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
        Schema::create('restaurant_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->tinyInteger('rating_service');
            $table->tinyInteger('rating_food');
            $table->tinyInteger('rating_clean');
            $table->string('image', 100);

            $table->uuid('uuid_user');
            $table->uuid('uuid_restaurant');
            $table->timestamps();

            $table->foreign('uuid_user')
                    ->references('uuid_user')
                    ->on('users')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

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
        Schema::dropIfExists('restaurant_reviews');
    }
};
