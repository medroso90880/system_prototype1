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
        Schema::create('residences', function (Blueprint $table) {
            $table->foreignId('personal_info_id');
            $table->integer('family_home');
            $table->integer('guardians_home');
            $table->integer('school_dormitory');
            $table->string('others_a');
            $table->integer('public_transport');
            $table->integer('family_vehicle');
            $table->integer('car_pool');
            $table->integer('services');
            $table->string('others_b');
            $table->string('question');
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
        Schema::dropIfExists('residences');
    }
};
