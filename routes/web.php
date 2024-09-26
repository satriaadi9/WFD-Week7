<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Models\Course;

Route::get('/', function () {
    return view('lara');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//cara1 get untuk return sebuah view
// Route::get('/hello',function(){
//     return view('hello');
// });

//cara2 view saja tanpa return sesuatu
Route::view('/hello','hello');

Route::get('/halo', function(){
    return "Ini return dari route tanpa view";
});

//route untuk memanggil class controller
Route::get('/hello/index', [FirstController::class,'index']);

//Route Parameter 1
Route::get('/hello/index2/{param}', [FirstController::class,'index2']);

//Route Parameter 2 (opsional)
Route::get('/hello/index3/{param?}', [FirstController::class,'index3']);

//Route Parameter 3 (1 wajib - 1 opsional)
Route::get('/hello/index4/{param1}/{param2?}', [FirstController::class,'index4']);

//Route untuk memanggil Home Controller yang akan return sbuah view
Route::get('/home/index/{param1}/{param2?}', [HomeController::class, 'index']);

Route::get('/tail', function(){
    return view('tail');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/courses', function(){
    return view('courses', ['courses'=>Course::all()]);
});

// Route::get('/course/{course:id}', function(Course $course){
//     //eager loading 
//     $course->load(['unit', 'students']);
//     $studentCount = $course->studentCount();
//     return view('course', 
//     ['course'=>$course,
//     'students'=> $course->students,
//     'studentCount'=> $studentCount
//     ]
//     );
// });

Route::get('/course/{course:id}', [CourseController::class, 'show']);