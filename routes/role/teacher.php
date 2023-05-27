<?php
use Illuminate\Support\Facades\Route;

// @Role: Teacher
Route::middleware("auth", "role:teacher")->group(function () {
    Route::name("teacher.")
        ->prefix("teacher")
        ->group(function () {
            // อนุมัติคำร้องทั่วไป
            Route::view("/petition", "teacher.petition.index")->name("petition");

            Route::prefix("project")
                ->name("project.")
                ->group(function () {
                    // ลงทะเบียนโครงงาน
                    Route::view("/", "teacher.project.index")->name("home");
                    // ลงทะเบียนเพื่อขอสอบหัวข้อ
                    Route::view("/topic", "teacher.project.topic")->name("topic");
                    // ยื่นขอสอบความก้าวหน้า
                    Route::view("/progress", "teacher.project.progress")->name("progress");
                    // ยื่นขอสอบป้องกัน
                    Route::view("/defense_exam", "teacher.project.defense")->name("defense");
                    // ยื่นส่งเล่ม
                    Route::view("/book", "teacher.project.book")->name("book");
                    // รายละเอียดโครงงาน
                    Route::view("/details/{id}", "teacher.project.details")->name("details");
                    // เสนอแนะ
                    Route::view("/suggestion", "teacher.project.suggestion")->name("suggestion");
                });
        });
});
