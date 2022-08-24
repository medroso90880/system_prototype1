<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Residence;
use App\Models\PersonalInfo;
use App\Models\SocialProfile;
use Illuminate\Database\Seeder;
use App\Models\FamilyBackground;
use App\Models\HealthPhysicalDev;
use App\Models\VocationalPlanning;
use App\Models\EducationalBackground;
use App\Models\StudentsSelfAssessment;
use App\Models\PsychologicalTestProfile;
use App\Models\ExtraCurricularActivities;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(5)->create();


        $PersonalInfo = PersonalInfo::factory()->create(); 

        EducationalBackground::factory()->create([
          'personal_info_id' => $PersonalInfo->id
        ]);

        $user = User::create([
          'name' =>  'jemuel',
          'password' => 'hello',
          'email' => 'medzjem@gmail.com',
          'position' => 'admin'          
          ]);

          HealthPhysicalDev::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

          Residence::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

          SocialProfile::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);
          
          StudentsSelfAssessment::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

          ExtraCurricularActivities::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

          VocationalPlanning::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

          PsychologicalTestProfile::factory()->create([
            'personal_info_id' => $PersonalInfo->id
          ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //]);
    }
}
