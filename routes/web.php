<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

include_once "role/student.php";
include_once "role/teacher.php";
include_once "role/admin.php";
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

// Route::get('/', function () {
//     // redirect('/project') สำหรับ Role = Students
//     // return redirect('/project');
//     // redirect('/project') สำหรับ Role = Teacher
//     return redirect('/teacher/project');
// });

Route::name("auth.")->group(function () {
    Route::view("/login", "auth.login")->name("login");
    Route::get("/logout", function () {
        session()->flush();
        auth()->logout();
        return redirect()->route("auth.login");
    })->name("logout");

    Route::middleware("auth")->group(function () {
        Route::view("/account", "auth.account")->name("account");
    });
});

Route::middleware("auth")->group(function () {
    Route::view("/", "index")->name("home");

    // ดูข่าวสาร
    Route::get("/news/view/{id}", function (Request $request) {
        return view('news.view', ['id' => $request->id]);
    })->name("news.view");
});

Route::middleware("auth")->name('ckeditor.')->prefix('ckeditor')->group(function () {
    Route::post('image-upload', [App\Http\Controllers\UploadImageController::class, 'index'])->name('image-upload');
});

