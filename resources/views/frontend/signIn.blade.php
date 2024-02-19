@extends('frontend.layouts.app')

@section('main-content')

<!--**********************************
            Content body start
        ***********************************-->


        <!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">

                <!-- Sign In Start -->
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3>Sign In</h3>
                            </div>

                            @include('validate')

                            <form method="post" action="{{ route('admin.login') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="auth" class="form-control" id="floatingInput">
                                    <label for="floatingInput">User</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="align-items-center justify-content-between mb-4">


                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>

                                </div>
                                <div class="form-check">
                                    <a href="">Forgot Password</a>
                                </div>

                            </form>

                        </div>
                    </div>
            <!-- Sign In End -->



            </div>
        </div>
    </div>
    </div>
</section><
!-- End Hero -->







		<!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->




  @endsection


