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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->uuid('uuid_restaurant')->primary();
            $table->string('name');

            // Foreign key keeper
            $table->uuid('uuid_keepers');

            $table->text('description');
            $table->text('address');
            $table->tinyInteger('price_min');
            $table->tinyInteger('price_max');
            $table->string('food_type', 100);
            $table->string('restaurant_type', 100);
            $table->string('phone', 13);
            $table->string('website', 50);
            $table->time('business_open', $precision = 0);
            $table->time('business_close', $precision = 0);
            $table->string('image', 100);
            $table->float('rating_averange');
            $table->float('rating_service');
            $table->float('rating_food');
            $table->float('rating_clean');
            $table->float('rating_count');
            // Foreign key provincies and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->float('latitude', 10, 6);
            $table->float('longtitude', 10, 6);
            $table->timestamps();


            $table->foreign('uuid_keepers')
                    ->references('uuid_keeper')
                    ->on('keepers')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('province_id')
                    ->references('id')
                    ->on('provincies')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
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
        Schema::dropIfExists('restaurants');
    }
};
