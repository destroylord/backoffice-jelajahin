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
        Schema::create('transaction_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid_transaction_experience', 36);
            $table->text('image');
            $table->tinyInteger('tourist_amount');
            $table->dateTime('start_date');
            $table->tinyInteger('status');
            $table->string('uuid_experience', 36);
            $table->string('uuid_user');
            $table->tinyInteger('user_confirm_status');
            $table->dateTime('auto_confirm_transaction_date');
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
        Schema::dropIfExists('transaction_experiences');
    }
};
