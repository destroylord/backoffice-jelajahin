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
        Schema::create('hosts', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid_experience');
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->text('address');
            $table->integer('price');
            $table->integer('duration');

            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->float('rating_avg');
            $table->integer('rating_count');
            $table->double('latitude');
            $table->double('longitude');
            $table->tinyInteger('accepted');
            $table->uuid('uuid_host');

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
        Schema::dropIfExists('hosts');
    }
};
