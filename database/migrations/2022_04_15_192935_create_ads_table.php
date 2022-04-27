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
        Schema::create('ads', function (Blueprint $table) {
            $table->uuid('uuid_ads');
            $table->tinyInteger('sequence');
            $table->string('action_type', 20);
            $table->text('action_value');
            $table->text('action_param');
            $table->string('image', 100);
            // Foreign key provincies and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->dateTime('display_date');
            $table->dateTime('end_date');
            $table->tinyInteger('radius_type');
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
        Schema::dropIfExists('ads');
    }
};
