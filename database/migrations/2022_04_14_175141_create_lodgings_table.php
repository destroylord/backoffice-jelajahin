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
        Schema::create('lodgings', function (Blueprint $table) {
            $table->uuid('uuid_lodging')->primary();

            // Foreign Key Keeper
            $table->uuid('uuid_keepers');

            $table->string('name');
            $table->text('description');
            $table->tinyInteger('price_min');
            $table->tinyInteger('price_max');
            $table->string('image', 100);
            $table->smallInteger('hotel_star');
            $table->string('language', 50);
            $table->string('phone', 15);
            $table->string('website', 50);
            $table->string('email')->nullable();

            // Foreign key provincies and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->integer('rating_average');
            $table->integer('rating_service');
            $table->integer('rating_friendly');
            $table->integer('rating_clean');
            $table->integer('rating_count');
            $table->text('address');
            $table->float('latitude', 10, 6);
            $table->float('longtitude', 10, 6);

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
        Schema::dropIfExists('lodgings');
    }
};
