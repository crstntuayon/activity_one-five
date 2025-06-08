<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AuthCheck;


Route::get('/', function () {
    return redirect('/login');
});

// Auth
//Login
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');

// Register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('auth.register');
Route::post('/user-register', [AuthController::class, 'userRegister'])->name('auth.userRegister');

Route::middleware([AuthCheck::class])->group(function () {


    // View
    Route::get('/students/view', [StudentsController::class, 'myView'])->name('std.myView');
    // Create
    Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');
    // PUT
    Route::get('/student/update/{id}', [StudentsController::class, 'updateView'])->name('std.updateView');
    Route::post('/update', [StudentsController::class, 'updateME'])->name('std.studentUpdate');
    // DELETE
    Route::get('/delete/{id}', [StudentsController::class, 'deleteME'])->name('std.studentDelete');
    
   
// Search Students from list
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');  // Protected
Route::get('/students/search', [StudentsController::class, 'search'])->name('students.search');  // Protected



    
   
    // Logout
  Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

});


