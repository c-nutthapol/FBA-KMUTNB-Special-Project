<?php

use Illuminate\Support\Facades\Route;

// @Role: Admin
Route::middleware("auth", "role:admin")->group(function () {
    Route::name("admin.")
        ->prefix("admin")
        ->group(function () {
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

            // อนุมัติคำร้องทั่วไป
            Route::view("/petition", "admin.petition")->name("petition");

            Route::prefix("settings")
                ->name("settings.")
                ->group(function () {
                    // ข้อมูลผู้ใช้งาน
                    Route::view("/users", "admin.settings.users")->name("users");
                    // กำหนดสิทธิ์ผู้ใช้งาน
                    Route::view("/users/permissions", "admin.settings.users-permissions")->name("users-permissions");

                    // ข้อเสนอแนะ
                    Route::view("/suggestions", "admin.settings.suggestions")->name("suggestions");
                    // อนุมัติคำร้องทั่วไป
                    Route::view("/petition", "admin.settings.petition")->name("petition");
                    // ภาคเรียน
                    Route::view("/term", "admin.settings.term")->name("term");
                    // ขั้นตอนโครงงาน
                    Route::view("/project-steps", "admin.settings.project-steps")->name("project-steps");
                    // แบนเนอร์
                    Route::view("/banners", "admin.settings.banners")->name("banners");
                });


            Route::get("logs/{role}", App\Http\Livewire\Admin\Logs::class)->name("logs");
        });
});
