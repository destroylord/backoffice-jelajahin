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
        Schema::create('menu_typicals', function (Blueprint $table) {
            $table->uuid('uuid_typical')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('origin', 50);
            $table->binary('image');

            // Foreign key provincies and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');
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
        Schema::dropIfExists('menu_typicals');
    }
};
