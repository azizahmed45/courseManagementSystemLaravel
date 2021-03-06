<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/migrate', function () {

    return Artisan::call('migrate:fresh');
    return view('test');
///    $teacher = Teacher::query()->firstOrFail();
//
//    $courses = $teacher->courses;
//
//    return $courses[0];
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('student')->middleware('auth')->name('student.')->group(function(){
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [StudentController::class, 'profile'])->name('profile');
    Route::get('/courses', [StudentController::class, 'courses'])->name('courses');
    Route::post('/courses/join', [CourseController::class, 'join'])->name('joinCourse');
    Route::get('/courses/join', [StudentController::class, 'joinCourse'])->name('joinCourse');
    Route::get('/courses/{course}/students', [CourseController::class, 'students'])->name('courses.students');
    Route::get('/courses/{course}/assignments', [CourseController::class, 'assignments'])->name('courses.assignments');
});
Route::prefix('teacher')->middleware('auth')->name('teacher.')->group(function(){
    Route::get('/dashboard', [TeacherController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [TeacherController::class, 'profile'])->name('profile');
    Route::get('/courses', [TeacherController::class, 'courses'])->name('courses');
    Route::post('/courses/add', [CourseController::class, 'add'])->name('addCourse');
    Route::get('/courses/add', [TeacherController::class, 'addCourse'])->name('addCourse');
    Route::get('/courses/{course}/students', [CourseController::class, 'students'])->name('courses.students');
    Route::get('/courses/{course}/assignments', [CourseController::class, 'assignments'])->name('courses.assignments');
    Route::get('/courses/{course}/assignments/add', [AssignmentController::class, 'add'])->name('courses.addAssignment');
    Route::post('/courses/{course}/assignments/add', [AssignmentController::class, 'create'])->name('courses.addAssignment');

});
