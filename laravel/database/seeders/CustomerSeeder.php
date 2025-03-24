<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::insert([
            [
                'name' => 'Lê Văn C',
                'email' => 'levanc@example.com',
                'phone' => '0909090909',
                'address' => 'Hà Nội',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hoàng Thị D',
                'email' => 'hoangthid@example.com',
                'phone' => '0912345678',
                'address' => 'Hồ Chí Minh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
