<?php

use App\Http\Controllers\StudentController;
use App\Models\User;
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
                Route::get("/", App\Http\Livewire\Students\Project\Home::class)->name("home");
                // แนบเอกสาร
                // Route::view("/attachment", "students.project.attachment")->name("attachment");
                // สร้างโครงงาน
                Route::get("/create", App\Http\Livewire\Students\Project\Create::class)->name("create");
                // แก้ไขโครงงาน
                Route::get("/edit", App\Http\Livewire\Students\Project\Edit::class)->name("edit");
            });

        // เขียนคำร้องทั่วไป
        Route::get("/petition", App\Http\Livewire\Students\Petition::class)->name("petition");
        // ข้อเสนอแนะ
        Route::get("/suggestion", App\Http\Livewire\Students\Suggestion::class)->name("suggestion");
        // ประวัติการส่งคำร้อง
        Route::get("/history", App\Http\Livewire\Students\History::class)->name("history");
    });
});
