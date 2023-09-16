@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
    </div>

        <div class="container">
            @if ($errors -> any())
        <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        @if( Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
            <form method="post" action="{{ route('VisaStatus.store')}}">
                @csrf
                <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Visa Status Update</h4>
                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                    </div>
                    <div class="input-group mb-3" name="visaStatus" >
                        <label for="visaStatus" class="form-label">Visa Status</label>
                    </div>
                    <div class="btn-group mb-3" role="group">
                        <input type="radio" name="visaStatus" value="accepted" class="btn-check" id="accepted" checked>
                        <label class="btn btn-outline-primary" for="accepted">Accepted</label>

                        <input type="radio" name="visaStatus" value="rejected" class="btn-check" id="rejected">
                        <label class="btn btn-outline-primary" for="rejected">Rejected</label>
                    </div>
                    <div class="input-group mb-3 row">
                        <label for="issueDate" class="form-label">Issue Date</label>
                        <input type="date" name="issueDate" class="form-control col-md-10" id="issueDate">
                    </div>
                    <div class="input-group mb-3 row">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="date" name="expiryDate" class="form-control col-md-10" id="expiryDate">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Update Status</button>
                    </div>
                    <div class="input-group mb-3 row">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- form End -->



@endsection
