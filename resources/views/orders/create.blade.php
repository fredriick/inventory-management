<form method="POST" action="{{ route('orders.store') }}">
    @csrf

    <label for="customer_id">Customer:</label>
    <select name="customer_id" id="customer_id" required>
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>

    <label for="product_id">Product:</label>
    <select name="product_id" id="product_id" required>
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->quantity }} available)</option>
        @endforeach
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" min="1" required>

    <button type="submit">Create</button>
</form>
