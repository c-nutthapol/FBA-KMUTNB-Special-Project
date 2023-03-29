<?php

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
    // redirect('/project') สำหรับ Role = Students
    return redirect('/project');
});

Route::name('student.')->group(function () {

    Route::name('project.')->group(function () {

        Route::prefix('project')->group(function () {
            Route::view('/', 'students.project.index')->name('home');
            Route::view('/attachment', 'students.project.attachment')->name('attachment');
            Route::view('/suggestion', 'students.project.suggestion')->name('suggestion');

            Route::view('/edit', 'students.project.edit')->name('edit');
        });
    });

    Route::view('/petition', 'students.petition')->name('petition');
});
