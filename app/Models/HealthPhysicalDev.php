<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthPhysicalDev extends Model
{
    //protected $table = 'HealthPhysicalDev';
    use HasFactory;

    public function PersonalInfo() {
        return $this->belongsTo(Listing::class, 'personal_info_id');
    }
}
