<nav id="navbar" class="site-navigation navbar navbar-expand-lg navbar-light">
    <div id="logo" class="navbar-brand brand site-logo text-center">
        <a href="index.html" rel="home">
            <img src="assets/img/logofaveo.png" alt="NowKnow | Knowledge Base HTML Template">
        </a>
    </div>
    <!-- #logo -->
    <button
        style="float: right;margin: 10px;"
        class="navbar-toggler custom-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- collapse -->
    <div class="collapse navbar-collapse links" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-menu site-navigate ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.html">Submit Ticket</a>
            </li>
            <li class="nav-item dropdown active">
                <a
                    class="dropdown-toggle nav-link"
                    href="archive.html"
                    id="navbarDropdown"
                    role="button"
                    data-toggle=""
                    aria-haspopup="true"
                    aria-expanded="false"
                >Knowledge Base</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li>
                        <a class="dropdown-item" href="archive.html">Categories</a>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="detail.html">
                            Article
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item navbar-login d-md-none d-sm-none d-none d-lg-block">
                <a
                    href="#"
                    class="nav-link collapsed"
                    data-toggle="collapse"
                    data-target="#login-form"
                >
                    Login
                    <i class="sub-indicator fa fa-chevron-circle-down fa-fw text-muted"></i>
                </a>
            </li>
        </ul>
        <!-- .navbar-menu -->
    </div>
    <ul class="nav navbar-nav navbar-login d-lg-none">
        <li class="nav-item">
            <a
                href="#"
                class="collapsed"
                data-toggle="collapse"
                data-target="#login-form"
            >
                Login
                <i class="sub-indicator fa fa-chevron-circle-down fa-fw text-muted"></i>
            </a>
        </li>
    </ul>
    <!-- .navbar-login -->
    <!-- .navbar-login -->
    <div id="login-form" class="login-form collapse fade clearfix">
        <form action="" method="">
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    id="username"
                    title="Username"
                    placeholder="Username"
                >
            </div>
            <div class="form-group">
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    title="Password"
                    placeholder="Password"
                >
            </div>
            <ul class="list-unstyled float-left">
                <li>
                    <a href="#">Lost password?</a>
                </li>
                <li>
                    <a href="#">Create Account</a>
                </li>
            </ul>
            <button type="submit" class="btn btn-custom float-right">Login</button>
        </form>
        <!-- #login-form -->
    </div>
</nav>
<!-- #navbar -->