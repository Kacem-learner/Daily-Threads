<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daily Threads - Products</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!-- BOOTSTRAP -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/fontawesome.css') }}">

    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/templatemo-sixteen.css') }}">

    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/owl.css') }}">

    <style>
       .latest-products{
    margin-top:120px;
}

.section-heading{
    margin-top:50px;
}

header{
    position:relative;
    z-index:999;
}

.navbar{
    padding:15px 0;
}
        body{
            font-family:'Poppins',sans-serif;
            background:#f8f9fa;
        }

        .latest-products{
            padding:60px 0;
        }

        .product-item{
            border:1px solid #eee;
            border-radius:12px;
            overflow:hidden;
            background:#fff;
            transition:0.3s;
            margin-bottom:30px;
            height:100%;
            box-shadow:0 0 10px rgba(0,0,0,0.05);
        }

        .product-item:hover{
            transform:translateY(-5px);
            box-shadow:0 0 20px rgba(0,0,0,0.1);
        }

      .product-item img{
    width:100%;
    height:320px;
    object-fit:contain;
    background:#f8f9fa;
}

        .down-content{
            padding:20px;
            text-align:center;
        }

        .down-content h4{
            font-size:22px;
            font-weight:600;
            margin-bottom:10px;
            color:#232323;
        }

        .down-content h6{
            color:#dc3545;
            font-size:20px;
            font-weight:bold;
            margin-bottom:15px;
        }

        .down-content p{
            color:#666;
            font-size:15px;
            margin-bottom:20px;
        }

        .cart-form{
            display:flex;
            justify-content:center;
            align-items:center;
            gap:10px;
        }

        .qty-input{
            width:80px;
        }

        .btn-cart{
            background:#dc3545;
            border:none;
            color:#fff;
            padding:10px 18px;
            border-radius:5px;
            transition:0.3s;
        }

        .btn-cart:hover{
            background:#b52a37;
        }

        .section-heading h2{
            font-weight:700;
            margin-bottom:40px;
        }

    </style>

</head>

<body>

<!-- HEADER -->
<header>
    @include('user.navbar')
</header>

<!-- PRODUCTS -->
<div class="latest-products">

    <div class="container">

        <div class="section-heading">
            <h2>All Products</h2>
        </div>

        <div class="row">

            @foreach($data as $product)

            <div class="col-md-4">

                <div class="product-item">

                    <!-- PRODUCT IMAGE -->
                    <img src="/productimage/{{ $product->image }}"
                         alt="">

                    <!-- PRODUCT DETAILS -->
                    <div class="down-content">

                        <h4>{{ $product->title }}</h4>

                        <h6>₱{{ $product->price }}</h6>

                        <p>{{ $product->description }}</p>

                        <!-- ADD TO CART -->
                        <form action="{{ url('add-to-cart', $product->id) }}"
                              method="POST"
                              class="cart-form">

                            @csrf

                            <input type="number"
                                   name="quantity"
                                   value="1"
                                   min="1"
                                   class="form-control qty-input">

                            <input type="submit"
                                   value="Add To Cart"
                                   class="btn-cart">

                        </form>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-center mt-4">

            {!! $data->links() !!}

        </div>

    </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white mt-5 p-4">

    <div class="container text-center">

        <p class="mb-0 text-white" style="font-size:14px;">
            Copyright &copy; 2026 Daily Threads
        </p>

    </div>

</footer>

<!-- SCRIPTS -->
<script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
