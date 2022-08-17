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
        //creating table for personal information
        Schema::create('personal_infos', function (Blueprint $table) 
        {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('sex');
            $table->string('contact_number');
            $table->string('religion');
            $table->string('email');
            $table->string('cell_number');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('permanent_add');
            $table->timestamps();
        });

        //creating table for family back ground
        Schema::create('family_bgs', function (Blueprint $table)
        {
            $table->foreignId('personal_info_id');
            $table->string('name_father');
            $table->string('name_mother');
            $table->integer('age_father');
            $table->integer('age_mother');
            $table->string('educational_attain_father');
            $table->string('educational_attain_mother');
            $table->string('school_attended_father');
            $table->string('school_attended_mother');
            $table->string('occupation_father');
            $table->string('occupation_mother');
            $table->string('company_add_father');
            $table->string('company_add_mother');
            $table->string('contact_number_father');
            $table->string('contact_number_mother');
            $table->string('marital_status');
            $table->string('name_sibling');
            $table->integer('age_sibling');
            $table->string('educational_attain_sibling');
            $table->string('school_attended_sibling');
            $table->string('occupation_sibling');
            $table->timestamps();
        });

        //creating table for health and physical development
        Schema::create('health_physical_devs', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('height');
            $table->string('weight');
            $table->string('sight');
            $table->string('hearing');
            $table->string('speech');
            $table->string('general_health');
            $table->string('question_a1');
            $table->string('question_a2')->nullable();
            $table->string('question_b1');
            $table->string('question_b2')->nullable();
            $table->timestamps();
        });

        //creating table for Residence
        Schema::create('residences', function (Blueprint $table) {
            $table->foreignId('personal_info_id');
            $table->integer('family_home');
            $table->integer('guardians_home');
            $table->string('school_dormitory');
            $table->string('others_a');
            $table->integer('public_transport');
            $table->integer('family_vehicle');
            $table->integer('car-pool');
            $table->integer('services');
            $table->string('others_b');
            $table->string('question_a');
            $table->timestamps();
        });

        //creating table for educational background
        Schema::create('educational_bg', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('school_last_attended');
            $table->string('public/private');
            $table->string('school_address');
            $table->string('coed/exclusive');
            $table->string('honors/awards_received');
            $table->string('sectarian/non-sect');
        //
            $table->string('grade_level');
            $table->string('section');
            $table->string('scholarship_status');
            $table->string('academic_status');
        //
            $table->string('subject_like_best');
            $table->string('subject_like_least');
            $table->string('subject_find_difficult');
            $table->string('subject_learned_most');
            $table->string('subject_learned_least');
            $table->string('subject_taught_best');
            $table->string('subject_taught_worst');
        });

        //creating database for social profile
        Schema::create('social_profiles', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->integer('friends_same_age');
            $table->integer('friends_older');
            $table->integer('friends_younger');
            $table->integer('friends_boys');
            $table->integer('friends_girls');
            $table->integer('friend_other_school');
            $table->integer('friend_this_school');
            $table->longText('list_friends');
            $table->longText('list_talents_hobbies'); 
            $table->timestamps();
        });

        //creating table for students self-assessment
        Schema::create('students_self_assessments', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->integer('physical_well_being');
            $table->integer('mental_comprehension');
            $table->integer('speech_english');
            $table->integer('speech_filipino');
            $table->integer('written_communication_skills');
            $table->integer('personality');
            $table->integer('character');
            $table->longText('general_make_up');
            $table->string('statement_1');
            $table->string('statement_2');
            $table->string('statement_3');
            $table->string('statement_4');
            $table->string('statement_5');
            $table->string('statement_6');
            $table->string('statement_7');
            $table->string('statement_8');
            $table->string('statement_9');
            $table->string('statement_10');
            $table->timestamp();  
        });

        //creating table for extra curricular activities
        Schema::create('extra_curricular_acts', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            //postition held in school
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
            //involvement in activities
            $table->string('activity_g7');
            $table->string('activity_g8');
            $table->string('activity_g9');
            $table->string('activity_g10');
            $table->string('activity_g11');
            $table->string('activity_g12');
            $table->string('extent_activity_g7');
            $table->string('extent_activity_g8');
            $table->string('extent_activity_g9');
            $table->string('extent_activity_g10');
            $table->string('extent_activity_g11');
            $table->string('extent_activity_g12');
            $table->string('nature_evolvement_a_g7');
            $table->string('nature_evolvement_a_g8');
            $table->string('nature_evolvement_a_g9');
            $table->string('nature_evolvement_a_g10');
            $table->string('nature_evolvement_a_g11');
            $table->string('nature_evolvement_a_g12');
            //special academic honors awards/distinctions received
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
            //participation in seminars/conferences/contest/competitions
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
            $table->string('scope_g10');
            $table->string('scope_g11');
            $table->string('scope_g12');
            $table->string('nature_evolvement_b_g7');
            $table->string('nature_evolvement_b_g8');
            $table->string('nature_evolvement_b_g9');
            $table->string('nature_evolvement_b_g10');
            $table->string('nature_evolvement_b_g11');
            $table->string('nature_evolvement_b_g12');
            $table->timestamp();
        });

        //creating table for vocational planning
        Schema::create('vocational_plannings', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->longText('1st');
            $table->longText('2nd');
        });

        //creating table for psychological test profile
        Schema::create('psychological_test_profiles', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            //mental
            $table->longText('culture fair');
            $table->longText('olmat');
            //aptitude
            $table->string('raw_score_a');
            $table->string('percentile_a');
            $table->string('description_a');
            //study habits and attitudes
            $table->string('raw_score_b');
            $table->string('percentile_b');
            $table->string('description_b');
            //problem checklist
            $table->string('grade7');
            $table->string('grade8');
            $table->string('grade9');
            $table->string('grade10');
            $table->string('grade11');
            $table->string('grade12');
            //personality
            $table->integer('reserve');
            $table->integer('less_inteligent');
            $table->integer('affected by feelings');
            $table->integer('phlegmatic');
            $table->integer('obedient');
            $table->integer('discregards_rules');
            $table->integer('shy');
            $table->integer('tough_minded');
            $table->integer('sober');
            $table->integer('vigorous');
            $table->integer('self_assured');
            $table->integer('group_dependent');
            $table->integer('casual');
            $table->integer('relaxed');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
        Schema::dropIfExists('family_bgs');
        Schema::dropIfExists('health_physical_devs');
        Schema::dropIfExists('residences');
        Schema::drapIfExists('social_profiles');
        Schema::dropIfExists('educational_bgs');
        Schema::dropIfExists('students_self_assessments');
        Schema::dropIfExists('extra_curricular_acts');
        Schema::dropIfExists('vocational_plannings');
        Schema::dropIfExists('psychological_test_profiless');
    }
};
