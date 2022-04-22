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
        Schema::create('tours', function (Blueprint $table) {
            $table->uuid('uuid_tour')->primary();
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->mediumInteger('ticket_price_weekday');
            $table->mediumInteger('ticket_price_weekend');
            $table->text('address');
            $table->string('category');
            $table->float('latitude');
            $table->float('longtitude');
            $table->integer('rating_avg')->nullable();
            $table->integer('rating_count')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
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
        Schema::dropIfExists('tours');
    }
};
