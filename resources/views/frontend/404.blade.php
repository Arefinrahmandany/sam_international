@extends('frontend.layouts.app')

@section('main-content')




<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <div class="error-content">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <h1 class="error-text text-primary">400</h1>
                            <h4 class="mt-4"><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
                            <p>Your Request resulted in an error.</p>
                            <form class="mt-5 mb-5">

                                <div class="text-center mb-4 mt-4"><a href="{{ route('home.page') }}" class="btn btn-primary">Go to Homepage</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>










