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
        Schema::create('history_points', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid_users');
            $table->integer('quantity_points');
            $table->integer('quantity_xp');
            $table->tinyInteger('type');
            $table->timestamps();

            $table->foreign('uuid_users')
                    ->references('uuid_user')
                    ->on('users')
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
        Schema::dropIfExists('history_points');
    }
};
