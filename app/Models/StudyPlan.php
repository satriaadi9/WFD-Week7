<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyPlan extends Model
{
    use HasFactory;

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
