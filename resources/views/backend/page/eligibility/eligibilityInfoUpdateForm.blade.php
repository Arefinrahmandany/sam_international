@extends('backend.layouts.app')

@section('main-content')



<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
        <form method="POST" action="">
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Passport Eligible Status Update</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number" required>
                </div>
                <div class="input-group mb-3 row">
                    <label for="finger" class="form-label">Fingerprint</label>
                    <div class="form-check col-md-2">
                        <input value="1" class="form-check-input" type="radio" name="finger" id="yes" checked>
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check col-md-2">
                        <input value="0" class="form-check-input" type="radio" name="finger" id="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
                <div class="input-group mb-3 row">
                    <label for="training" class="form-labelt">Training</label>
                    <div class="form-check col-md-2">
                        <input value="1" class="form-check-input" type="radio" name="training" id="yes" checked>
                        <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check col-md-2">
                        <input value="0" class="form-check-input" type="radio" name="training" id="no">
                        <label class="form-check-label" for="no">No</label>
                    </div>
                </div>
                <div class="input-group mb-3 row">
                    <label for="attested" class="form-label">Attested</label>
                    <div class="form-check col-md-2">
                        <input value="1" class="form-check-input" type="radio" name="attested" id="yes" checked>
                        <label class="form-check-label" for="yes">Attested</label>
                    </div>
                    <div class="form-check col-md-2">
                        <input value="0" class="form-check-input" type="radio" name="attested" id="no">
                        <label class="form-check-label" for="no">Non Attested</label>
                    </div>
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
