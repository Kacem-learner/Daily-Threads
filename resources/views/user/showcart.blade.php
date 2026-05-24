<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <title>Daily Threads</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>
<header class="">
 
    @include('user.navbar')
</header>

<style>

.cart-table {
    width: 80%;
    margin: 30px auto;
    border-collapse: collapse;
    font-family: Arial;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    border-radius: 10px;
    overflow: hidden;
}

.cart-table thead {
    background: #444;
    color: white;
}

.cart-table th, .cart-table td {
    padding: 15px;
    text-align: center;
}

.cart-table tbody tr:nth-child(even) {
    background: #f5f5f5;
}

.cart-title {
    text-align: center;
    margin-top: 20px;
    font-size: 28px;
    font-weight: bold;
    color: #333;
}

body {
    padding-top: 25px; /* adjust if navbar is taller */
}
</style>

<h2 class="cart-title">🛒 My Cart</h2>

@if (session('message'))

<div class="alert alert-success" style="width:80%; margin:20px auto; text-align:center;">
    {{ session('message') }}
</div>

@endif

@php
    $totalAmount = 0;
@endphp

<form action="{{ url('checkout') }}" method="POST">
@csrf

<table class="cart-table">

    <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($cart as $item)

        @php
            $totalAmount += $item->price * $item->quantity;
        @endphp

        <tr>

            <td>
                <input type="hidden" name="product_title[]" value="{{ $item->product_title }}">
                {{ $item->product_title }}
            </td>

            <td>
                ₱{{ $item->price }}
                <input type="hidden" name="price[]" value="{{ $item->price }}">
            </td>

            <td>
                {{ $item->quantity }}
                <input type="hidden" name="quantity[]" value="{{ $item->quantity }}">
            </td>

            <td>
                <a href="{{ url('remove_cart', $item->id) }}" class="btn btn-danger btn-sm">
                    Remove
                </a>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

<!-- TOTAL AMOUNT -->
<div style="width:80%; margin:auto; text-align:right; margin-top:20px; font-size:18px; font-weight:bold; color:#333;">
    Total Amount: ₱{{ $totalAmount }}
</div>

<!-- CHECKOUT BUTTON -->
<div style="text-align:center; margin-top:20px;">
    <button type="submit" class="btn btn-primary">
        Proceed to Checkout
    </button>
</div>

</form>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>