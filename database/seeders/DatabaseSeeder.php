<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Educational_bg;
use App\Models\extra_curricular_act;
use App\Models\Health_physical_dev;
use App\Models\family_bg;
use App\Models\personal_info;
use App\Models\Psychological_test_profile;
use App\Models\Residence;
use App\Models\Social_profile;
use App\Models\Students_self_assessment;
use App\Models\Vocational_planning;
use Illuminate\Database\Seeder;

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

        $personal_info = Personal_info::factory()->create([
         ]); 

          Family_bg::factory()->create([
          'personal_info_id' => $personal_info->id
          ]);

          Health_physical_dev::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          Residence::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          Educational_bg::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          Social_profile::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);
          
          Students_self_assessment::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          extra_curricular_act::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          Vocational_planning::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);

          Psychological_test_profile::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);






        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //]);
    }
}
