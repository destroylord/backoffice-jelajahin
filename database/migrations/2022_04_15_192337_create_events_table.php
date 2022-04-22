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
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('uuid_event')->primary();
            $table->string('name');
            $table->text('description');
            $table->binary('image');
            $table->text('address');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('ticket_price');
            // Foreign key provincies and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->tinyInteger('point_reward');
            $table->tinyInteger('xp_reward');
            $table->float('latitude', 10, 6);
            $table->float('longtitude', 10, 6);
            $table->boolean('is_free');
            $table->timestamps();


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
        Schema::dropIfExists('events');
    }
};
