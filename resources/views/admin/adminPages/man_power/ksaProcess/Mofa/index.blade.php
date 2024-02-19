@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">Visa Process</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">Embassy</a></li>
    </ol>
</nav>
<main>

    <div class="container pt-4 px-4">
        <div class="row g-4 mb-3">
            <h5>Mofa Submission</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('mofa.store') }}">
                        @csrf
                        @include('validation.validate')

                        <div class="row m-2 p-1">
                            <div class="form-group col-md-3">
                                <label class="form-label" for="passport">Passport Number</label>
                                <input name="passport" type="text" value="{{ old('passport') }}" list="passports" class="form-control p-input" id="passport">
                                <datalist id="passports">
                                    @foreach( $passport as $passport )
                                    <option value="{{ $passport->passport }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="visaNumber">Visa Number</label>
                                <input class="form-control" type="text" name="visaNumber" value="{{ old('visaNumber') }}" id="visaNumber">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="sponser">Sponser Name</label>
                                <input class="form-control" type="text" name="sponser" value="{{ old('sponser') }}" id="sponser">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="occupetion">Occupetion</label>
                                <input class="form-control" type="text" name="occupetion" value="{{ old('occupetion') }}" id="occupetion">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label" for="purpose">Purpose</label>
                                <input class="form-control" type="text" name="purpose" value="{{ old('purpose') }}" id="purpose">
                            </div>
                        </div>

                        <div class="row m-2 p-1">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-2 p-2">
                                    <h6 class="mb-2">Fingerprint</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="finger" value="1" id="finger1" >
                                            <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                            <input type="radio" class="btn-check" name="finger" value="0" id="finger2" checked>
                                            <label class="btn btn-outline-primary" for="finger2">No</label>
                                        </div>
                                </div>

                                <div class="col-md-2 p-2">
                                    <h6 class="mb-2">Training</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="training" value="1" id="training1" >
                                            <label class="btn btn-outline-primary" for="training1">Yes</label>
                                            <input type="radio" class="btn-check" name="training" value="0" id="training2" checked>
                                            <label class="btn btn-outline-primary" for="training2">No</label>
                                        </div>
                                </div>

                                <div class="col-md-3 p-2">
                                    <h6 class="mb-2">Attested</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="attested" value="1" id="attested1" >
                                            <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                            <input type="radio" class="btn-check" name="attested" value="0" id="attested2" checked>
                                            <label class="btn btn-outline-primary" for="attested2">Non Attested</label>
                                        </div>
                                </div>

                                <div class="col-md-3 p-2">
                                    <h6 class="mb-2">Medical Report</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="medical_report" value="1" id="medicalStatus1" >
                                            <label class="btn btn-outline-primary" for="medicalStatus1">Fit</label>

                                            <input type="radio" class="btn-check" name="medical_report" value="0" id="medicalStatus2" checked>
                                            <label class="btn btn-outline-primary" for="medicalStatus2">Unfit</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary">Add Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
