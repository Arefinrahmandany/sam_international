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
            <h5>Embassy Submission</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('embassy.update',Auth::guard('admin')->user()->id) }}">
                        @csrf
                        @method('PUT')
                        @include('validation.validate')

                        <div class="row">

                            <div class="form-group col-md-2">
                                <label class="form-label" for="passport">Passport Number</label>
                                <input name="passport" type="text" value="{{ old('passport') }}" list="passports" class="form-control p-input" id="passport">
                                <datalist id="passports">
                                    @foreach( $passport as $passport )
                                    <option value="{{ $passport->passport_number }}"></option>
                                    @endforeach
                                </datalist>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-label" for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ old('visa_number') }}" class="form-control p-input" id="visa_number">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ old('supports') }}" class="form-control p-input" id="supports">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="okala">Agency(ওকালা)</label>
                                <input name="okala" type="text" value="{{ old('okala') }}" class="form-control p-input" id="okala">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="first_Party">1st Party Name</label>
                                <input name="first_Party" type="text" value="{{ old('first_Party') }}" class="form-control p-input" id="first_Party">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group  col-md-2">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ old('licence') }}" class="form-control p-input" id="licence">
                            </div>

                            <div class="form-group  col-md-4">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ old('qualification') }}" class="form-control p-input" id="qualification">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ old('police_clearance') }}" class="form-control" id="police_clearance">
                            </div>
                            <div class="form-group  col-md-3">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ old('incharge_number') }}" class="form-control p-input" id="incharge_number">
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
