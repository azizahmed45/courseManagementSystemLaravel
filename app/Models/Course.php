<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function classes()
    {
        return $this->hasMany(CourseClass::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
