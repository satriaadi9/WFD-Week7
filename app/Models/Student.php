<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function unit():BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function studyPlans(): HasMany
    {
        return $this->hasMany(StudyPlan::class,);
    }
}
