<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About Us - Daily Threads</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#f8f9fa;
        }

        .about-section{
            padding:100px 0;
        }

        .about-box{
            background:#fff;
            padding:60px;
            border-radius:20px;
            box-shadow:0 0 25px rgba(0,0,0,0.1);
            text-align:center;
        }

        .about-box h1{
            font-size:45px;
            font-weight:700;
            margin-bottom:25px;
            color:#232323;
        }

        .about-box p{
            font-size:18px;
            line-height:1.9;
            color:#666;
        }

        .highlight{
            color:#dc3545;
            font-weight:bold;
        }

    </style>

</head>

<body>

<!-- HEADER -->
<header>
    @include('user.navbar')
</header>

<!-- ABOUT SECTION -->
<div class="about-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="about-box">

                    <h1>About Daily Threads</h1>

                    <p>
                        Welcome to <span class="highlight">Daily Threads</span>,
                        your destination for stylish, affordable, and high-quality fashion.
                        We believe clothing is more than just fabric —
                        it is a way to express confidence, personality, and individuality.
                    </p>

                    <br>

                    <p>
                        Our mission is to provide modern fashion trends
                        while keeping comfort and affordability for everyone.
                        Thank you for supporting Daily Threads and being part
                        of our growing fashion community.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white p-4">

    <div class="container text-center">

        <p class="mb-0">
            Copyright &copy; 2026 Daily Threads
        </p>

    </div>

</footer>

<!-- SCRIPTS -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>