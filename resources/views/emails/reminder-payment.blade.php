<!DOCTYPE html>
<html>
<head>
    <title>Reminder Payment</title>
</head>
<body>
<h2>Hello, {{ $fullName }}</h2>
<p>Thank you for your order. Here are the details of your purchase:</p>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ number_format($product['price'], 2) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<p><strong>Total Price:</strong> {{ number_format($totalPrice, 2) }}</p>
<p><strong>Payment Method:</strong> {{ $paymentMethod }}</p>

<p>Please click <a href="{{ route('paymentPage', ['snapToken' => $snapToken]) }}">here</a> to make transaction.</p>

<p>Thank you for shopping with us!</p>
</body>
</html>
