<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'guard' => 'student',
                'name' => 'นักเรียน',
            ],
            [
                'guard' => 'teacher',
                'name' => 'อาจารย์',
            ],
            [
                'guard' => 'admin',
                'name' => 'ผู้ดูแลระบบ',
            ],
            [
                'guard' => 'external',
                'name' => 'ที่ปรึกษาภายนอก',
            ]
        ];
        foreach ($data as $item) {
            Role::create($item);
        }
    }
}
