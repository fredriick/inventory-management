<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Customer;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'jason',
            'email' => 'jason@example.com',
        ]);

        // Customer::create([
        // 'name' => 'matt',
        // 'email' => 'matt@example.com',
        // ]);
    }
}
