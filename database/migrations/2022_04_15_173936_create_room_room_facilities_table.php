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
        Schema::create('room_room_facilities', function (Blueprint $table) {
            $table->uuid('uuid_rooms');
            $table->unsignedInteger('room_facility');

            $table->foreign('uuid_rooms')
                    ->references('uuid_room')
                    ->on('rooms')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('room_facility')
                    ->references('id')
                    ->on('room_facilities')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

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
        Schema::dropIfExists('room_room_facilities');
    }
};
