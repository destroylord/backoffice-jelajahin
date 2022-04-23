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
        Schema::create('menus', function (Blueprint $table) {
            $table->uuid('uuid_menu')->primary();
            $table->uuid('uuid_restaurants');
            $table->string('name');
            $table->text('description');
            $table->string('image', 100);
            $table->tinyInteger('price');
            $table->string('category');
            $table->timestamps();

            $table->foreign('uuid_restaurants')
                    ->references('uuid_restaurant')
                    ->on('restaurants')
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
        Schema::dropIfExists('menus');
    }
};
