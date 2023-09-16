@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->

<div class="container-fluid pt-4 px-4">
    <div class="pt-4 px-4 mb-3">
        <a class="btn btn-primary" href="{{route('Eligibility.index')}}" role="button">Back</a>
    </div>
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
                        <input type="radio" class="btn-check" name="finger" value="yes" id="finger1" checked>
                        <label class="btn btn-outline-primary" for="finger1">Yes</label>

                        <input type="radio" class="btn-check" name="finger" value="no" id="finger2">
                        <label class="btn btn-outline-primary" for="finger2">No</label>

                    </div>
                </div>
                <div class="bg-light rounded h-100">
                    <h6 class="mb-4">Training</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="training" value="yes" id="training1" checked>
                        <label class="btn btn-outline-primary" for="training1">Yes</label>

                        <input type="radio" class="btn-check" name="training" value="no" id="training2">
                        <label class="btn btn-outline-primary" for="training2">No</label>

                    </div>
                </div>
                <div class="bg-light rounded h-100">
                    <h6 class="mb-4">Attested</h6>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="attested" value="yes" id="attested1" checked>
                        <label class="btn btn-outline-primary" for="attested1">Attested</label>

                        <input type="radio" class="btn-check" name="attested" value="no" id="attested2">
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
