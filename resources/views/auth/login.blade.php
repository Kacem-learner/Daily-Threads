<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Login</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Poppins, Arial, sans-serif;
    background:#f4f5f7;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

/* Main Container */
.login-container{
    width:900px;
    max-width:100%;
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    display:flex;
    box-shadow:0 5px 25px rgba(0,0,0,0.08);
}

/* Left Side */
.left-box{
    width:45%;
    background:#111;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:40px;
    text-align:center;
}

.left-box img{
    width:220px;
    margin-bottom:20px;
}

.left-box h1{
    font-size:32px;
    font-weight:700;
    margin-bottom:10px;
}

.left-box p{
    font-size:14px;
    color:#ccc;
    line-height:1.6;
}

/* Right Side */
.right-box{
    width:55%;
    padding:50px;
}

.right-box h2{
    font-size:28px;
    margin-bottom:5px;
    color:#111;
}

.right-box .subtitle{
    color:#777;
    font-size:14px;
    margin-bottom:30px;
}

/* Form */
.form-group{
    margin-bottom:20px;
}

label{
    display:block;
    margin-bottom:8px;
    font-size:14px;
    font-weight:500;
    color:#333;
}

input[type="email"],
input[type="password"]{
    width:100%;
    padding:12px 14px;
    border:1px solid #ddd;
    border-radius:8px;
    font-size:14px;
    transition:0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus{
    outline:none;
    border-color:#111;
}

/* Remember */
.remember{
    font-size:13px;
    margin-bottom:20px;
    color:#555;
}

/* Button */
button{
    width:100%;
    padding:13px;
    border:none;
    border-radius:8px;
    background:#111;
    color:white;
    font-size:15px;
    font-weight:500;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#333;
}

/* Forgot */
.forgot{
    text-align:center;
    margin-top:18px;
}

.forgot a{
    text-decoration:none;
    color:#666;
    font-size:13px;
}

.forgot a:hover{
    text-decoration:underline;
}

.success-message{
    background:#e8f7ee;
    color:#1d7a46;
    padding:12px;
    border-radius:8px;
    margin-bottom:20px;
    font-size:14px;
    border:1px solid #b7e4c7;
}
/* Responsive */
@media(max-width:768px){

    .login-container{
        flex-direction:column;
    }

    .left-box,
    .right-box{
        width:100%;
    }

    .left-box{
        padding:30px;
    }

    .right-box{
        padding:35px;
    }
    
}

</style>
</head>

<body>

<div class="login-container">

    <!-- LEFT SIDE -->
    <div class="left-box">

        <!-- PUT YOUR PNG LOGO -->
       <img src="{{ asset('assets/images/daily.png') }}" alt="Logo">

        

        <p>
            Welcome back! Sign in to continue accessing
            your Daily Threads account.
        </p>

    </div>

    <!-- RIGHT SIDE -->
    <div class="right-box">

        <h2>Sign In</h2>
        <p class="subtitle">Continue to your account</p>

        @if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

        <!-- Laravel Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus
                >
            </div>

            <!-- Password -->
            <div class="form-group">
                <label>Password</label>
                <input 
                    type="password" 
                    name="password" 
                    required
                >
            </div>

            <!-- Remember -->
            <div class="remember">
                <label>
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
            </div>

            <!-- Button -->
            <button type="submit">
                Sign In
            </button>

            <!-- Forgot Password -->
            <div class="forgot">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>

        </form>

    </div>

</div>

</body>
</html>