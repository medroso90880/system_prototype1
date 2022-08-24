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
        Schema::create('psychological_test_profiles', function (Blueprint $table) {
            $table->ForeignId('personal_info_id');
            $table->string('culture_fair');
            $table->string('olmat');
            $table->string('raw_score_a');
            $table->string('percentile_a');
            $table->string('description_a');
            $table->string('raw_score_b');
            $table->string('percentile_b');
            $table->string('description_b');
            $table->string('grade7');
            $table->string('grade8');
            $table->string('grade9');
            $table->string('grade10');
            $table->string('grade11');
            $table->string('grade12');
            $table->integer('reserve');
            $table->integer('less_intelligent');
            $table->integer('affected_by_feelings');
            $table->integer('phlegmatic');
            $table->integer('obedient');
            $table->integer('disregards_rules');
            $table->integer('shy');
            $table->integer('tough_minded');
            $table->integer('sober');
            $table->integer('vigorous');
            $table->integer('self_assured');
            $table->integer('group_dependent');
            $table->integer('casual');
            $table->integer('relaxed');
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
        Schema::dropIfExists('psychological_test_profiles');
    }
};
