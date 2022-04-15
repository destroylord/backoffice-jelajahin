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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('uuid_user')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->binary('image', 100)->nullable();
            $table->string('origin');
            $table->tinyInteger('adventure_level');
            $table->tinyInteger('total_apprecation');
            $table->tinyInteger('total_review');
            $table->tinyInteger('total_event');
            $table->tinyInteger('total_point');
            $table->tinyInteger('total_xp');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
