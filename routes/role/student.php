<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// @Role: Students
Route::middleware("auth", "role:student")->group(function () {
    Route::name("student.")->group(function () {
        Route::prefix("project")
            ->name("project.")
            ->group(function () {
                Route::get("/get_student", [StudentController::class, "getStudent"]);
                Route::get("/get_teacher", [StudentController::class, "getTeacher"]);
                // ข้อมูลทั่วไปหรือภาพรวมโครงงาน
                Route::view("/", "students.project.index")->name("home");
                // แนบเอกสาร
                // Route::view("/attachment", "students.project.attachment")->name("attachment");
                // สร้างโครงงาน
                Route::view("/create", "students.project.create")->name("create");
                // แก้ไขโครงงาน
                // Route::get("/edit", App\Http\Livewire\Students\Project\Edit::class)->name("edit");
            });

        // เขียนคำร้องทั่วไป
        Route::view("/petition", "students.petition")->name("petition");
        // ประวัติการแนบไฟล์
        Route::view("/file", "students.file")->name("file");
        // ข้อเสนอแนะ
        Route::view("/suggestion", "students.suggestion")->name("suggestion");
        // ประวัติการส่งคำร้อง
        Route::view("/history", "students.history")->name("history");
    });
});
