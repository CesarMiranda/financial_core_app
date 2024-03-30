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
        Schema::create('movements', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 50);
            $table->bigInteger('id_movement_type');
            $table->double('amount');
            $table->string('note', 200)->nullable();
            $table->timestamps();

            $table->foreign('id_movement_type')->references('id')->on('movement_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movements');
    }
};
