<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ResultsController;
use App\Models\Courses;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //Route for our students
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    //Route for courses
    Route::get('/courses/create',[CoursesController::class,'create'])->name('courses.create');
    Route::post('/courses/store',[CoursesController::class,'store'])->name('courses.store');
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
    Route::get('/courses/{Courses}', [CoursesController::class, 'show'])->name('courses.show');
    Route::get('/courses/{Courses}/edit', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{id}', [CoursesController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');

    //Route for faculty
    Route::get('/faculty/create',[FacultiesController::class,'create'])->name('faculty.create');
    Route::post('/faculty/store',[FacultiesController::class,'store'])->name('faculty.store');
    Route::get('/faculty', [FacultiesController::class, 'index'])->name('faculty.index');
    Route::get('/faculty/{Faculty}', [FacultiesController::class, 'show'])->name('faculty.show');
    Route::get('/faculty/{Faculty}/edit', [FacultiesController::class, 'edit'])->name('faculty.edit');
    Route::put('/faculty/{id}', [FacultiesController::class, 'update'])->name('faculty.update');
    Route::delete('/faculty/{id}', [FacultiesController::class, 'destroy'])->name('faculty.destroy');

    //Route for enrollment
    Route::get('/enrollment/create',[EnrollmentController::class,'create'])->name('enrollment.create');
    Route::post('/enrollment/store',[EnrollmentController::class,'store'])->name('enrollment.store');
    Route::get('/enrollment', [EnrollmentController::class, 'index'])->name('enrollment.index');
    Route::get('/enrollment/{Enrollment}', [EnrollmentController::class, 'show'])->name('enrollment.show');
    Route::get('/enrollment/{Enrollment}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');
    Route::put('/enrollment/{id}', [EnrollmentController::class, 'update'])->name('enrollment.update');
    Route::delete('/enrollment/{id}', [EnrollmentController::class, 'destroy'])->name('enrollment.destroy');

    //Route for result
    Route::get('/results/create',[ResultsController::class,'create'])->name('results.create');
    Route::post('/results/store',[ResultsController::class,'store'])->name('results.store');
    Route::get('/results', [ResultsController::class, 'index'])->name('results.index');
    Route::get('/results/{Results}', [ResultsController::class, 'show'])->name('results.show');
    Route::get('/results/{Results}/edit', [ResultsController::class, 'edit'])->name('results.edit');
    Route::put('/results/{id}', [ResultsController::class, 'update'])->name('results.update');
    Route::delete('/results/{id}', [ResultsController::class, 'destroy'])->name('results.destroy');
    



    Route::post('/logout', function () {
        auth()->logout();
        return redirect('/'); // Redirect to homepage or login page
    })->name('logout');
});

require __DIR__.'/auth.php';
