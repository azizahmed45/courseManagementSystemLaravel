<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function courses()
    {
        $courses = Auth::user()->student->courses;

        return view('student.courses', ['courses' => $courses]);
    }

    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function joinCourse()
    {
        return view('student.join_course');
    }

    public function profile()
    {
        $student = Auth::user()->student;
        return view('student.profile', ['student' => $student]);
    }
}
