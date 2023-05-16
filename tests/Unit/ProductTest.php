<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use Tests\TestCase;

class ProductTest extends TestCase

// {
//     /**
//      * A basic unit test example.
//      */
//     public function test_example(): void
//     {
//         $this->assertTrue(true);
//     }
// }

    {
        // public function testReduceInventory()
        // {
        //     // Create a new product with an inventory of 10
        //     $product = Product::factory()->create([
        //         'inventory' => 10,
        //     ]);

        //     // Reduce the inventory by 5
        //     $product->reduceInventory(5);

        //     // Check that the inventory was reduced to 5
        //     $this->assertEquals(5, $product->inventory);

        //     // Try to reduce the inventory by 10, which is greater than the available inventory
        //     try {
        //         $product->reduceInventory(10);
        //     } catch (Exception $e) {
        //         // Check that the exception was thrown
        //         $this->assertInstanceOf(InsufficientInventoryException::class, $e);

        //         // Check that the inventory was not reduced below 0
        //         $this->assertEquals(0, $product->inventory);

        //         return;
        //     }

        //     $this->fail('Expected InsufficientInventoryException was not thrown.');
        // }

        // public function testProductCreation()
        //     {
        //         $response = $this->post('/products', [
        //             'name' => 'New Product',
        //             'description' => 'A new product',
        //             'price' => 100,
        //             'quantity' => 10,
        //             'inventory' => 10,
        //         ]);                

        //         $response = $this->post('/products', [
        //             'name' => 'New Product',
        //             'description' => 'A new product',
        //             'price' => 100,
        //             'quantity' => 10,
        //             'inventory' => 10,
        //         ]);                

        //         $response->assertStatus(201);
        //         $this->assertDatabaseHas('products', [
        //             'name' => 'New Product',
        //             'price' => 100,
        //             'inventory' => 10,
        //         ]);

        //         $response = $this->post('/products', [
        //             'name' => 'New Product',
        //             'price' => 100,
        //             'inventory' => 10,
        //         ]);
                
        //     }

    public function testProductCreation()
        {
            $response = $this->post('/products', [
                'name' => 'New Product',
                'description' => 'A new product',
                'price' => 100,
                'quantity' => 10,
            ]);
        
            $response->assertStatus(302);
            $this->assertDatabaseHas('products', [
                'name' => 'New Product',
                'description' => 'A new product',
                'price' => 100,
                'quantity' => 10,
            ]);
        }
        
        
        // public function testProductUpdate()
        //     {
        //         $product = Product::factory()->create([
        //             'name' => 'Old Product',
        //             'price' => 50,
        //             'inventory' => 5,
        //         ]);
            
        //         $response = $this->put('/products/' . $product->id, [
        //             'name' => 'New Product',
        //             'price' => 100,
        //             'inventory' => 10,
        //         ]);
            
        //         $response->assertStatus(200);
        //         $this->assertDatabaseHas('products', [
        //             'id' => $product->id,
        //             'name' => 'New Product',
        //             'price' => 100,
        //             'inventory' => 10,
        //         ]);
        //     }


    }