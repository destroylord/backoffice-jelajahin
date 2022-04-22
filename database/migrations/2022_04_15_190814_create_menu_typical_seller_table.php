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
        Schema::create('menu_typical_seller', function (Blueprint $table) {
            $table->uuid('uuid_typicals');
            $table->unsignedInteger('seller_id');
            $table->timestamps();


            $table->foreign('uuid_typicals')
                    ->references('uuid_typical')
                    ->on('menu_typicals')
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();

            $table->foreign('seller_id')
                    ->references('id')
                    ->on('sellers')
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
        Schema::dropIfExists('menu_typical_seller');
    }
};
