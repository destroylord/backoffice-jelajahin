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
        Schema::create('lodging_hotel_facility', function (Blueprint $table) {
            $table->uuid('uuid_lodgings');
            $table->unsignedInteger('hotel_facility_id');
            $table->timestamps();

            $table->foreign('uuid_lodgings')
                    ->references('uuid_lodging')
                    ->on('lodgings')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('hotel_facility_id')
                    ->references('id')
                    ->on('hotel_facilities')
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
        Schema::dropIfExists('lodging_hotel_facility');
    }
};
