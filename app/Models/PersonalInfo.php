<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PersonalInfo extends Model
{
    use HasFactory;

    public function FamilyBackground() {
        return $this->hasMany(FamilyBackground::class, 'personal_info_id');
    }
    public function healh_physical_dev() {
        return $this->hasMany(HealthPhysicalDev::class, 'personal_info_id');
    }
    public function residence() {
        return $this->hasMany(Residence::class, 'personal_info_id');
    }
    public function EducationalBackground() {
        return $this->hasMany(EducationalBackground::class, 'personal_info_id');
    }
    public function SocialProfile() {
        return $this->hasMany(SocialProfile::class, 'personal_info_id');
    }
    public function StudentsSelfAssessment() {
         return $this->hasMany(student-self-assessment::class, 'personal_info_id');
    }
    public function ExtraCurricularActivities() {
        return $this->hasMany(ExtraCurricularActivities::class, 'personal_info_id');
    }
    public function VocationalPlanning() {
        return $this->hasMany(VocationalPlanning::class, 'personal_info_id');
    }
    public function PsychologicalTestProfile() {
        return $this->hasMany(PsychologicalTestProfile::class, 'personal_info_id');
    }

    
    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('first_name','like','%' . request('search') . '%');  
        }
    }
}
