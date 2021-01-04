<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function types()
    {
        return $this->hasOne(ExamType::class);
    }

    public function answers()
    {
        return $this->hasMany(ExamAnswer::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
