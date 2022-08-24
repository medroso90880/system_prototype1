<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychologicalTestProfile extends Model
{
    use HasFactory;

    public function PersonalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'personal_info_id');
    }
}
