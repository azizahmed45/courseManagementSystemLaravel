<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function courses()
    {
        $courses = Auth::user()->teacher->courses;

        return view('teacher.courses', ['courses' => $courses]);
    }

    public function dashboard()
    {
        return view('teacher.dashboard');
    }

    public function addCourse()
    {
        return view('teacher.add_course');
    }

    public function profile()
    {
        $teacher = Auth::user()->teacher;
        return view('teacher.profile', ['teacher' => $teacher]);
    }
}
