<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/students');
});

// Auth



    // View
    Route::get('/students', [StudentsController::class, 'myView'])->name('std.myView');
    // Create
    Route::post('/add-new', [StudentsController::class, 'addNewStudent'])->name('std.addNewStudent');
    // PUT
    Route::get('/student/update/{id}', [StudentsController::class, 'updateView'])->name('std.updateView');
    Route::post('/update', [StudentsController::class, 'updateME'])->name('std.studentUpdate');
    // DELETE
    Route::get('/delete/{id}', [StudentsController::class, 'deleteME'])->name('std.studentDelete');
    
    use App\Http\Controllers\YourController; // Replace with actual controller



    
   
    // Logout
  


