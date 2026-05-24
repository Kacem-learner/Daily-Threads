<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Register</title>

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
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

/* Main Container */
.register-container{
    width:1000px;
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
    padding:50px;
    text-align:center;
}

.left-box img{
    width:220px;
    margin-bottom:20px;
}

.left-box h1{
    font-size:34px;
    font-weight:700;
    margin-bottom:10px;
}

.left-box p{
    font-size:14px;
    color:#ccc;
    line-height:1.7;
}

/* Right Side */
.right-box{
    width:55%;
    padding:45px;
}

.right-box h2{
    font-size:30px;
    color:#111;
    margin-bottom:5px;
}

.subtitle{
    color:#777;
    font-size:14px;
    margin-bottom:25px;
}

/* Validation Errors */
.error-box{
    background:#ffe5e5;
    color:#b00020;
    padding:12px;
    border-radius:8px;
    margin-bottom:20px;
    font-size:13px;
}

/* Form */
.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:8px;
    font-size:14px;
    font-weight:500;
    color:#333;
}

input[type="text"],
input[type="email"],
input[type="password"]{
    width:100%;
    padding:12px 14px;
    border:1px solid #ddd;
    border-radius:8px;
    font-size:14px;
    transition:0.3s;
}

input:focus{
    outline:none;
    border-color:#111;
}

/* Terms */
.terms{
    margin-top:15px;
    font-size:13px;
    color:#555;
    line-height:1.6;
}

.terms a{
    color:#111;
    text-decoration:none;
}

.terms a:hover{
    text-decoration:underline;
}

/* Button */
button{
    width:100%;
    padding:13px;
    background:#111;
    color:white;
    border:none;
    border-radius:8px;
    font-size:15px;
    font-weight:500;
    cursor:pointer;
    margin-top:20px;
    transition:0.3s;
}

button:hover{
    background:#333;
}

/* Login Link */
.login-link{
    text-align:center;
    margin-top:18px;
    font-size:13px;
}

.login-link a{
    color:#666;
    text-decoration:none;
}

.login-link a:hover{
    text-decoration:underline;
}

/* Responsive */
@media(max-width:768px){

    .register-container{
        flex-direction:column;
    }

    .left-box,
    .right-box{
        width:100%;
    }

    .left-box{
        padding:35px;
    }

    .right-box{
        padding:30px;
    }
}

</style>
</head>

<body>

<div class="register-container">

    <!-- LEFT SIDE -->
    <div class="left-box">

        <img src="{{ asset('assets/images/daily.png') }}" alt="Logo">

        <h1>Daily Threads</h1>

        <p>
            Create your account and start exploring
            the latest fashion trends with Daily Threads.
        </p>

    </div>

    <!-- RIGHT SIDE -->
    <div class="right-box">

        <h2>Create Account</h2>
        <p class="subtitle">Register your Daily Threads account</p>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label>Full Name</label>
                <input 
                    type="text" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autofocus
                >
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required
                >
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label>Phone</label>
                <input 
                    type="text" 
                    name="phone" 
                    value="{{ old('phone') }}"
                >
            </div>

            <!-- Address -->
            <div class="form-group">
                <label>Address</label>
                <input 
                    type="text" 
                    name="address" 
                    value="{{ old('address') }}"
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

            <!-- Confirm Password -->
            <div class="form-group">
                <label>Confirm Password</label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    required
                >
            </div>

            <!-- Terms -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="terms">

                    <label>
                        <input type="checkbox" name="terms" required>

                        I agree to the
                        <a target="_blank" href="{{ route('terms.show') }}">
                            Terms of Service
                        </a>
                        and
                        <a target="_blank" href="{{ route('policy.show') }}">
                            Privacy Policy
                        </a>

                    </label>

                </div>
            @endif

            <!-- Register Button -->
            <button type="submit">
                Create Account
            </button>

            <!-- Login -->
            <div class="login-link">

                <a href="{{ route('login') }}">
                    Already registered?
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>