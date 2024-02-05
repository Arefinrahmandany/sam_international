@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Passports</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('passports.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">



        <div class="container pt-4">

            @if ($form_type == 'create')


            <div class="card-body">
                <h3>New Passport Entry</h3>
                <div class="card p-5">

                    <form class="forms-sample" method="post" action="{{ route('passports.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('validation.validate')

                        <div class="row mb-3">

                            <div class="form-group col-md-6">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passpoertNumber" value="{{ old('passpoertNumber') }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control p-input" id="name" placeholder="Name">
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control p-input" id="email" placeholder="Email">
                            </div>

                            <div class="form-group col-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ old('incharge_number') }}" class="form-control p-input" id="incharge_number">
                            </div>
                            <div class="col mb-3">
                                <label for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ old('visa_number') }}" class="form-control p-input" id="visa_number">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <label for="passport_issue_date">Passport Issue Date</label>
                                <input name="passport_issue_date" type="date" value="{{ old('passport_issue_date') }}" class="form-control p-input" id="passport_issue_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="age">Age</label>
                                <input name="age" type="text" value="{{ old('age') }}" class="form-control p-input" id="age">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sex">Sex</label>
                                <input name="sex" type="text" value="{{ old('sex') }}" class="form-control p-input" id="sex">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ old('supports') }}" class="form-control p-input" id="supports">
                            </div>
                            <div class="col mb-3">
                                <label for="agency">Agency(ওকালা)</label>
                                <input name="agency" type="text" value="{{ old('agency') }}" class="form-control p-input" id="agency">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="medical_report">Medical Report</label>
                                <input name="medical_report" type="text" value="{{ old('medical_report') }}" class="form-control p-input" id="medical_report">
                            </div>
                            <div class="col mb-3">
                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ old('police_clearance') }}" class="form-control p-input" id="police_clearance">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ old('licence') }}" class="form-control p-input" id="licence">
                            </div>
                            <div class="col mb-3">
                                <label for="occupation">Occupation(পেশা)</label>
                                <input name="occupation" type="text" value="{{ old('occupation') }}" class="form-control p-input" id="occupation">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ old('qualification') }}" class="form-control p-input" id="qualification">
                            </div>
                            <div class="col mb-3">
                                <label for="religion">Religion(ধর্ম)</label>
                                <input name="religion" type="text" value="{{ old('religion') }}" class="form-control p-input" id="religion">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="nationality">Nationality</label>
                                <input name="nationality" type="text" value="{{ old('nationality') }}" class="form-control p-input" id="nationality">
                            </div>
                            <div class="col mb-3">
                                <label for="address">Address</label>
                                <input name="address" type="text" value="{{ old('address') }}" class="form-control p-input" id="address">
                            </div>
                        </div>



                        <div class="row mb-3">

                            <div class="col form-floating mb-3">
                                <label for="applying_country">Select Applying Country</label>
                                <select class="form-select" name="applying_country" id="applying_country">
                                    <option value=""></option>
                                    @forelse ( $all_countries as $countrys)
                                    <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>


                            <div class="col form-floating mb-3" id="floatingSelect">
                                <select class="form-select" name="agents" value="{{ old('agents') }}" id="agents">
                                    <option >Select Agents</option>
                                    @forelse ( $all_agents as $agents)
                                    <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="input-group mb-3 col">
                                <select class="form-select" name="visaProcess" value="{{ old('visaProcess') }}" id="visaProcess">
                                    <option value="visaProcess">Visa Process</option>
                                    <option value="saudi_employment">Saudi Employment</option>
                                    <option value="menPower">Men Power</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>

                            <div class="input-group mb-3 col">
                                <div class="row">
                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Fingerprint</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="finger" value="yes" id="finger1" >
                                            <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                            <input type="radio" class="btn-check" name="finger" value="no" id="finger2" checked>
                                            <label class="btn btn-outline-primary" for="finger2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Training</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="training" value="yes" id="training1" >
                                            <label class="btn btn-outline-primary" for="training1">Yes</label>

                                            <input type="radio" class="btn-check" name="training" value="no" id="training2" checked>
                                            <label class="btn btn-outline-primary" for="training2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Attested</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="attested" value="yes" id="attested1" >
                                            <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                            <input type="radio" class="btn-check" name="attested" value="no" id="attested2" checked>
                                            <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col input-group m-5">
                                <span class="input-group-text">&#2547;</span>
                                <input type="text" name="payment" value="{{ old('payment') }}" class="form-control" placeholder="Payment" >
                                <span class="input-group-text">.00</span>

                            </div>

                            <div class="col input-group m-5">
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="paymentSystem" value="cash"> Cash</label>
                                <label class="radio-inline mr-3">
                                    <input type="radio" name="paymentSystem" value="check"> Check</label>
                                <label class="radio-inline">
                                    <input type="radio" name="paymentSystem" value="mobile banking"> Mobile Banking</label>
                                <label class="radio-inline">
                                    <input type="radio" name="paymentSystem" value="banking"> Banking</label>
                            </div>

                            <div class="col input-group m-5">
                                <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                            </div>

                        </div>

                        <br>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>

            @endif




            @if ($form_type == 'edit')

            <div class="card-body">
                <h3>Edit Passport Data</h3>
                <div class="card p-5">

                    <form class="forms-sample" method="post" action="{{ route('passports.update',$edit->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">

                            <div class="form-group col-md-6">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passpoertNumber" value="{{ $edit->passport_number }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $edit->name }}" class="form-control p-input" id="name" placeholder="Name">
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ $edit->email }}" class="form-control p-input" id="email" placeholder="Email">
                            </div>

                            <div class="form-group col-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" value="{{ $edit->phone }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ $edit->incharge_number }}" class="form-control p-input" id="incharge_number">
                            </div>
                            <div class="col mb-3">
                                <label for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ $edit->passport_issue_date }}" class="form-control p-input" id="visa_number">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <label for="passport_issue_date">Passport Issue Date</label>
                                <input name="passport_issue_date" type="date" value="{{ $edit->passport_number }}" class="form-control p-input" id="passport_issue_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="age">Age</label>
                                <input name="age" type="text" value="{{ $edit->age }}" class="form-control p-input" id="age">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sex">Sex</label>
                                <input name="sex" type="text" value="{{ $edit->sex }}" class="form-control p-input" id="sex">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ $edit->supports }}" class="form-control p-input" id="supports">
                            </div>
                            <div class="col mb-3">
                                <label for="agency">Agency(ওকালা)</label>
                                <input name="agency" type="text" value="{{ $edit->agency }}" class="form-control p-input" id="agency">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="medical_report">Medical Report</label>
                                <input name="medical_report" type="text" value="{{ $edit->medical_report }}" class="form-control p-input" id="medical_report">
                            </div>
                            <div class="col mb-3">
                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ $edit->police_clearance }}" class="form-control p-input" id="police_clearance">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ $edit->licence }}" class="form-control p-input" id="licence">
                            </div>
                            <div class="col mb-3">
                                <label for="occupation">Occupation(পেশা)</label>
                                <input name="occupation" type="text" value="{{ $edit->occupation }}" class="form-control p-input" id="occupation">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ $edit->qualification }}" class="form-control p-input" id="qualification">
                            </div>
                            <div class="col mb-3">
                                <label for="religion">Religion(ধর্ম)</label>
                                <input name="religion" type="text" value="{{ $edit->religion }}  " class="form-control p-input" id="religion">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="nationality">Nationality</label>
                                <input name="nationality" type="text" value="{{ $edit->nationality }}" class="form-control p-input" id="nationality">
                            </div>
                            <div class="col mb-3">
                                <label for="address">Address</label>
                                <input name="address" type="text" value="{{ $edit->address }}" class="form-control p-input" id="address">
                            </div>
                        </div>



                        <div class="row mb-3">

                            <div class="col form-floating mb-3">
                                <label for="applying_country">Select Applying Country</label>
                                <select class="form-select" name="applying_country" id="applying_country">
                                    <option value="{{ $edit->applying_country }}">{{ $edit->applying_country }}</option>
                                    @forelse ( $all_countries as $countrys)
                                    <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>


                            <div class="col form-floating mb-3" id="floatingSelect">
                                <select class="form-select" name="agents" value="{{ old('agents') }}" id="agents">
                                    <option >Select Agents</option>
                                    @forelse ( $all_agents as $agents)
                                    <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="input-group mb-3 col">
                                <select class="form-select" name="visaProcess" value="{{ old('visaProcess') }}" id="visaProcess">
                                    <option value="visaProcess">Visa Process</option>
                                    <option value="saudi_employment">Saudi Employment</option>
                                    <option value="menPower">Men Power</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>

                            <div class="input-group mb-3 col">
                                <div class="row">
                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Fingerprint</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="finger" value="yes" id="finger1" >
                                            <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                            <input type="radio" class="btn-check" name="finger" value="no" id="finger2" checked>
                                            <label class="btn btn-outline-primary" for="finger2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Training</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="training" value="yes" id="training1" >
                                            <label class="btn btn-outline-primary" for="training1">Yes</label>

                                            <input type="radio" class="btn-check" name="training" value="no" id="training2" checked>
                                            <label class="btn btn-outline-primary" for="training2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Attested</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="attested" value="yes" id="attested1" >
                                            <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                            <input type="radio" class="btn-check" name="attested" value="no" id="attested2" checked>
                                            <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col input-group m-5">
                                <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                            </div>

                        </div>

                        <br>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>

            @endif


            @if ($form_type == 'show')

            <div class="card-body">
                <h3>{{ $passports-> name }}</h3>
                <div class="card p-5">

                        <div class="row mb-3">

                            <div class="form-group col-md-6">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passpoertNumber" value="{{ $passports->passport_number }}" class="form-control p-input" id="passpoertNumber" placeholder="Passpoert Number" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $passports->name }}" class="form-control p-input" id="name" placeholder="Name">
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ $passports->email }}" class="form-control p-input" id="email" placeholder="Email">
                            </div>

                            <div class="form-group col-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" value="{{ $passports->phone }}" class="form-control p-input" id="phone" placeholder="Phone Number">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ $passports->incharge_number }}" class="form-control p-input" id="incharge_number">
                            </div>
                            <div class="col mb-3">
                                <label for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ $passports->passport_issue_date }}" class="form-control p-input" id="visa_number">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <label for="passport_issue_date">Passport Issue Date</label>
                                <input name="passport_issue_date" type="date" value="{{ $passports->passport_number }}" class="form-control p-input" id="passport_issue_date">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="age">Age</label>
                                <input name="age" type="text" value="{{ $passports->age }}" class="form-control p-input" id="age">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sex">Sex</label>
                                <input name="sex" type="text" value="{{ $passports->sex }}" class="form-control p-input" id="sex">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ $passports->supports }}" class="form-control p-input" id="supports">
                            </div>
                            <div class="col mb-3">
                                <label for="agency">Agency(ওকালা)</label>
                                <input name="agency" type="text" value="{{ $passports->agency }}" class="form-control p-input" id="agency">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="medical_report">Medical Report</label>
                                <input name="medical_report" type="text" value="{{ $passports->medical_report }}" class="form-control p-input" id="medical_report">
                            </div>
                            <div class="col mb-3">
                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ $passports->police_clearance }}" class="form-control p-input" id="police_clearance">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ $passports->licence }}" class="form-control p-input" id="licence">
                            </div>
                            <div class="col mb-3">
                                <label for="occupation">Occupation(পেশা)</label>
                                <input name="occupation" type="text" value="{{ $passports->occupation }}" class="form-control p-input" id="occupation">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ $passports->qualification }}" class="form-control p-input" id="qualification">
                            </div>
                            <div class="col mb-3">
                                <label for="religion">Religion(ধর্ম)</label>
                                <input name="religion" type="text" value="{{ $passports->religion }}  " class="form-control p-input" id="religion">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group col-6">
                                <label for="nationality">Nationality</label>
                                <input name="nationality" type="text" value="{{ $passports->nationality }}" class="form-control p-input" id="nationality">
                            </div>
                            <div class="col mb-3">
                                <label for="address">Address</label>
                                <input name="address" type="text" value="{{ $passports->address }}" class="form-control p-input" id="address">
                            </div>
                        </div>



                        <div class="row mb-3">

                            <div class="col form-floating mb-3">
                                <label for="applying_country">Select Applying Country</label>
                                <select class="form-select" name="applying_country" id="applying_country">
                                    <option value=""></option>
                                    @forelse ( $all_countries as $countrys)
                                    <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>


                            <div class="col form-floating mb-3" id="floatingSelect">
                                <select class="form-select" name="agents" value="{{ old('agents') }}" id="agents">
                                    <option >Select Agents</option>
                                    @forelse ( $all_agents as $agents)
                                    <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="input-group mb-3 col">
                                <select class="form-select" name="visaProcess" value="{{ old('visaProcess') }}" id="visaProcess">
                                    <option value="visaProcess">Visa Process</option>
                                    <option value="saudi_employment">Saudi Employment</option>
                                    <option value="menPower">Men Power</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>

                            <div class="input-group mb-3 col">
                                <div class="row">
                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Fingerprint</h6>
                                        <div class="btn-group" role="group">
                                            <input type="radio" class="btn-check" name="finger" value="yes" id="finger1" >
                                            <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                            <input type="radio" class="btn-check" name="finger" value="no" id="finger2" checked>
                                            <label class="btn btn-outline-primary" for="finger2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Training</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="training" value="yes" id="training1" >
                                            <label class="btn btn-outline-primary" for="training1">Yes</label>

                                            <input type="radio" class="btn-check" name="training" value="no" id="training2" checked>
                                            <label class="btn btn-outline-primary" for="training2">No</label>

                                        </div>
                                    </div>

                                    <div class="col form-group bg-light rounded p-3">
                                        <h6 class="mb-2">Attested</h6>
                                        <div class="btn-group" role="group">

                                            <input type="radio" class="btn-check" name="attested" value="yes" id="attested1" >
                                            <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                            <input type="radio" class="btn-check" name="attested" value="no" id="attested2" checked>
                                            <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                </div>

            </div>

            @endif



        </div>







    </div>
</div>

@endsection
