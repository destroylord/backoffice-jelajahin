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
        Schema::create('rooms', function (Blueprint $table) {
            $table->uuid('uuid_room')->primary();
            $table->string('name');
            $table->string('room_size', 7);
            $table->tinyInteger('price');
            $table->string('image', 100);
            $table->uuid('uuid_lodging')->comment('this name column is penginapan');

            $table->foreign('uuid_lodging')
                    ->references('uuid_lodging')
                    ->on('lodgings')
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
        Schema::dropIfExists('rooms');
    }
};
