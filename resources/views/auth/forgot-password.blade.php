<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lost Password-Auto Faveo Licenser</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins_manager/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../plugins_manager/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist_manager/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!--Custom CSS -->
        <link rel="stylesheet" href="../CSS_manager/style.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.html" class="underline-small">Helpdex
                    <b>Eneo</b> 
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <div class="mb-4 text-sm text-gray-600">
                        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. 
                    </div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Email"
                                required 
                                autofocus
                            >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="social-auth-links text-center mb-3">
                            <button class="btn btn-block btn-primary btn-login">
                                {{ __('Email Password Reset Link') }}
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-block btn-lost ">
                                Go back to login form
                            </a>
                        </div>
                    <!-- /.social-auth-links -->
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../plugins_manager/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../plugins_manager/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist_manager/js/adminlte.min.js"></script>
    </body>
</html>
