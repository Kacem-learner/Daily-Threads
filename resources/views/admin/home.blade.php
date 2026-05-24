<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

@include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">

    <div class="main-panel">

        <div class="content-wrapper"
             style="
                background:#0f172a;
                min-height:100vh;
                display:flex;
                justify-content:center;
                align-items:center;
             ">

            <div style="
                width:800px;
                background:#1e293b;
                border-radius:20px;
                padding:50px;
                text-align:center;
                box-shadow:0 10px 30px rgba(0,0,0,0.4);
            ">

                <!-- STORE IMAGE -->
                <img src="{{ asset('assets/images/threads.jpg') }}"
     
                     style="
                        width:100%;
                        max-height:500px;
                        object-fit:cover;
                        border-radius:15px;
                        margin-bottom:25px;
                     ">

                <!-- WELCOME TEXT -->
                <h1 style="color:white; font-size:40px;">
                    Welcome to
                    <span style="color:#8b5cf6;">
                        Daily Threads
                    </span>
                    Admin Dashboard
                </h1>

                <p style="color:#cbd5e1; font-size:18px; margin-top:15px;">
                    Manage your products, orders, and store easily.
                </p>

            </div>

        </div>

    </div>

</div>

@include('admin.script')

</body>
</html>