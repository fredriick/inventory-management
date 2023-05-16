<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }

    public function run(): void
        {
            $customers = Customer::all();

            foreach ($customers as $customer) {
                for ($i = 1; $i <= 5; $i++) {
                    $product = Product::inRandomOrder()->first();
                    $quantity = rand(1, 10);

                    $order = new Order();
                    $order->customer_id = $customer->id;
                    $order->product_id = $product->id;  // set the product_id field instead of the product object
                    $order->quantity = $quantity;
                    $order->save();

                    // Update product quantity
                    $product->quantity -= $quantity;
                    $product->save();
                }
            }
        }

}
