<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_statuses')->insert([

            // Step 1 การเสนอหัวข้อ
            [
                'name' => 'รออนุมัติหัวข้อ',
                'step' => 'เสนอหัวข้อ (Step 1)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติหัวข้อ (ที่ปรึกษา)',
                'step' => 'เสนอหัวข้อ (Step 1)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติหัวข้อ (ที่ปรึกษา)',
                'step' => 'เสนอหัวข้อ (Step 1)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติหัวข้อ (เจ้าหน้าที่)',
                'step' => 'เสนอหัวข้อ (Step 1)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติหัวข้อ (เจ้าหน้าที่)',
                'step' => 'เสนอหัวข้อ (Step 1)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],


             // Step 2 การสอบหัวข้อ
             [
                'name' => 'รออนุมัติขอสอบหัวข้อ',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบหัวข้อ (ที่ปรึกษา)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบหัวข้อ (ที่ปรึกษา)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบหัวข้อ (เจ้าหน้าที่)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบหัวข้อ (เจ้าหน้าที่)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],

            [
                'name' => 'ผ่านการสอบหัวข้อ (ที่ปรึกษา)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ผ่านแบบมีเงื่อนไขการสอบหัวข้อ (ที่ปรึกษา)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่ผ่านการสอบหัวข้อ (ที่ปรึกษา)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติผลการสอบหัวข้อ (เจ้าหน้าที่)',
                'step' => 'สอบหัวข้อ (Step 2)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],



            // Step 3 การก้าวหน้า
            [
                'name' => 'รออนุมัติขอสอบก้าวหน้า',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบก้าวหน้า (ที่ปรึกษา)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบก้าวหน้า (ที่ปรึกษา)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบก้าวหน้า (เจ้าหน้าที่)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบก้าวหน้า (เจ้าหน้าที่)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],

            [
                'name' => 'ผ่านการสอบก้าวหน้า (ที่ปรึกษา)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ผ่านแบบมีเงื่อนไขการสอบก้าวหน้า (ที่ปรึกษา)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่ผ่านการสอบก้าวหน้า (ที่ปรึกษา)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติผลการสอบก้าวหน้า (เจ้าหน้าที่)',
                'step' => 'ก้าวหน้า (Step 3)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],



             // Step 4 การสอบป้องกัน
             [
                'name' => 'รออนุมัติขอสอบป้องกัน',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบป้องกัน (ที่ปรึกษา)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบป้องกัน (ที่ปรึกษา)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติขอสอบป้องกัน (เจ้าหน้าที่)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่อนุมัติขอสอบป้องกัน (เจ้าหน้าที่)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],

            [
                'name' => 'ผ่านการสอบป้องกัน (ที่ปรึกษา)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ผ่านแบบมีเงื่อนไขการสอบป้องกัน (ที่ปรึกษา)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่ผ่านการสอบป้องกัน (ที่ปรึกษา)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติผลการสอบป้องกัน (เจ้าหน้าที่)',
                'step' => 'ป้องกัน (Step 4)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],


               // Step 5 การสอบป้องกัน
            [
                'name' => 'รออนุมัติการส่งเลม',
                'step' => 'ส่งเลม (Step 5)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],

            [
                'name' => 'ผ่านการส่งเลม (ที่ปรึกษา)',
                'step' => 'ส่งเลม (Step 5)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ผ่านแบบมีเงื่อนไขการส่งเลม (ที่ปรึกษา)',
                'step' => 'ส่งเลม (Step 5)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ไม่ผ่านการส่งเลม (ที่ปรึกษา)',
                'step' => 'ส่งเลม (Step 5)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'อนุมัติผลการส่งเลม (เจ้าหน้าที่)',
                'step' => 'ส่งเลม (Step 5)',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
        ]);
    }
}
