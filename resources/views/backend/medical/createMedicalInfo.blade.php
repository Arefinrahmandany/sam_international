@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4">
    <div class="container">

        @if ($errors -> any())
            <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif

        @if( Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif


        <form method="post" action="{{route('medical.store')}}">
            @csrf
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Medical Application Status Update</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                </div>
                <div class="input-group mb-3 row">
                    <label for="expirydate" class="form-label">Medical Date</label>
                    <input type="date" name="medicalDate" class="form-control col-md-10"  id="date">
                </div>

                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Medical Status</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" name="medicalstatus" value="1" class="btn-check" id="medicalstatus1" checked>
                        <label class="btn btn-outline-primary" for="medicalstatus1">Fit</label>
                        <input type="radio" name="medicalstatus" value="0" class="btn-check" id="medicalstatus2">
                        <label class="btn btn-outline-primary" for="medicalstatus2">Unfit</label>
                    </div>
                </div>
                <div class="input-group mb-3 row">
                    <label for="expirydate" class="form-label">Expiry Date</label>
                    <input type="date" name="expiryDate" class="form-control col-md-10" id="expirydate">
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Status</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- form End -->



@endsection
