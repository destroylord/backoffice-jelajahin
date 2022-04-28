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
        Schema::create('gallery_lodgings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image', 100);
            $table->uuid('uuid_lodging');
            $table->timestamps();

            $table->foreign('uuid_lodging')
                    ->references('uuid_lodging')
                    ->on('lodgings')
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
        Schema::dropIfExists('gallery_lodgings');
    }
};
