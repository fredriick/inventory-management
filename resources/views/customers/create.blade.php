<form method="POST" action="{{ route('customers.store') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">Create</button>
</form>
