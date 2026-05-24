<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daily Threads</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!-- BOOTSTRAP -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- OWL -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/fontawesome.css') }}">

    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/templatemo-sixteen.css') }}">

    <link rel="stylesheet"
          href="{{ secure_asset('assets/css/owl.css') }}">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#f8f9fa;
        }

        .product-item{
            border:1px solid #eee;
            padding:15px;
            margin-bottom:30px;
            text-align:center;
            border-radius:10px;
            background:#fff;
            transition:0.3s;
            height:100%;
        }

        .product-item:hover{
            transform:translateY(-5px);
            box-shadow:0 0 20px rgba(0,0,0,0.1);
        }

        .product-item img{
            width:100%;
            height:300px;
            object-fit:cover;
            border-radius:10px;
        }

        .section-title{
            font-weight:700;
            margin-bottom:30px;
            margin-top:50px;
        }

        .product-item h4{
            margin-top:15px;
            font-size:22px;
            font-weight:600;
        }

        .product-item h6{
            color:#dc3545;
            font-size:20px;
            font-weight:bold;
        }

        .qty-input{
            width:90px;
            margin-right:10px;
        }

        .cart-btn{
            background:#dc3545;
            border:none;
        }

        .cart-btn:hover{
            background:#b52a37;
        }

    </style>

</head>

<body>


<!-- HEADER -->
<header class="">
@include('user.navbar')

</header>

<!-- BANNER -->
<div class="banner header-text">

    <div class="owl-banner owl-carousel">

        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>

        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>

        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>

    </div>

</div>

<!-- PRODUCTS -->
<div class="container">

    <!-- NEW ARRIVALS -->
    <h2 class="section-title">New Arrivals</h2>

    <div class="row">

        @foreach(($newProducts ?? []) as $product)

        <div class="col-md-4">

            <div class="product-item">

                <img src="{{ asset('productimage/'.$product->image) }}">

                <h4>{{ $product->title }}</h4>

                <h6>₱{{ $product->price }}</h6>

                <p>{{ $product->description }}</p>

                <form action="{{ url('add-to-cart', $product->id) }}"
                      method="POST">

                    @csrf

                    <div class="d-flex justify-content-center align-items-center">

                        <input type="number"
                               name="quantity"
                               value="1"
                               min="1"
                               class="form-control qty-input">

                        <input type="submit"
                               value="Add To Cart"
                               class="btn btn-danger cart-btn">

                    </div>

                </form>

            </div>

        </div>

        @endforeach

    </div>

    <!-- SALE PRODUCTS -->
    <h2 class="section-title">Sale Products</h2>

    <div class="row">

        @foreach(($saleProducts ?? []) as $product)

        <div class="col-md-4">

            <div class="product-item">

                <img src="{{ asset('productimage/'.$product->image) }}">

                <h4>{{ $product->title }}</h4>

                <h6>₱{{ $product->price }}</h6>

                <p>{{ $product->description }}</p>

                <form action="{{ url('add-to-cart', $product->id) }}"
                      method="POST">

                    @csrf

                    <div class="d-flex justify-content-center align-items-center">

                        <input type="number"
                               name="quantity"
                               value="1"
                               min="1"
                               class="form-control qty-input">

                        <input type="submit"
                               value="Add To Cart"
                               class="btn btn-danger cart-btn">

                    </div>

                </form>

            </div>

        </div>

        @endforeach

    </div>

    <!-- REGULAR PRODUCTS -->
    

    <div class="row">

        @foreach(($regularProducts ?? []) as $product)

        <div class="col-md-4">

            <div class="product-item">

                <img src="{{ asset('productimage/'.$product->image) }}">

                <h4>{{ $product->title }}</h4>

                <h6>₱{{ $product->price }}</h6>

                <p>{{ $product->description }}</p>

                <form action="{{ url('add-to-cart', $product->id) }}"
                      method="POST">

                    @csrf

                    <div class="d-flex justify-content-center align-items-center">

                        <input type="number"
                               name="quantity"
                               value="1"
                               min="1"
                               class="form-control qty-input">

                        <input type="submit"
                               value="Add To Cart"
                               class="btn btn-danger cart-btn">

                    </div>

                </form>

            </div>

        </div>

        @endforeach

    </div>

</div>

<!-- ABOUT -->
<div class="best-features mt-5">

    <div class="container">

        <div class="row">


            <div class="col-md-6">

                <div class="left-content">

                    <h4>Looking for the best products?</h4>

                    <p>
                        Daily Threads offers affordable and stylish clothing
                        for everyone. Shop quality products and enjoy
                        modern fashion at the best prices.
                    </p>

                </div>

            </div>

            </div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>

$('.owl-banner').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    dots:true
});

</script>

</body>
</html>
