<!-- resources/views/hello.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div id="app">
            
    @include('header')

    <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <!-- Menu -->

        @include('menu')

            <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="{{ url('/Admin-Dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

                
                <!-- -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item">
                <a href="{{ url('/Admin-Account') }}" class="menu-link">
                    <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('/Admin-Notifications') }}" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
                </ul>
            </li>

    
            
            <!-- Misc -->
            @include('customer-support')
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            @include('navbar')

            <!-- Content wrapper -->
            <div class="content-wrapper">
            <!-- Content -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <img src="{{ asset('puremed/puremed.jpg') }}" class="card-img-top" alt="Your Picture">
                            <div class="card-body">
                                <h5 class="card-title">Puremed Pharmacy</h5>
                                <p class="card-text">Navarro St. Brgy. Taft, Surigao City 8400</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Content wrapper --><
        </div>
        <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
        <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Order Now</a
        >
    </div>

    @include('script')
    </body>
    </html>

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
