<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class);
    }

    public function mark()
    {
        return $this->belongsTo(ExamMark::class);
    }
}
