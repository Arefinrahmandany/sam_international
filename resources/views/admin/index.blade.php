@extends('admin.layout.app')

@section('main-content')

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
		@if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <div class="passport-recive">
                                <i class="fa fa-passport fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Today Passport Receive</p>
                                    <h6 class="mb-0">{{ $passport_receive }}</h6>
                                </div>
                            </div>
		

                        </div>
                    </div>
@endif

@if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-plane-departure fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Day Ticket Sale Quantity</p>
                                <h6 class="mb-0">{{ $dayTicketSaleQty }} Pax</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-plane-departure fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Day Ticket Sale</p>
                                <h6 class="mb-0">&#2547;{{ number_format($dayTicketSaleTotal, 2, '.', ',') }}</h6>
                            </div>
                        </div>
                    </div>
@endif
@if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Rejection :</p>
                                <h6 class="mb-0">{{ $bmet_reject }}</h6>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Today Approved :</p>
                                <h6 class="mb-0">{{ $bmet_pass }}</h6>
                            </div>
                        </div>
                    </div>
@endif
{{--
@if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">&#2547; {{ $financialMetrics['revenue'] ?? 0 }} </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Monthly Expense</p>
                                <h6 class="mb-0">&#2547; {{ $monthlyExpenses }} </h6>
                            </div>
                        </div>
                    </div>
@endif
--}}
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Widgets Start
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Widgets End -->
<div class="row text-center">
<h3>Section on Development Mode</h3>
</div>
<style>

.report_body{
    height: 120px;
    width: 250px;
    background-color: antiquewhite;
    border-radius: 10px;
    text-align: center;
}
.dash-btn{
    padding: 10px;
}
.dash_btn_hadding{
    font-size: 15px;
    font-weight: 600;
    color: red;
}
.select-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Select button styling */
.select-button {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    background-color: #fff;
    border: 2px solid #ccc;
    border-radius: 5px;
    appearance: none; /* Remove default arrow */
    cursor: pointer;
    outline: none;
    transition: border-color 0.3s, box-shadow 0.3s;
    background-image: url('https://cdn-icons-png.flaticon.com/512/32/32216.png'); /* Custom arrow icon */
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 15px 15px;
}

/* Hover effect */
.select-button:hover {
    border-color: #888;
}

/* Focus effect */
.select-button:focus {
    border-color: #555;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}


</style>
<section>
        <div class="container">
            <div class="row d-flex justify-content-center mt-3">
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Passport Recive</p>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7">
                                <select class="select-button" name="" id="" aria-label="Default select example">
                                    <option value="">Today</option>
                                    <option value="">weekly</option>
                                    <option value="">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="result">05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Air Ticket Sale</p>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7">
                                <select class="select-button" name="" id="" aria-label="Default select example">
                                    <option value="">Today</option>
                                    <option value="">weekly</option>
                                    <option value="">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="result">05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Passport Approved</p>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7">
                                <select class="select-button" name="" id="" aria-label="Default select example">
                                    <option value="">Today</option>
                                    <option value="">weekly</option>
                                    <option value="">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="result">05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Passport In Hand</p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7">
                                <p>10 pc</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Passport Delivery</p>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7">
                                <select class="select-button" name="" id="" aria-label="Default select example">
                                    <option value="">Today</option>
                                    <option value="">weekly</option>
                                    <option value="">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="result">05</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_body col-md-3 p-1 m-1">
                    <div class="dash-btn">
                        <p class="dash_btn_hadding mb-2">Passport Reject</p>
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-7">
                                <select class="select-button" name="" id="" aria-label="Default select example">
                                    <option value="">Today</option>
                                    <option value="">weekly</option>
                                    <option value="">Monthly</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="result">05</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection