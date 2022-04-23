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
        Schema::create('attraction_tours', function (Blueprint $table) {
            $table->uuid('uuid_attraction')->primary();
            $table->string('name', 50);
            $table->text('description');
            $table->string('image', 100);
            $table->string('price', 15);
            $table->uuid('uuid_tours');


            $table->foreign('uuid_tours')
                    ->references('uuid_tour')
                    ->on('tours')
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
        Schema::dropIfExists('attraction_tours');
    }
};
