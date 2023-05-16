<?php

// namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

// class CustomerControllerTest extends TestCase
// {
//     /**
//      * A basic unit test example.
//      */
//     public function test_example(): void
//     {
//         $this->assertTrue(true);
//     }
// }

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function a_customer_can_be_created(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->post(route('customers.store'), [
            'name' => 'Mac leon',
            'email' => 'mac@example.com',
            'password' => Hash::make('password')
        ]);

        $response->assertRedirect(route('customers.index'));

        $this->assertDatabaseHas('customers', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
        ]);
    }
}
