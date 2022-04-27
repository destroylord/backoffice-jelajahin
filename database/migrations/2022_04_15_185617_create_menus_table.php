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
            $table->uuid('uuid_restaurant');
            $table->string('name');
            $table->text('description');

            $table->binary('image');
            $table->integer('price');

            $table->string('category');
            $table->timestamps();

            $table->foreign('uuid_restaurant')
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
