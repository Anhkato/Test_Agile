<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teacher::insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'phone' => '0123456789',
                'subject' => 'Toán',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'phone' => '0987654321',
                'subject' => 'Văn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
