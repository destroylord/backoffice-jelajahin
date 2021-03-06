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
        Schema::create('travel_review', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->tinyInteger('rating');
            $table->string('image', 100);
            $table->uuid('uuid_user');
            $table->uuid('uuid_tour');


            $table->foreign('uuid_user')
                    ->references('uuid_user')
                    ->on('users')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('uuid_tour')
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
        Schema::dropIfExists('travel_review');
    }
};
