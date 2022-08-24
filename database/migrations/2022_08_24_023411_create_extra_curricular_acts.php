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
        Schema::create('extra_curricular_activities', function (Blueprint $table) {
            $table->foreignId('personal_info_id');
            $table->string('position_g7'); 
            $table->string('position_g8'); 
            $table->string('position_g9'); 
            $table->string('position_g10'); 
            $table->string('position_g11'); 
            $table->string('position_g12'); 
            $table->string('org/club_g7'); 
            $table->string('org/club_g8'); 
            $table->string('org/club_g9'); 
            $table->string('org/club_g10'); 
            $table->string('org/club_g11'); 
            $table->string('org/club_g12'); 

            $table->string('activity_g7'); 
            $table->string('activity_g8'); 
            $table->string('activity_g9'); 
            $table->string('activity_g10');
            $table->string('activity_g11'); 
            $table->string('activity_g12'); 
            $table->string('extent_activity_g7'); 
            $table->string('extent_activity_g8' );
            $table->string('extent_activity_g9' );
            $table->string('extent_activity_g10'); 
            $table->string('extent_activity_g11'); 
            $table->string('extent_activity_g12' );

            $table->string('award_g7'); 
            $table->string('award_g8'); 
            $table->string('award_g9'); 
            $table->string('award_g10'); 
            $table->string('award_g11'); 
            $table->string('award_g12');
            $table->string('activity_competition_g7'); 
            $table->string('activity_competition_g8'); 
            $table->string('activity_competition_g9'); 
            $table->string('activity_competition_g10'); 
            $table->string('activity_competition_g11'); 
            $table->string('activity_competition_g12'); 
            $table->string('classification_g7'); 
            $table->string('classification_g8'); 
            $table->string('classification_g9'); 
            $table->string('classification_g10'); 
            $table->string('classification_g11'); 
            $table->string('classification_g12');
            $table->timestamps();
        });
            
            //PARTICIPATION IN SEMINARS
            Schema::create('seminars', function (Blueprint $table){
            $table->string('title_g7'); 
            $table->string('title_g8'); 
            $table->string('title_g9'); 
            $table->string('title_g10'); 
            $table->string('title_g11'); 
            $table->string('title_g12'); 
            $table->string('sponsor_g7'); 
            $table->string('sponsor_g8'); 
            $table->string('sponsor_g9'); 
            $table->string('sponsor_g10'); 
            $table->string('sponsor_g11'); 
            $table->string('sponsor_g12'); 
            $table->string('scope_g7'); 
            $table->string('scope_g8'); 
            $table->string('scope_g9'); 
            $table->string( 'scope_g10'); 
            $table->string('scope_g11'); 
            $table->string('scope_g12'); 
            $table->string('nature_evolvement_b_g7'); 
            $table->string('nature_evolvement_b_g8'); 
            $table->string('nature_evolvement_b_g9'); 
            $table->string('nature_evolvement_b_g10'); 
            $table->string('nature_evolvement_b_g11');
            $table->string('nature_evolvement_b_g12');
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
        Schema::dropIfExists('extra_curricular_activities');
    }
};
