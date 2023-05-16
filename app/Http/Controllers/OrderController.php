<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // add this line

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $products = Product::where('quantity', '>', 0)->get();
        return view('orders.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Check product quantity
        $product = Product::find($validated['product_id']);
        if ($validated['quantity'] > $product->quantity) {
            return back()->withInput()->withErrors(['quantity' => 'The quantity requested is not available']);
        }

        // Create order and update product quantity
        $order = new Order();
        $order->customer_id = $validated['customer_id'];
        $order->product_id = $validated['product_id'];
        $order->quantity = $validated['quantity'];
        $order->save();

        $product->quantity -= $validated['quantity'];
        $product->save();

        return redirect()->route('orders.index')->with('success', 'Order created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
