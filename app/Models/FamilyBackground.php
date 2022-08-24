<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
    //protected $table = "FamilyBackground";
    use HasFactory;

        public function PersonalInfo() {
            return $this->belongsTo(PersonalInfo::class, 'personal_info_id');
        }
}
