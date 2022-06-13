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
        Schema::create('host_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid_host_schedule', 35);
            $table->string('uuid_experience');
            $table->string('uuid_host');
            $table->string('uuid_user');
            $table->dateTime('start_date');
            $table->dateTime('end_time');
            $table->tinyInteger('tourist_amount');
            $table->tinyInteger('verification_status');
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
        Schema::dropIfExists('host_schedule');
    }
};
