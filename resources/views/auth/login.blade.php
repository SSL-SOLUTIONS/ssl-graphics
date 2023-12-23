@include('navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .form {
            box-shadow: 0 0 10px 0 #acacac;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
        }

        .form-top {
            text-align: center;
            margin: 0px 0 50px;
        }

        .form-top p {
            font-size: 28px;
            font-weight: 600;
        }

        form {
            width: 100%;
            margin: auto;
        }

        .field {
            margin-bottom: 30px;
        }

        form label {
            width: 100%;
            font-weight: 700;
            color: #4b4b4b;
            display: block;
        }

        input {
            width: 100%;
            padding: 9px;
            border-radius: 2px;
            transition: 0.2s all linear;
            border: none;
            background: #ebebeb;
        }

        .forgot {
            text-align: right;
            padding-right: 12px;
            margin-top: 5px;
            font-weight: bold;
        }

        .login-btn button {
            background-color: rgba(247, 172, 57, 1);
            color: #fff;
            border: none;
            padding: 8px 25px;
            font-size: 17px;
            font-weight: 600;
            border-radius: 3px;
        }

        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div style="margin-top: -100px;" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="form">
                    <div class="form-top">
                        <p>Log In To Your Account</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="email field">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                        </div>
                        <div class="password field">
                            <label for="password">Password</label>
                            <div class="password-container">
                                <input type="password" id="password" name="password" placeholder="********" required
                                    autocomplete="current-password">
                                <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                            </div>
                        </div>

                        <div class="forgot">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>

                        <div class="login-btn text-center">
                            <button type="submit">
                                Login
                            </button>
                        </div>
                        <div class="dont text-center mt-3">
                            <a style="text-decoration: none;" href="{{ route('register') }}">Don't Have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
@include('footer')