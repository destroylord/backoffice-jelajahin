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
            $table->uuid('uuid_host')->unique();
            $table->string('full_name');
            $table->string('headline');
            $table->text('description');
            $table->text('image')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->text('address');
            $table->integer('status');

            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->string('verified_date')->nullable();

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
