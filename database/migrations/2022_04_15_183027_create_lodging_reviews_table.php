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
        Schema::create('lodging_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->smallInteger('rating_service');
            $table->smallInteger('rating_friendly');
            $table->smallInteger('rating_clean');
            $table->binary('image');
            $table->uuid('uuid_users');
            $table->uuid('uuid_lodgings');
            $table->timestamps();

            $table->foreign('uuid_users')
                    ->references('uuid_user')
                    ->on('users')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('uuid_lodgings')
                    ->references('uuid_lodging')
                    ->on('lodgings')
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
        Schema::dropIfExists('lodging_reviews');
    }
};