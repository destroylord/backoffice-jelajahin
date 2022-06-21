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
        Schema::create('hidden_gems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('image', 100);
            $table->integer('xp_reward');
            $table->float('latitude', 10,6);
            $table->float('longitude', 10,6);

            // Foreign key provinces and city
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('city_id');

            $table->timestamps();

            $table->foreign('province_id')
                    ->references('id')
                    ->on('provinces')
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
        Schema::dropIfExists('hidden_gems');
    }
};
