<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Product;
// use App\Models\Order;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    // public function run(): void
    // {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    // }

    public function run(): void
        {

            $this->call([
                CustomersTableSeeder::class,
                ProductsTableSeeder::class,
                OrdersTableSeeder::class,
            ]);
            
            // Create default user
            // User::create([
            //     'name' => 'lisa',
            //     'email' => 'lisa@example.com',
            //     'password' => bcrypt('password'),
            // ]);

            // // Create 20 products with varying quantities
            // for ($i = 1; $i <= 20; $i++) {
            //     Product::create([
            //         'name' => "Product $i",
            //         'quantity' => rand(1, 100),
            //     ]);
            // }

            // Create default user
            User::create([
                'name' => 'jax_admin',
                'email' => 'jax_admin@example.com',
                'password' => Hash::make('password'),
            ]);

            // Create 20 products
            for ($i = 1; $i <= 20; $i++) {
                Product::create([
                    'name' => "Product $i",
                    'description' => "This is product $i",
                    'price' => rand(10, 100),
                    'quantity' => rand(0, 100),
                ]);
            }
    }
}
