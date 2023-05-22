<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_news')->insert([
            [
                'name' => 'ประชาสัมพันธ์',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ผลงานบุคลากร/นักศึกษา',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ทุน/วิจัย',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'ประชุมวิชาการ',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'กิจกรรม',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'บริการวิชาการ',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
        ]);
    }
}
