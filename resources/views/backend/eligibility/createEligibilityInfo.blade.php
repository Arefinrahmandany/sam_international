@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
        <form method="POST" action="{{ route('Eligibility.store') }}">
            @csrf
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Passport Eligible Status Update</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number" required>
                </div>


                <div class="bg-light rounded h-100">
                    <h6 class="mb-4">Fingerprint</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="finger" value="1" id="finger1" checked>
                        <label class="btn btn-outline-primary" for="finger1">Yes</label>

                        <input type="radio" class="btn-check" name="finger" value="0" id="finger2">
                        <label class="btn btn-outline-primary" for="finger2">No</label>

                    </div>
                </div>
                <div class="bg-light rounded h-100">
                    <h6 class="mb-4">Training</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="training" value="1" id="training1" checked>
                        <label class="btn btn-outline-primary" for="training1">Yes</label>

                        <input type="radio" class="btn-check" name="training" value="0" id="training2">
                        <label class="btn btn-outline-primary" for="training2">No</label>

                    </div>
                </div>
                <div class="bg-light rounded h-100">
                    <h6 class="mb-4">Attested</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="attested" value="1" id="attested1" checked>
                        <label class="btn btn-outline-primary" for="attested1">Attested</label>

                        <input type="radio" class="btn-check" name="attested" value="0" id="attested2">
                        <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                    </div>
                </div>
                <div class="text-right p-4">
                    <button type="submit" name="submit" class="btn btn-primary">Submit Status</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- form End -->



@endsection
