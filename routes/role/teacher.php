<?php
use Illuminate\Support\Facades\Route;

// @Role: Teacher
Route::middleware("auth", "role:teacher")->group(function () {
    Route::name("teacher.")
        ->prefix("teacher")
        ->group(function () {
            // อนุมัติคำร้องทั่วไป
            Route::view("/petition", "teacher.petition.index")->name("petition");

             // โครงงานทั้งหมด
            Route::view("/allproject", "students.allproject")->name("allproject");

            // ดาวน์โหลดแบบฟอร์ม
            Route::view("/document", "students.document")->name("document");

            Route::prefix("project")
                ->name("project.")
                ->group(function () {
                    // ลงทะเบียนโครงงาน
                    Route::view("/", "teacher.project.index")->name("home");
                    // ลงทะเบียนเพื่อขอสอบหัวข้อ
                    Route::view("/topic", "teacher.project.topic")->name("topic");
                    // ยื่นขอสอบความก้าวหน้า
                    Route::view("/progress", "teacher.project.progress")->name("progress");
                    // ผล
                    Route::view("/progressresult", "teacher.project.progressresult")->name("progressresult");
                    // ยื่นขอสอบป้องกัน
                    Route::view("/defense_exam", "teacher.project.defense")->name("defense");
                    // ผล
                    Route::view("/defenseresult", "teacher.project.defenseresult")->name("defenseresult");
                    // ยื่นส่งเล่ม
                    Route::view("/book", "teacher.project.book")->name("book");
                    // รายละเอียดโครงงาน
                    Route::view("/details/{id?}", "teacher.project.details")->name("details");
                    // เสนอแนะ
                    Route::view("/suggestion/{id?}", "teacher.project.suggestion")->name("suggestion");

                });
        });
});
