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
    Route::view('/account', 'auth.account')->name('account');
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
        // ลงทะเบียนโครงงาน
        Route::view('/', 'teacher.project.index')->name('home');
        // ยื่นขอสอบความก้าวหน้า
        Route::view('/progress', 'teacher.project.progress')->name('progress');
        // ยื่นขอสอบป้องกัน
        Route::view('/defense_exam', 'teacher.project.defense')->name('defense');
        // ยื่นส่งเล่ม
        Route::view('/book', 'teacher.project.book')->name('book');

        // รายละเอียดโครงงาน
        Route::view('/details', 'teacher.project.details')->name('details');
        // เสนอแนะ
        Route::view('/suggestion', 'teacher.project.suggestion')->name('suggestion');
    });
});

// @Role: Admin
Route::name('admin.')->prefix('admin')->group(function () {
    // อนุมัติคำร้องทั่วไป
    Route::view('/petition', 'admin.petition')->name('petition');

    Route::prefix('settings')->name('settings.')->group(function () {
        // ข้อมูลผู้ใช้งาน
        Route::view('/users', 'admin.settings.users')->name('users');
        // กำหนดสิทธิ์ผู้ใช้งาน
        Route::view('/users/permissions', 'admin.settings.users-permissions')->name('users-permissions');

        // ข้อเสนอแนะ
        Route::view('/suggestions', 'admin.settings.suggestions')->name('suggestions');
        // ภาคเรียน
        Route::view('/term', 'admin.settings.term')->name('term');
        // ขั้นตอนโครงงาน
        Route::view('/project-steps', 'admin.settings.project-steps')->name('project-steps');
        // แบนเนอร์
        Route::view('/banners', 'admin.settings.banners')->name('banners');
    });

    Route::prefix('logs')->name('logs.')->group(function () {
        // นักศึกษา
        Route::view('/students', 'admin.logs.students')->name('students');
        // อาจารย์
        Route::view('/teachers', 'admin.logs.teachers')->name('teachers');
        // ผู้ดูแลระบบ
        Route::view('/administrators', 'admin.logs.administrators')->name('administrators');
    });
});
