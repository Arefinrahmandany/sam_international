<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="{{ url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap') }}" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <body>
        <div class="container-fluid position-relative bg-white d-flex p-0">



            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="{{ route('Accounts.index') }}" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary">DASHBOARD</h3>
                    </a>
                    <div class="ms-3">
                        <a href="{{ route('Accounts.index') }}" style="text-decoration: none;"><h3 class="mb-0" style="color: red">Nahian Corp.</h3></a>
                    </div>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <span>Admin  </span>
                        <div class="position-relative">
                            <img class="rounded-circle" src="image/users/user_1.jpeg" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>

                        </div>
                        <!-- user id detail End -->
                        <!-- Navbar start -->
                        <div class="navbar-nav w-100">
                            <a href="{{ route('Accounts.index') }}" class="nav-item nav-link active"><img src="image/icon/accounting_icon.png"><b>  Accounts</b></a>
                            <a href="{{ route('agent.index') }}" class="nav-item nav-link"><img src="image/icon/agent_icon.png"><b>  Agents</b></a>
                            <a href="{{ route('passports.index') }}" class="nav-item nav-link"><img src="image/icon/passport_icon.png"><b>  Passport Entry</b></a>
                            <a href="{{ route('medical.index') }}" class="nav-item nav-link"><img src="image/icon/medical_icon.png"><b>  Medical</b></a>
                            <a href="{{ route('Visa-Application.index') }}" class="nav-item nav-link"><img src="image/icon/accounting_icon.png"><b>  Visa Submission</b></a>
                            <a href="{{ route('VisaStatus.index') }}" class="nav-item nav-link"><img src="image/icon/visaStatus_icon.png"><b>  Visa Status Check</b></a>
                            <div class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="image/icon/menPower_icon.png"><b>  Man Power</b></a>
                                    <div class="dropdown-menu bg-transparent border-0">
                                        <a href="{{ route('Eligibility.index') }}" class="dropdown-item"><img src="image/icon/passportEligible_icon.png"><b>  Passport Eligible status</b></a>
                                        <a href="{{ route('VisaAgency.index') }}" class="dropdown-item"><img src="image/icon/visaAgancy_icon.png"><b>  Visa Application Agency</b></a>
                                    </div>
                            </div>
                        </div>
                        <!-- Navbar End -->
                    </nav>
                </div>
            </div>
            <!-- Sidebar End -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <form class="d-none d-md-flex ms-4">
                        <input class="form-control border-0" type="search" placeholder="Search">
                    </form>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="image/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">John Doe</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="{{ url('backend.users') }}" class="dropdown-item">My Profile</a>
                                <a href="" class="dropdown-item">Settings</a>
                                <a href="{{ url('backend.login') }}" class="dropdown-item">Log Out</a>
                                <a href="{{ url('backend.sign_up') }}" class="dropdown-item">Sign UP</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->
                    @section('main-content')
                    <section class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">
                        <p>@yield('page-name','This is page name') / @yield('page-sub-title','This is our sub title')</p>
                        <p></p>
                    </section>
                    @show
                </div>
            </div>
        </div>
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="{{ url('https://www.linkedin.com/in/md-arefin-rahman-939136154/') }}">Arefin</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="{{ url('https://www.linkedin.com/in/md-arefin-rahman-939136154/') }}">Arefin</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <script>
                (function ($) {

                    // Sidebar Toggler
                    $('.sidebar-toggler').click(function () {
                        $('.sidebar, .content').toggleClass("open");
                        return false;
                    });

                $('#photo').change(function(e){

                    let url = URL.createObjectURL(e.target.files[0]);
                    $('#preload').attr('src', url);
                });

                $('.sidebar-toggler').click(function () {
                $('.sidebar, .content').toggleClass("open");
                return false;
            });
        })








            </script>



            <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>


        </body>
    </html>
