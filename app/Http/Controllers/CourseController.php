<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function students(Course $course)
    {
        return view('common.students', ['course' => $course]);
    }

    public function join(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'invitation_code' => ['required']
            ]
        );


        $course = Course::query()->where('invite_code', $request['invitation_code'])->first();

        if ($course) {
            $student = Auth::user()->student;
            if($student->courses()->find($course->id)){
                $validator->getMessageBag()->add('already_joined', 'You are already joined in this course');
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $course->students()->attach($student->id);

        } else {
            $validator->getMessageBag()->add('invitation_code', 'Invalid Validation Code');
            return Redirect::back()->withErrors($validator)->withInput();
        }

        return Redirect::route('student.courses');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'course_code' => ['required']
        ]);

        Auth::user()->teacher->courses()->create([
            'name' => $request['name'],
            'course_code' => $request['course_code'],
            'invite_code' => strtoupper(Str::random(8))
        ]);

        return Redirect::route('teacher.courses');
    }
}
