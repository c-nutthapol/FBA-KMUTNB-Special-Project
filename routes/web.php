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
    // return redirect('/project');
    // redirect('/project') สำหรับ Role = Teacher
    return redirect('/teacher/project');
});

Route::name('auth.')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
});

Route::view('/', 'index')->name('home');

// @Role: Students
Route::name('student.')->group(function () {

    Route::prefix('project')->name('project.')->group(function () {
        // ข้อมูลทั่วไปหรือภาพรวมโครงงาน
        Route::view('/', 'students.project.index')->name('home');
        // แนบเอกสาร
        Route::view('/attachment', 'students.project.attachment')->name('attachment');
        // สร้างโครงงาน
        Route::view('/create', 'students.project.create')->name('create');
        // แก้ไขโครงงาน
        Route::view('/edit', 'students.project.edit')->name('edit');
    });
    // เขียนคำร้องทั่วไป
    Route::view('/petition', 'students.petition')->name('petition');
    // ข้อเสนอแนะ
    Route::view('/suggestion', 'students.suggestion')->name('suggestion');
    // ประวัติการส่งคำร้อง
    Route::view('/history', 'students.history')->name('history');
});

// @Role: Teacher
Route::name('teacher.')->prefix('teacher')->group(function () {
    Route::prefix('project')->name('project.')->group(function () {
        // โครงงานที่รับผิดชอบ
        Route::view('/', 'teacher.project.index')->name('home');
        // รายละเอียดโครงงาน
        Route::view('/details', 'teacher.project.details')->name('details');
        // เสนอแนะ
        Route::view('/suggestion', 'teacher.project.suggestion')->name('suggestion');
    });
    // เสนอแนะ
    Route::view('/petition', 'teacher.petition')->name('petition');
});

// @Role: Admin
Route::name('admin.')->prefix('admin')->group(function () {
    Route::prefix('project')->name('project.')->group(function () {
        // โครงงานที่รับผิดชอบ
        Route::view('/', 'admin.project.index')->name('all');
    });

    Route::prefix('settings')->name('settings.')->group(function () {
        // กำหนดสิทธิ์ผู้ใช้งาน
        Route::view('/permissions', 'admin.settings.permissions')->name('permissions');
        // ข้อมูลผู้ใช้งาน
        Route::view('/users', 'admin.settings.users')->name('users');
        // ข้อเสนอแนะ
        Route::view('/suggestions', 'admin.settings.suggestions')->name('suggestions');
    });
});
