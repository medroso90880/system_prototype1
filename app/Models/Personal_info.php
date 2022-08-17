<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Personal_info extends Model
{
    use HasFactory;

    public function family_bg() {
        return $this->hasMany(Family_bg::class, 'personal_info_id');
    }
    public function healh_physical_dev() {
        return $this->hasMany(Health_physical_dev::class, 'personal_info_id');
    }
    public function residence() {
        return $this->hasMany(Residence::class, 'personal_info_id');
    }
    public function educational_bg() {
        return $this->hasMany(Educational_bg::class, 'personal_info_id');
    }
    public function social_profile() {
        return $this->hasMany(Social_profile::class, 'personal_info_id');
    }
    public function students_self_assessment() {
         return $this->hasMany(Student_self_assessment::class, 'personal_info_id');
    }
    public function extra_curricular_act() {
        return $this->hasMany(Extra_curricular_act::class, 'personal_info_id');
    }
    public function vocational_planning() {
        return $this->hasMany(Vocational_planning::class, 'personal_info_id');
    }
    public function psychological_test_profile() {
        return $this->hasMany(Psychological_test_profile::class, 'personal_info_id');
    }
}
