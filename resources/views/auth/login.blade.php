<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administartor Login-Faveo Auto Update Script</title>
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
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <!-- add a email and password icons -->
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.html" class="underline-small">Helpdesk
                    <b>Eneo</b>
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <form action="{{ route('login') }}" method="POST">
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
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                placeholder="Password"
                                name="password"
                                required
                                autocomplete="current-password"
                            >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 social-auth-links text-center mb-3">
                                <button type="submit" class="btn btn-block btn-primary btn-login">
                                    Login
                                </button>
                                <a href="{{ route('password.request') }}" class="btn btn-block btn-lost">
                                    I lost my password
                                </a>
                            </div>
                        </div>
                    </form>
                    <!-- /.social-auth-links -->
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
