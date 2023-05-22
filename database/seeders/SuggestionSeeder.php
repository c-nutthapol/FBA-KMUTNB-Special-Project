<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('master_suggestions')->insert([
            [
                'name' => 'สะกดคำผิด',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'การเว้นวรรคไม่ถูกต้อง',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'การจัดรูปแบบไม่ถูกต้อง',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
            [
                'name' => 'รูปแบบการอ้างอิงไม่ถูกต้อง',
                'created_by' => 1,
                'created_at' => now(),
                'updated_by' => 1,
                'updated_at' => now(),
            ],
        ]);
    }
}
