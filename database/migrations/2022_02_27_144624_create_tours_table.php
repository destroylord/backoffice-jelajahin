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
            $table->string('name', 100);
            $table->text('description');
            $table->blob('image');
            $table->smallInteger('ticket_price_weekday');
            $table->text('address');
            $table->string('category');
            $table->float('latitude', 10,6);
            $table->float('longtitude', 10, 6);
            $table->float('rating_avg');
            $table->tinyInteger('rating_count');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
            $table->timestamps($precision = 0);


            $table->foreign('province_id')
                        ->references('id')
                        ->on('provincies')
                        ->cascadeOnUpdate()
                        ->cascadeOnDelete();
            $table->foreign('city_id')
                        ->references('id')
                        ->on('cities')
                        ->cascadeOnDelete()
                        ->cascadeOnUpdate();

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
