<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_departments')->insert([
            [
                'name' => 'ภาควิชาบริหารธุรกิจอุตสาหกรรม',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'สาขาวิชาบริหารธุรกิจอุตสาหกรรมและโลจิสติกส์',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'สาขาวิชาการบัญชี',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'สาขาวิชาคอมพิวเตอร์ธุรกิจ',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
            [
                'name' => 'สาขาวิชาศึกษาทั่วไป',
                'created_by' => 2,
                'created_at' => now(),
                'updated_by' => 2,
                'updated_at' => now(),
            ],
        ]);
    }
}
