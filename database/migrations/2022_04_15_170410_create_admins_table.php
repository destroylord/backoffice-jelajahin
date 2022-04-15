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
        Schema::create('admins', function (Blueprint $table) {
            $table->uuid('uuid_admin')->primary();
            $table->string('name');
            $table->string('email', 40)->unique();
            $table->string('username',20);
            $table->string('phone', 13);
            $table->enum('gender', ['male', 'female']);
            $table->string('position')->comment('this column jabatan');
            $table->string('password');
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
        Schema::dropIfExists('admins');
    }
};
