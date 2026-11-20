
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | GIZZAM</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body class="register-page">

    <div class="auth-container">

        <!-- LEFT SIDE -->
        <div class="auth-left">

            <div class="brand">
                <span class="brand-icon">G</span> GIZZAM<span>.</span>
            </div>

            <div class="hero-content">
                <h1>
                    JOIN THE
                    <span>GIZZAM</span>
                    COMMUNITY.
                </h1>

                <p>
                    Create your account and explore quality
                    computer accessories for your everyday
                    setup.
                </p>

                <div class="hero-decoration">G</div>
            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="auth-right">

            <div class="auth-form">

                <div class="logo">
                    <h1>GIZ<span>ZAM</span></h1>
                    <p>COMPUTER ACCESSORIES STORE</p>
                </div>

                <div class="auth-heading">
                    <h2>Create Account</h2>
                    <p>Register to access your GIZZAM dashboard.</p>
                </div>

                @if($errors->any())
                    <div class="alert error">
                        {{ $errors->first() }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('register.submit') }}"
                      method="POST"
                      id="registerForm">

                    @csrf

                    <div class="form-group">
                        <label>Full Name</label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            autocomplete="name"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email"
                            autocomplete="email"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Create a password (minimum 8 characters)"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm your password"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >
                    </div>

                    <button
                        type="submit"
                        class="auth-button"
                        id="registerButton">

                        Create Account

                    </button>

                </form>

                <div class="auth-footer">
                    Already have an account?
                    <a href="{{ route('login') }}">Sign In</a>
                </div>

                <p class="copyright">
                    &copy; {{ date('Y') }} Data-Con's. All rights reserved.
                </p>

            </div>

        </div>

    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function () {
            const button = document.getElementById('registerButton');

            button.disabled = true;
            button.textContent = 'Creating Account...';
        });
    </script>

</body>
</html>
