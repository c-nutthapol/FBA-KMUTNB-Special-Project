<?php
use Illuminate\Support\Facades\Route;

// @Role: Students
Route::middleware("auth", "role:student")->group(function () {
    Route::name("student.")->group(function () {
        Route::prefix("project")
            ->name("project.")
            ->group(function () {
                // ข้อมูลทั่วไปหรือภาพรวมโครงงาน
                Route::get("/", App\Http\Livewire\Students\Project\Home::class)->name("home");
                // แนบเอกสาร
                Route::view("/attachment", "students.project.attachment")->name("attachment");
                // สร้างโครงงาน
                Route::get("/create", App\Http\Livewire\Students\Project\Create::class)->name("create");
                // แก้ไขโครงงาน
                Route::get("/edit", App\Http\Livewire\Students\Project\Edit::class)->name("edit");
            });
        // เขียนคำร้องทั่วไป
        Route::view("/petition", "students.petition")->name("petition");
        // ข้อเสนอแนะ
        Route::view("/suggestion/{id}", "students.suggestion")->name("suggestion");
        // ประวัติการส่งคำร้อง
        Route::view("/history", "students.history")->name("history");
    });
});
