@extends('backend.layouts.app')

@section('main-content')

<!-- card Start-->

<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-md-9 col-lg-7 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                            <img src="{{ url('image.pexels-pixabay-220453.jpg') }}" class="img-fluid" style="width: 180px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">


                            <h5 class="mb-1">Personal Info</h5>
                            <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$all_data -> name }}</p>
                            <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                <div>
                                    <p class="small text-muted mb-1">Phone</p>
                                    <p class="mb-0">{{$all_data -> phone }}</p>
                                </div>
                                <div class="px-3">
                                    <p class="small text-muted mb-1">Email</p>
                                    <p class="mb-0">{{$all_data -> email }}</p>
                                </div>
                                <div>
                                    <p class="small text-muted mb-1">Total Due</p>
                                    <p class="mb-0">{{$all_data -> balance }}</p>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- card end-->



@endsection
