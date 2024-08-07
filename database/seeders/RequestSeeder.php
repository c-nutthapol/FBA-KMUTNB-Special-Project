<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_requests')->insert([
            [
                'name' => 'ขอเปลี่ยนชื่อโครงงานพิเศษ',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอเปลี่ยนอาจารย์ที่ปรึกษาร่วม',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอเปลี่ยนประธานสอบ',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอสอบหัวข้อโครงงานพิเศษล่าช้า',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอสอบก้าวหน้าโครงงานพิเศษล่าช้า',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอสอบป้องกันโครงงานพิเศษล่าช้า',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'ขอส่งเล่มโครงงานพิเศษล่าช้า',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
        ]);
    }
}
