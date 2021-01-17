<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AssignmentController extends Controller
{
    public function add(Course $course)
    {
        return view('teacher.add_assignment', ['course' => $course]);
    }

    public function Create(Course $course, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'full_marks' => ['required', 'numeric']
        ]);

        $course->assignments()->create([
            'title' => $request['title'],
            'description' => $request['description'],
            'full_marks' => $request['full_marks']
        ]);

        return Redirect::route('teacher.courses.assignments', [$course]);
    }
}
