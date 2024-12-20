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

             // Step 1 การสอบหัวข้อ
            [
                'role_id' => '1',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'รออนุมัติขอสอบหัวข้อ',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'อนุมัติขอสอบหัวข้อ ',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'ไม่อนุมัติขอสอบหัวข้อ',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'ผ่านการสอบหัวข้อ',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'ผ่านแบบมีเงื่อนไขการสอบหัวข้อ',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '1',
                'name' => 'สอบหัวข้อ',
                'status' => 'ไม่ผ่านการสอบหัวข้อ',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],

            // Step 2 การก้าวหน้า
            [
                'role_id' => '1',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'รออนุมัติขอสอบก้าวหน้า',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'อนุมัติขอสอบก้าวหน้า',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'ไม่อนุมัติขอสอบก้าวหน้า',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],

            [
                'role_id' => '2',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'ผ่านการสอบก้าวหน้า',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'ผ่านแบบมีเงื่อนไขการสอบก้าวหน้า',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '2',
                'name' => 'ก้าวหน้า',
                'status' => 'ไม่ผ่านการสอบก้าวหน้า',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],

             // Step 3 การสอบป้องกัน
            [
                'role_id' => '1',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'รออนุมัติขอสอบป้องกัน',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'อนุมัติขอสอบป้องกัน',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'ไม่อนุมัติขอสอบป้องกัน',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'ผ่านการสอบป้องกัน',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'ผ่านแบบมีเงื่อนไขการสอบป้องกัน',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '3',
                'name' => 'ป้องกัน',
                'status' => 'ไม่ผ่านการสอบป้องกัน',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],


               // Step 4 การสอบป้องกัน
            [
                'role_id' => '1',
                'step' => '4',
                'name' => 'ส่งเล่ม',
                'status' => 'รออนุมัติการส่งเล่ม',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],

            [
                'role_id' => '2',
                'step' => '4',
                'name' => 'ส่งเล่ม',
                'status' => 'ผ่านการส่งเล่ม',
                'status_filter' => 'N',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '4',
                'name' => 'ส่งเล่ม',
                'status' => 'ไม่ผ่านการส่งเล่ม',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],

            [
                'role_id' => '2',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'รออนุมัติ',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'อนุมัติ (ที่ปรึกษา)',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '2',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'ไม่อนุมัติ (ที่ปรึกษา)',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '3',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'รออนุมัติ',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '3',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'อนุมัติ (แอดมิน)',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'role_id' => '3',
                'step' => '6',
                'name' => 'คำร้องทั่วไป',
                'status' => 'ไม่อนุมัติ (แอดมิน)',
                'status_filter' => 'Y',
                'status_update' => 'Y',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ]
        ]);
    }
}
