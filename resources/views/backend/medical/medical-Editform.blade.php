@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4">
    <div class="container">
        <form method="POST" action="medical">
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Medical Application Status Update</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                </div>
                <div class="input-group mb-3 row">
                    <label for="expirydate" class="form-label">Medical Date</label>
                    <input type="date" name="medicalDate" class="form-control col-md-10"  id="date">
                </div>
                <div class="input-group form-group mb-3">
                    <label for="medicalstatus" class="form-label">Medical Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="medicalstatus" id="fit">
                        <label class="form-check-label" for="fit">Fit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="medicalstatus" id="unfit" checked>
                        <label class="form-check-label" for="unfit">Unfit</label>
                    </div>
                <div class="input-group mb-3 row">
                    <label for="expirydate" class="form-label">Expiry Date</label>
                    <input type="date" name="expirydate" class="form-control col-md-10" id="expirydate">
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Status</button>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- form End -->



@endsection
