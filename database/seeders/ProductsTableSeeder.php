<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Product A',
                'description' => 'This is product A',
                'quantity' => 10,
            ],
            [
                'name' => 'Product B',
                'description' => 'This is product B',
                'quantity' => 15,
            ],
            [
                'name' => 'Product C',
                'description' => 'This is product C',
                'quantity' => 20,
            ],
            // Add more products here...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
