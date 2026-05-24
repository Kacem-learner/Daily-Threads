<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daily Threads</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!-- BOOTSTRAP -->
    <link href="vendor/bootstrap/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- OWL -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">



    <style>
        body{
            font-family:'Poppins',sans-serif;
            background:#f8f9fa;
        }

        .account-card{
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.05);
            margin-top:30px;
        }

        .table th{
            background:#dc3545;
            color:#fff;
        }

        .btn-update{
            background:#dc3545;
            color:#fff;
        }

        .btn-update:hover{
            background:#b52a37;
        }
    </style>

</head>

<body>

<!-- HEADER -->
<header class="">

    @include('user.navbar') 

</header>


<div class="container">

    <!-- ACCOUNT -->
    <div class="account-card">

        <h3 class="mb-4">My Account</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- PROFILE UPDATE -->
        <form method="POST" action="{{ route('account.update') }}">
    @csrf

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name"
               value="{{ $user->name }}"
               class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email"
               value="{{ $user->email }}"
               class="form-control">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone"
               value="{{ $user->phone }}"
               class="form-control">
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address"
               value="{{ $user->address }}"
               class="form-control">
    </div>

    <div class="form-group">
        <label>New Password (optional)</label>
        <input type="password"
               name="password"
               class="form-control"
               placeholder="Enter new password">
    </div>

    <button type="submit" class="btn btn-danger mt-3">
        Update Profile
    </button>

</form>

    </div>

    <!-- ORDERS -->
    <div class="account-card">

        <h3 class="mb-4">My Orders</h3>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                @forelse($orders as $order)

                    <tr>
                        <td>{{ $order->product_title }}</td>
                        <td>₱{{ $order->price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>
                            <span class="badge badge-info">
                                {{ $order->status }}
                            </span>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            No orders yet
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white mt-5 p-4 text-center">
    Copyright &copy; 2026 Daily Threads
</footer>

<!-- SCRIPTS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
