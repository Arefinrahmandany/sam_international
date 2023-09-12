@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
    </div>

        <div class="container">

            <form method="POST" action="visaStatusCheck.php">
                <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Visa Status Update</h4>
                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                    </div>
                    <div class="input-group mb-3" name="visaStatus" >
                        <label for="visaStatus" class="form-label">Visa Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visaStatus" value="accepted" id="accepted">
                            <label class="form-check-label" for="accepted">Accepted</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visaStatus" value="rejected" id="rejected">
                            <label class="form-check-label" for="rejected">Rejected</label>
                        </div>
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
