<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class);
    }

    public function answers()
    {
        return $this->hasMany(AssignmentAnswer::class);
    }
}
