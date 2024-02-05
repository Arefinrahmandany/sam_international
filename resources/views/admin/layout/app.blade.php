<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('dashboard.index') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/img/avatar.png') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::guard('admin')->user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ route('accounting.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Accounts</a>
                    <a href="{{ route('passports.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Passport Entry</a>
                    <a href="{{ route('medical.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Medical</a>
                    <a href="{{ route('visaSubmission.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Visa Submission</a>
                    <a href="{{ route('visaStatusCheck.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Visa Check</a>
                    <a href="{{ route('agentsBd.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Agents</a>
                    <a href="{{-- route('') --}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Saudi Employment</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Man Power</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{-- route('') --}}" class="dropdown-item">Passport Eligible status</a>
                            <a href="{{ route('visaoffice.index') }}" class="dropdown-item">Visa Agency</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('users.index') }}" class="dropdown-item">Admin</a>
                            <a href="{{ route('user-permission.index') }}" class="dropdown-item">Permissions</a>
                            <a href="{{ route('user-role.index') }}" class="dropdown-item">Role</a>
                        </div>
                    </div>
                    <a href="{{-- route('') --}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Recycle Bin</a>
                    <a href="{{-- route('') --}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Password Change</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Blog</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{-- route('elements.button') --}}" class="dropdown-item">Content</a>
                            <a href="{{-- route('elements.typography') --}}" class="dropdown-item">Licence</a>
                            <a href="{{-- route('elements.index') --}}" class="dropdown-item">Portfolio</a>
                            <a href="{{-- route('elements.index') --}}" class="dropdown-item">Service</a>
                        </div>
                    </div>
                    <a href="{{ route('elements.widget') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="{{ route('elements.form') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="{{ route('elements.table') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="{{ route('elements.chart') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('elements.signup') }}" class="dropdown-item">Sign Up</a>
                            <a href="{{ route('elements.error404') }}" class="dropdown-item">404 Error</a>
                            <a href="{{ route('elements.blank') }}" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="{{ route('dashboard.index') }}" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.png') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.png') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/img/avatar.png') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->








            @section('main-content')



            @show










                        <!-- Footer Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-light rounded-top p-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center text-sm-start">
                                        &copy; <a href="#">ms-saminternational.com</a>, All Right Reserved.
                                    </div>
                                    <div class="col-12 col-sm-6 text-center text-sm-end">
                                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                        Designed By <a href="{{ url('https://www.linkedin.com/in/md-arefin-rahman-939136154/') }}">AREFIN RAHMAN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Footer End -->
                    </div>
                    <!-- Content End -->


                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
                </div>

                <!-- JavaScript Libraries -->
                <script src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
                <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
                <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
                <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
                <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

                <!-- Template Javascript -->
                <script src="{{ asset('assets/js/main.js') }}"></script>
            </body>

            </html>