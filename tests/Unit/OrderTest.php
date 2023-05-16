<?php

// namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

// class OrderTest extends TestCase
// {
//     /**
//      * A basic unit test example.
//      */
//     // public function test_example(): void
//     // {
//     //     $this->assertTrue(true);
//     // }

// public function testCreateOrder()
//     {
//         // Create a new product with an inventory of 10
//         $product = Product::factory()->create([
//             'inventory' => 10,
//         ]);

//         // Create a new customer
//         $customer = Customer::factory()->create();

//         // Create a new order for the customer
//         $order = Order::create([
//             'customer_id' => $customer->id,
//             'product_id' => $product->id,
//             'quantity' => 5,
//         ]);

//         // Check that the order was created with the correct values
//         $this->assertEquals($customer->id, $order->customer_id);
//         $this->assertEquals($product->id, $order->product_id);
//         $this->assertEquals(5, $order->quantity);

//         // Check that the product's inventory was reduced by the order quantity
//         $product->refresh();
//         $this->assertEquals(5, $product->inventory);
//     }

// }



namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;
use App\Models\Customer;
use Database\Factories\ProductFactory;
use Database\Factories\CustomerFactory;
use App\Models\Order;


class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
public function testCreateOrder()
    {
        // Create a new product with an inventory of 10
        $product = ProductFactory::new()->create([
            'inventory' => 10,
        ]);

        // Create a new customer
        $customer = Customer::factory()->create();

        // Create a new order with a quantity of 5 for the product
        $order = Order::create([
            'customer_id' => $customer->id,
            'product_id' => $product->id,
            'quantity' => 5,
        ]);

        // Check that the inventory of the product has been updated
        $this->assertEquals(10, $product->fresh()->inventory);

        // Check that the order has been created correctly
        $this->assertEquals($customer->id, $order->customer_id);
        $this->assertEquals($product->id, $order->product_id);
        $this->assertEquals(5, $order->quantity);
    }

}

