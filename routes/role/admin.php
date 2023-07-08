<?php

use Illuminate\Http\Request;
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
                    // ประเภทข่าว
                    Route::view("/newtype", "admin.settings.newtype")->name("newtype");
                    // สาขา
                    Route::view("/department", "admin.settings.department")->name("department");
                    // เอกสารดาวน์โหลด
                    Route::view("/document", "admin.settings.document")->name("document");
                    // สถานะโครงการ
                    Route::view("/status", "admin.settings.status")->name("status");

                    Route::prefix("news")
                        ->name("news.")
                        ->group(function () {
                            // ข่าวสารหน้าแรก
                            Route::view("/", "admin.settings.news.index")->name("home");
                            // สร้างข่าวสาร
                            Route::view("/create", "admin.settings.news.create")->name("create");
                            // แก้ไขข่าวสาร
                            Route::get("/edit/{id}", function (Request $request) {
                                return view('admin.settings.news.edit', ['id' => $request->id]);
                            })->name("edit");
                        });
                });


            Route::get("logs/{role}", App\Http\Livewire\Admin\Logs::class)->name("logs");

             // โครงงานทั้งหมด
            Route::view("/allproject", "students.allproject")->name("allproject");
        });
});
