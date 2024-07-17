@php
use App\Models\Admin;
use Carbon\Carbon;

    // Get the authenticated admin user
    $user = Auth::guard('admin')->user();
    if ($user && $user->roles) {
        // Access the role's name
        $roleName = $user->roles->name;
    } else {
        // Set a default value or handle the case where the role is not defined
        $roleName = 'Role not defined';
    }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sam International</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

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

    <!-- Customized Data-table Stylesheet -->
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
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
                    <h4 class="text-primary"><img src="{{ Storage::url('images/'.'logo.png') }}" class="img-fluid" style="width: 100px; height:auto;"></h4>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('smssam/storage/app/public/users/'.json_decode($user->photo)) }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::guard('admin')->user()->name }}</h6>
                        <span>{{ $roleName }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
		@if(in_array( 'Passport', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <a href="{{ route('dashboard.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
		@endif

                    @if(in_array( 'Passport', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <a href="{{ route('passports.index') }}" class="nav-item nav-link"><i class="fa fa-passport me-2"></i>Passport</a>
                    @endif


                    @if(in_array( 'KSA Process', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>KSA Process</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <h5><a href="{{ route('visaHome.index') }}" class="dropdown-item">Home</a></h5>
                            <h5><a href="{{ route('embassy.index') }}" class="dropdown-item">Embassy</a></h5>
                            <h5><a href="{{ route('okala.index') }}" class="dropdown-item">Okala</a></h5>
                            <h5><a href="{{ route('mofa.index') }}" class="dropdown-item">MOFA</a></h5>
                            <h5><a href="{{ route('saudiEmp.index') }}" class="dropdown-item">Saudi Employment</a></h5>
                            <h5><a href="{{ route('visaSubmission.index') }}" class="dropdown-item">Visa Submission</a></h5>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Agents', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Agents</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('agentsBd.index') }}" class="dropdown-item">Agents</a>
                            <form action="{{ route('agents.transactions') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Agents Transaction</button>
                            </form>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Office', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Office</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('staff.index') }}" class="dropdown-item">Staff</a>
                            <a href="{{ route('service.index') }}" class="dropdown-item">Our Service</a>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Air Ticket', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Air Ticket</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('airTicket.index') }}" class="dropdown-item">Add Ticket Sale</a>
                            <a href="{{ route('airTicket.seller') }}" class="dropdown-item">Ticket Seller</a>
                            <a href="{{ route('ticket.sales') }}" class="dropdown-item">Ticket Sales</a>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Accounts', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calculator me-2"></i>Accounts</a>

                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('transection.pettyCash') }}" class="dropdown-item">Petty Cash</a>
                            <a href="{{ route('transection.index') }}" class="dropdown-item">Transections</a>
                            <a href="{{ route('bank.index') }}" class="dropdown-item">Banking</a>
                            <a href="{{ route('addRate.index') }}" class="dropdown-item">Add Passport Rate</a>
                            <a href="{{ route('transection.index') }}" class="dropdown-item">Passport Delivery</a>
                            <form action="{{ route('bank.transactions') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Banking</button>
                            </form>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Reports', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Reports</a>
                        <div class="dropdown-menu bg-transparent border-0 text-end h-4">
			    <form method="post" action="{{ route('passportsReport.index') }}">
                                	@csrf
                                	<button type="submit" class="dropdown-item">Daily Passport Recive Report</button>
                            </form>
                            <a href="{{-- route('bmet.index') --}}" class="dropdown-item">Daily Transection Report</a>
                            {{--
                            <a href="{{ route('bmet.index') }}" class="dropdown-item">Medical Report</a>
                            <a href="{{ route('manpower.index') }}" class="dropdown-item">Okala Report</a>
                            <a href="{{ route('manpower.rlcreate') }}" class="dropdown-item">Mofa Report</a>
                            <a href="{{ route('manpower.rlcreate') }}" class="dropdown-item">Stamping Report</a>
                            --}}
                            <form method="post" action="{{ route('visaProcessReport.index') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Visa-Process Report</button>
                            </form>
                            <form method="post" action="{{ route('passportsReport.index') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Passports Report</button>
                            </form>
                            <form method="post" action="{{ route('manpowerReport.index') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Man-Power Report</button>
                            </form>
                            <form method="post" action="{{ route('agentsReport.index') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Agents Report</button>
                            </form>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Medical', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <a href="{{ route('medical.index') }}" class="nav-item nav-link"><i class="fa fa-syringe me-2"></i>Medical</a>
                    @endif

                    

                    @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('users.index') }}" class="dropdown-item">Admin</a>
                            <a href="{{ route('user-permission.index') }}" class="dropdown-item">Permissions</a>
                            <a href="{{ route('user-role.index') }}" class="dropdown-item">Role</a>
                        </div>
                    </div>
                    @endif

                    @if(in_array( 'Recycle Bin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <a href="{{ route('transection.recycle') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Recycle Bin</a>
                    @endif

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
                <a href="#" class="sidebar-toggler flex-shrink-0 link-underline-light">
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
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="{{ asset('smssam/storage/app/public/users/'.json_decode($user->photo)) }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ $user->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('users.show',$user->id) }}" class="dropdown-item">My Profile</a>
                            <a href="{{ route('users.EditForm',$user->id) }}" class="dropdown-item">Profile Edit</a>
                            <a href="{{ route('users.passwordChangeForm',$user->id) }}" class="dropdown-item">Password Change</a>
                            <a href="{{ route('dashboard.logout') }}" class="dropdown-item">Log Out</a>
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
                <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>

                <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
                <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
                <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
                <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
                <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

                <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
                <script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
                <script src="{{ asset('assets/js/vfs_fonts.js') }}"></script>


                <!-- Template Javascript -->
                <script src="{{ asset('assets/js/main.js') }}"></script>
            </body>

            </html>