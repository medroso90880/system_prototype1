<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    public function personal_info(): BelongsTo
    {
        return $this->belongsTo(Personal_info::class, 'personal_info_id');
    }
}
