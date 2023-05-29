<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UploadImageController extends Controller
{
     public function index(Request $request)
    {
           // รับข้อมูลไฟล์ที่ถูกอัปโหลด
           $file = $request->file('upload');

           // ตรวจสอบว่ามีไฟล์ถูกอัปโหลดหรือไม่
           if ($file) {
               // บันทึกไฟล์ที่ถูกอัปโหลดไปยังโฟลเดอร์ที่คุณต้องการ
               $path = $file->store('New/uploads','public');

               $store = Storage::disk('public')->path($path);
               // ส่งค่า URL ของไฟล์ที่บันทึกกลับไป
               return response()->json([
                   'url' => $store
               ]);
           }

           // หากไม่มีไฟล์ถูกอัปโหลด ส่งข้อความผิดพลาดกลับไป
           return response()->json([
               'error' => 'No file uploaded'
           ], 400);
    }
}
{{  }}
