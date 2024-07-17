@extends('admin.layout.app')
@section('main-content')

<style>

    /* Basic styling for the form */

    body {
        font-family: Arial, sans-serif;
        }
    .hidden {
        display: none;
    }
    .image-preview {
        max-width: 100px;
        max-height: 100px;
        margin-top: 10px;
        position: relative;
    }
    .cancel-btn {
        position: absolute;
        top: 0;
        right: 0;
        background-color: red;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }
</style>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Passports  Data</li>
    </ol>
</nav>

<div class="container pt-4 px-4">
    <div class="row g-4 mb-3">
        <div class="container pt-4">
            <div class="card-body">
                <div class="card p-5">
                    <div class="card bg-light mb-2 p-3">

                        @if ($form_type == 'create')
                        <form action="{{ route('passports.store') }}" method="POST" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @include('validation.validate')
                            <h3 class="mt-2 mb-2">Passport Entry</h3>
                            <div class="row mb-3">
                                <div class="form-group mb-3 col-md-3">
                                    <label for="name">Passport Holder Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name" placeholder="Passport Holder Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport">Passport Number <span class="text-danger">*</span></label>
                                    <input type="text" name="passport" class="form-control" value="{{ old('passport') }}" id="passport" placeholder="Passport Number" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport_issue_date">Passport Issue Date <span class="text-danger">*</span></label>
                                    <input type="date" name="passport_issue_date" class="form-control" value="{{ old('passport_issue_date') }}" id="passport_issue_date" placeholder="Passport Issue Date" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport_expire_date">Passport Expire Date <span class="text-danger">*</span></label>
                                    <input type="date" name="passport_expire_date" class="form-control" value="{{ old('passport_expire_date') }}" id="passport_expire_date" placeholder="PassPassport Expire Date" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group mb-3 col-md-3">
                                    <label for="fatherName">Father Name</label>
                                    <input type="text" name="fatherName" class="form-control" value="{{ old('fatherName') }}" id="fatherName" placeholder="Father Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="motherName">Mother Name</span></label>
                                    <input type="text" name="motherName" class="form-control" value="{{ old('motherName') }}" id="motherName" placeholder="Mother Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="nid">NID</label>
                                    <input type="text" name="nid" class="form-control" value="{{ old('nid') }}" id="nid" placeholder="Passport Issue Date" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" id="dob" placeholder="Date Of Birth"  onchange="calculateAge()" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="pob">Place Of Birth</label>
                                    <input type="text" name="pob" class="form-control" value="{{ old('pob') }}" id="pob" placeholder="Place Of Birth" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="gander">Gander</label>
                                        <select class="form-select" name="gander" id="gander">
                                            <option vallue="" selected>-- Select --</option>
                                            <option vallue="male">Male</option>
                                            <option vallue="female">Female</option>
                                            <option vallue="transgender">Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select class="form-select" name="religion" id="religion">
                                            <option vallue="" selected>-- Select --</option>
                                            <option vallue="islam">Islam</option>
                                            <option vallue="hinduism">Hinduism</option>
                                            <option vallue="buddhism">Buddhism</option>
                                            <option vallue="christianity">Christianity</option>
                                            <option vallue="sikhism">Sikhism</option>
                                            <option vallue="judaism">Judaism</option>
                                            <option vallue="atheism">Atheism</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="cell">Phone Number</label>
                                    <input type="tel" name="cell" class="form-control" value="{{ old('cell') }}" id="cell" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="service">Service Type</label>
                                        <select class="form-select" name="service" id="service">
                                            <option value="" selected>-- Select --</option>
                                        @foreach( $service as $data )
                                        <option value="{{ $data->id }}">{{ $data->service }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="agentsBD">Agent (Local)</label>
                                        <select class="form-select" name="agentsBD" id="agentsBD">
                                            <option value="" selected>-- Select Agents --</option>
                                            @forelse ( $all_agents as $agent)
                                            <option value="{{$agent -> id }}">{{$agent -> name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="applying_country">Select Applying Country</label>
                                        <select class="form-select" name="applying_country" id="applying_country">
                                            <option value="" selected></option>
                                            @forelse ( $all_countries as $countrys)
                                            <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <!-- script for, show a input box if selection value equal to get elementbyid either hide  -->
                                <script>
                                    // JavaScript to get the selected value
                                    document.getElementById('applying_country').addEventListener('change', function() {
                                        const selectedValue = this.value;
                                        const workTypeRow = document.getElementById('workTypeRow');
                                        if(selectedValue === 'Saudi Arabia' ){
                                            workTypeRow.style.display = 'flex';
                                        }else{
                                            workTypeRow.style.display = 'none';
                                        }

                                    });
                                </script>
                                <div class="row">
                                    <div class="col-md-2" id="workTypeRow" style="display:none;">
                                        <div class="form-group">
                                            <label for="work_type">Work Type</label>
                                            <input type="text" class="form-control" name="work_type" id="work_type" placeholder="Work Type">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <h6>Attested</h6>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check" name="attested" value="1" id="yes" >
                                                <label class="btn btn-outline-primary" for="yes">Yes</label>

                                                <input type="radio" class="btn-check" name="attested" value="0" id="no" checked>
                                                <label class="btn btn-outline-primary" for="no">No</label>
                                            </div>
                                    </div>
                                    <div class="form-floating mb-3 col-md-3">
                                        <input type="date" class="form-control" name="visaExp" id="visaExp" placeholder="Visa Expire Date">
                                        <label for="workType">Visa Expire Date</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="form-label" for="photo">Papers & Files</label>
                                    <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-unstyled">
                                        <li id="imagepreview" style="display:inline;"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary">Add Data</button>
                                </div>
                            </div>
                        </form>

                        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Your Submission</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="confirmFormData">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <th><p id="name"></p></th>
                                                    <th>Passport Number</th>
                                                    <th><p id="passport"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Passport Issue Date</th>
                                                    <th><p id="passport_issue_date"></p></th>
                                                    <th>Passport Expire Date</th>
                                                    <th><p id="passport_expire_date"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Father Name</th>
                                                    <th><p id="fatherName"></p></th>
                                                    <th>Mother Name</th>
                                                    <th><p id="motherName"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>NID</th>
                                                    <th><p id="nid"></p></th>
                                                    <th>Date Of Birth</th>
                                                    <th><p id="dob"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Place Of Birth</th>
                                                    <th><p id="pob"></p></th>
                                                    <th>Gander</th>
                                                    <th><p id="gander"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Religion</th>
                                                    <th><p id="religion"></p></th>
                                                    <th>Phone Number</th>
                                                    <th><p id="cell"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Service</th>
                                                    <th><p id="service"></p></th>
                                                    <th>Agent (Local)</th>
                                                    <th><p id="agentsBD"></p></th>
                                                </tr>
                                                <tr>
                                                    <th>Applying Country</th>
                                                    <th><p id="applying_country"></p></th>
                                                    <th>Attested</th>
                                                    <th>
                                                        @if (session('attested') == 1)
                                                            <p id="attested"></p>
                                                            Attested
                                                        @else
                                                            Not Attested
                                                        @endif
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Visa Expire Date</th>
                                                    <th><p id="visaExp"></p></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
                                        <button type="button" class="btn btn-primary" id="confirmButton">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if ($form_type == 'edit')


                        <form action="{{ route('passports.update',$edit->id) }}" method="post">
                            @csrf
                            @method('put')
                            @include('validation.validate')
                            <h3 class="mt-2 mb-2">{{ $edit->name }} / {{ $edit->passport }}</h3>

                            <div class="row mb-3">
                                <div class="form-group mb-3 col-md-3">
                                    <label for="name">Passport Holder Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ $edit->name }}" id="name" placeholder="Passport Holder Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport">Passport Number <span class="text-danger">*</span></label>
                                    <input type="text" name="passport" class="form-control" value="{{ $edit->passport }}" id="passport" placeholder="Passport Number" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport_issue_date">Passport Issue Date <span class="text-danger">*</span></label>
                                    <input type="date" name="passport_issue_date" class="form-control" value="{{ $edit->passport_issue_date }}" id="passport_issue_date" placeholder="Passport Issue Date" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="passport_expire_date">Passport Expire Date <span class="text-danger">*</span></label>
                                    <input type="date" name="passport_expire_date" class="form-control" value="{{ $edit->passport_expire_date }}" id="passport_expire_date" placeholder="PassPassport Expire Date" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group mb-3 col-md-3">
                                    <label for="fatherName">Father Name</label>
                                    <input type="text" name="father" class="form-control" value="{{ $edit->father }}" id="father" placeholder="Father Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label for="motherName">Mother Name</span></label>
                                    <input type="text" name="mother" class="form-control" value="{{ $edit->mother }}" id="mother" placeholder="Mother Name" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="nid">NID</label>
                                    <input type="text" name="nid" class="form-control" value="{{ $edit->nid }}" id="nid" placeholder="Passport Issue Date" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="{{ $edit->dob }}" id="dob" placeholder="Date Of Birth"  onchange="calculateAge()" required>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="pob">Place Of Birth</label>
                                    <input type="text" name="pob" class="form-control" value="{{ $edit->pob }}" id="pob" placeholder="Place Of Birth" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="gender">gender</label>
                                        <select class="form-select" name="gender" id="gender">
                                            <option vallue="{{ $edit->gender }}" selected>{{ $edit->gender }}</option>
                                            <option vallue="male">Male</option>
                                            <option vallue="female">Female</option>
                                            <option vallue="transgender">Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="religion">Religion</label>
                                        <select class="form-select" name="religion" id="religion">
                                            <option vallue="{{ $edit->religion }}" selected>{{ $edit->religion }}</option>
                                            <option vallue="islam">Islam</option>
                                            <option vallue="hinduism">Hinduism</option>
                                            <option vallue="buddhism">Buddhism</option>
                                            <option vallue="christianity">Christianity</option>
                                            <option vallue="sikhism">Sikhism</option>
                                            <option vallue="judaism">Judaism</option>
                                            <option vallue="atheism">Atheism</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 col-md-2">
                                    <label for="cell">Phone Number</label>
                                    <input type="tel" name="cell" class="form-control" value="{{ $edit->cell }}" id="cell" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="service">Service Type</label>
                                        <select class="form-select" name="service" id="service">
                                            <option value="{{ optional($edit->servic)->id }}" selected>{{ optional($edit->servic)->service }}</option>
                                        @foreach( $service as $data )
                                        <option value="{{ $data->id }}">{{ $data->service }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="agentsBD">Agent (Local)</label>
                                        <select class="form-select" name="agentsBD" id="agentsBD">
                                            <option value="{{ optional($edit->agent)->id }}" selected>{{optional($edit->agent)->name }}</option>
                                            @forelse ( $all_agents as $agent)
                                            <option value="{{$agent -> id }}">{{$agent -> name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="applying_country">Select Applying Country</label>
                                        <select class="form-select" name="applying_country" id="applying_country">
                                            <option value="{{ $edit->applying_country }}" selected>{{ $edit->applying_country }}</option>
                                            @forelse ( $all_countries as $countrys)
                                            <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    @if(!empty($edit->work_type) )

                                    <div class="col-md-2" id="workTypeRow" >
                                        <div class="form-group">
                                            <label for="work_type">Work Type</label>
                                            <input type="text" class="form-control" name="work_type" value="{{ $edit->work_type }}" id="work_type" placeholder="Work Type">
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group col-md-2">
                                        <h6>Attested</h6>
                                            <div class="btn-group">
                                                <input type="radio" class="btn-check" name="attested" value="1" id="yes"
                                                    {{ $edit->attested == 1 ? 'checked' : '' }}>
                                                <label class="btn btn-outline-primary" for="yes">Yes</label>

                                                <input type="radio" class="btn-check" name="attested" value="0" id="no"
                                                    {{ $edit->attested == 0 ? 'checked' : '' }}>
                                                <label class="btn btn-outline-primary" for="no">No</label>
                                            </div>
                                    </div>
                                    <div class="form-floating mb-3 col-md-3">
                                        <input type="date" class="form-control" name="visaExp" value="{{ $edit->visaExp }}" id="visaExp" placeholder="Visa Expire Date">
                                        <label for="workType">Visa Expire Date</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="form-label" for="photo">Papers & Files</label>
                                    <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-unstyled">
                                        <li id="imagepreview" style="display:inline;"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary">Update information</button>
                                </div>
                            </div>
                        </form>


                        @endif


                    </div>
                </div>
            </div>



            @if ($form_type == 'show')

            <div class="card-body">
                <h3>{{ $passports -> name}} Passport Data</h3>
                <h6>Passport Number : {{ $passports -> passport}}</h6>
                <div class="card p-5">
                    <div class="row mb-3">
                        <div class="form-group col-md-4">
                            <label for="name">Passport Holder Name</label>
                            <input type="text" name="passport_number" value="{{ $passports -> passport }}" class="form-control" id="passpoertNumber" placeholder="{{ $passports -> passport_number }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="passpoertNumber">Passport Number</label>
                            <input type="text" name="passport_number" value="{{ $passports -> passport }}" class="form-control" id="passpoertNumber" placeholder="{{ $passports -> passport_number }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="passport_issue_date">Passport Issue Date</label>
                            <input name="passport_issue_date" type="date" value="{{ $passports -> passport_issue_date}}" class="form-control" id="passport_issue_date" readonly>
                        </div>

                            <div class="col-md-4">
                                <label for="visaProcess">Visa Procesing type</label>
                                <select class="form-select" name="visaProcess" value="{{ $passports -> visaProcess}}" id="visaProcess" readonly>
                                    <option value="visaProcess">Visa Process</option>
                                    <option value="menPower">Men Power</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>

                        </div>
                        <div class="card bg-light mb-3">

                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Personal Information</h4>
                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-3">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" name="phone" value="{{ $passports -> phone}}" class="form-control p-input" id="phone" readonly>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="address">Address</label>
                                        <input name="address" type="text" value="{{ $passports -> address}}" class="form-control p-input" id="address" readonly>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{ $passports -> email}}" class="form-control p-input" id="email" readonly>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="age">Age</label>
                                        <input name="age" type="text" value="{{ $passports -> age}}" class="form-control p-input" id="age" readonly>
                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-md-2">
                                        <label for="religion">Religion(ধর্ম)</label>
                                        <input name="religion" type="text" value="{{ $passports -> religion}}" class="form-control p-input" id="religion" readonly>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="nationality">Nationality</label>
                                        <input name="nationality" type="text" value="{{ $passports -> nationality}}" class="form-control p-input" id="nationality" readonly>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="sex">Sex</label>
                                        <input name="sex" type="text" value="{{ $passports -> sex}}" class="form-control p-input" id="sex" readonly>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="occupation">Occupation(পেশা)</label>
                                        <input name="occupation" type="text" value="{{ $passports -> occupation}}" class="form-control p-input" id="occupation" readonly>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-3">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ $passports -> incharge_number}}" class="form-control p-input" id="incharge_number" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ $passports -> visa_number}}" class="form-control p-input" id="visa_number" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ $passports -> supports}}" class="form-control p-input" id="supports" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="agency">Agency(ওকালা)</label>
                                <input name="agency" type="text" value="{{ $passports -> agency}}" class="form-control p-input" id="agency" readonly>
                            </div>

                        </div>


                        <div class="row form-group mb-3">

                            <div class="col-md-4">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ $passports -> licence}}" class="form-control p-input" id="licence" readonly>
                            </div>

                            <div class="col-md-4">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ $passports -> qualification}}" class="form-control p-input" id="qualification" readonly>
                            </div>

                            <div class="col-md-4">

                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ $passports -> police_clearance}}" class="form-control" id="police_clearance" readonly>

                            </div>

                        </div>


                        <div class="row card mb-3">

                            <div class="input-group card-body">

                                <div class="col-md-2 p-2">
                                    <h6 class="mb-2">Fingerprint</h6>

                                    <div class="btn-group" role="group">
                                        @if ($passports -> police_clearance == 1 )

                                        <input type="radio" class="btn-check" name="finger" value="1" id="finger1" checked>
                                        <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                        <input type="radio" class="btn-check" name="finger" value="0" id="finger2">
                                        <label class="btn btn-outline-primary" for="finger2">No</label>

                                        @else

                                        <input type="radio" class="btn-check" name="finger" value="1" id="finger1" >
                                        <label class="btn btn-outline-primary" for="finger1">Yes</label>

                                        <input type="radio" class="btn-check" name="finger" value="0" id="finger2" checked>
                                        <label class="btn btn-outline-primary" for="finger2">No</label>

                                        @endif


                                    </div>
                                </div>

                                <div class="col-md-2 p-2">
                                    <h6 class="mb-2">Training</h6>
                                    <div class="btn-group" role="group">

                                        @if ($passports -> training == 1)

                                        <input type="radio" class="btn-check" name="training" value="1" id="training1" checked>
                                        <label class="btn btn-outline-primary" for="training1">Yes</label>

                                        <input type="radio" class="btn-check" name="training" value="0" id="training2" >
                                        <label class="btn btn-outline-primary" for="training2">No</label>

                                        @else

                                        <input type="radio" class="btn-check" name="training" value="1" id="training1" >
                                        <label class="btn btn-outline-primary" for="training1">Yes</label>

                                        <input type="radio" class="btn-check" name="training" value="0" id="training2" checked>
                                        <label class="btn btn-outline-primary" for="training2">No</label>

                                        @endif


                                    </div>
                                </div>

                                <div class="col-md-3 p-2">
                                    <h6 class="mb-2">Attested</h6>
                                    <div class="btn-group" role="group">

                                        @if ($passports -> attested == 1)

                                        <input type="radio" class="btn-check" name="attested" value="1" id="attested1" checked>
                                        <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                        <input type="radio" class="btn-check" name="attested" value="0" id="attested2">
                                        <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                                        @else

                                        <input type="radio" class="btn-check" name="attested" value="1" id="attested1" >
                                        <label class="btn btn-outline-primary" for="attested1">Attested</label>

                                        <input type="radio" class="btn-check" name="attested" value="0" id="attested2" checked>
                                        <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                                        @endif



                                    </div>
                                </div>

                                <div class="col-md-3 p-2">

                                    <h6 class="mb-2">Medical Report</h6>
                                    <div class="btn-group" role="group">

                                        @if ($passports->medical_report == 1)

                                        <input type="radio" class="btn-check" name="medical_report" value="1" id="attested1" checked>
                                        <label class="btn btn-outline-primary" for="attested1">Fit</label>

                                        <input type="radio" class="btn-check" name="medical_report" value="0" id="attested2">
                                        <label class="btn btn-outline-primary" for="attested2">Unfit</label>

                                        @else

                                        <input type="radio" class="btn-check" name="medical_report" value="1" id="attested1" >
                                        <label class="btn btn-outline-primary" for="attested1">Fit</label>

                                        <input type="radio" class="btn-check" name="medical_report" value="0" id="attested2" checked>
                                        <label class="btn btn-outline-primary" for="attested2">Unfit</label>

                                        @endif

                                    </div>

                                </div>
                                <div>
                                    <ul class="list-unstyled">
                                        @foreach(json_decode($passports->photos) as $photo)
                                            <li>
                                                <a href="{{ asset('photos/passportsPaper/' . $photo) }}" target="_blank"><img ><img style="width: auto; height: 120px;" src="{{ url('photos/passportsPaper/' . $photo) }}"></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <button onclick="window.print()">Print Photos</button>

                                </div>

                            </div>
                        </div>

                </div>
            </div>

            @endif

        </div>

    </div>
</div>


<script>
    const imagePreviewContainer = document.getElementById('imagepreview');
        const photoInput = document.getElementById('photo');

        // Function to preview images
        function updateImagePreview() {
            imagePreviewContainer.innerHTML = ''; // Clear previous images

            Array.from(photoInput.files).forEach((file, index) => {
                const li = document.createElement('li');
                li.style.position = 'relative';
                li.style.display = 'inline-block';

                const img = document.createElement('img');
                img.classList.add('image-preview');
                img.src = URL.createObjectURL(file);
                img.onload = () => URL.revokeObjectURL(img.src); // Clean up memory

                const cancelBtn = document.createElement('button');
                cancelBtn.textContent = 'X';
                cancelBtn.classList.add('cancel-btn');
                cancelBtn.addEventListener('click', () => {
                    removeImage(index);
                });

                li.appendChild(img);
                li.appendChild(cancelBtn);
                imagePreviewContainer.appendChild(li);
            });
        }

        function removeImage(index) {
            const dt = new DataTransfer();
            const files = photoInput.files;

            for (let i = 0; i < files.length; i++) {
                if (i !== index) {
                    dt.items.add(files[i]);
                }
            }

            photoInput.files = dt.files;
            updateImagePreview();
        }

        photoInput.addEventListener('change', updateImagePreview);

        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            const confirmFormDataDiv = document.getElementById('confirmFormData');
            confirmFormDataDiv.innerHTML = ''; // Clear previous content

            // Get all form data except files
            const formData = new FormData(document.getElementById('myForm'));
            formData.forEach((value, key) => {
                if (key !== 'gallery[]') {
                    const p = document.createElement('p');

                    // Check if the key is 'attested' and convert the value to 'Yes' or 'No'
                    if (key === 'attested') {
                        value = (value === '1') ? 'Yes' : 'No';
                    }
                    // Check if the key is 'attested' and convert the value to 'Yes' or 'No'
                    if (key === 'attested') {
                        value = (value === '1') ? 'Yes' : 'No';
                    }

                    p.textContent = `${key}: ${value}`;
                    confirmFormDataDiv.appendChild(p);
                }
            });

            // Display image previews in the confirmation modal
            const files = formData.getAll('gallery[]');
            const imagePreview = document.createElement('div');
            imagePreview.id = 'modalImagePreview';

            files.forEach(file => {
                if (file instanceof File) {
                    const img = document.createElement('img');
                    img.classList.add('image-preview');
                    img.src = URL.createObjectURL(file);
                    imagePreview.appendChild(img);
                }
            });

            confirmFormDataDiv.appendChild(imagePreview);

            // Display the confirmation modal
            const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'), {});
            confirmationModal.show();
        });

        document.getElementById('confirmButton').addEventListener('click', function() {
            document.getElementById('myForm').submit();
        });

        document.getElementById('floatingSelectGrid').addEventListener('change', function() {
            const workTypeRow = document.getElementById('workTypeRow');
            const workTypeInput = document.getElementById('workType');
            if (this.value === 'Saudi Arabia') {
                workTypeRow.classList.remove('hidden');
                workTypeInput.setAttribute('required', 'required');
            } else {
                workTypeRow.classList.add('hidden');
                workTypeInput.removeAttribute('required');
            }
        });
</script>


@endsection
