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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('driver_id');
            $table->integer('kidsdriv');
            $table->integer('age');
            $table->integer('income');
            $table->string('mstatus');
            $table->string('gender');
            $table->string('education');
            $table->string('occupation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};