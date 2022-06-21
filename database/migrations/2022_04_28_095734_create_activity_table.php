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
        Schema::create('activity', function (Blueprint $table) {

            $table->uuid('uuid_activity')->primary();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->string('image', 100);
            $table->mediumInteger('price_min');
            $table->mediumInteger('price_max');
            $table->string('category');
            $table->float('latitude', 10,6);
            $table->float('longitude', 10, 6);

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
        Schema::dropIfExists('activity');
    }
};
