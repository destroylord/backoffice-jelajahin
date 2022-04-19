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
            $table->uuid('uuid_keepers')->nullable();

            $table->string('name');
            $table->text('description');
            $table->mediumInteger('price_min');
            $table->mediumInteger('price_max');
            $table->binary('image');
            $table->smallInteger('hotel_star')->nullable();
            $table->string('language', 50)->nullable();
            $table->string('phone', 15);
            $table->string('website', 50);
            $table->string('email')->nullable();

            // Foreign key provincies and city
            $table->unsignedInteger('province_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();

            $table->integer('rating_average')->nullable();
            $table->integer('rating_service')->nullable();
            $table->integer('rating_friendly')->nullable();
            $table->integer('rating_clean')->nullable();
            $table->integer('rating_count')->nullable();
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
