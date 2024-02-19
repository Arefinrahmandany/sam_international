@extends('admin.layout.app')
@section('main-content')


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
                        <form action="{{ route('passports.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('validation.validate')
                            <h3 class="mt-2 mb-2">Passport Entry</h3>

                            <div class="row mb-3">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport">Passport Number</label>
                                    <input type="text" name="passport" value="{{ old('passport') }}" class="form-control" id="passport">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control p-input" id="name">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport_issue_date">Passport Issue Date</label>
                                    <input name="passport_issue_date" type="date" value="{{ old('passport_issue_date') }}" class="form-control" id="passport_issue_date">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport_expire_date">Passport Expire Date</label>
                                    <input name="passport_expire_date" type="date" value="{{ old('passport_expire_date') }}" class="form-control" id="passport_expire_date">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="father">Father Name</label>
                                    <input name="father" type="text" value="{{ old('father') }}" class="form-control p-input" id="father">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="mother">Mother Name</label>
                                    <input name="mother" type="text" value="{{ old('mother') }}" class="form-control p-input" id="mother">
                                </div>

                            </div>

                            <div class="row mb-3">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="service">Service Type</label>
                                    <select class="form-select" name="service" value="{{ old('service') }}" id="service">
                                        <option value="">-- Select --</option>
                                        @foreach( $service as $data )
                                        <option value="{{ $data->id }}">{{ $data->service }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="agentsBD">Agent in Bangladesh</label>
                                    <select class="form-select" name="agentsBD" value="{{ old('agentsBD') }}" id="agentsBD">
                                        <option >Select Agents</option>
                                        @forelse ( $all_agents as $agents)
                                        <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="applying_country">Select Applying Country</label>
                                    <select class="form-select" name="applying_country" id="applying_country">
                                        <option value=""></option>
                                        @forelse ( $all_countries as $countrys)
                                        <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="address">Place Of Birth</label>
                                    <input name="address" type="text" value="{{ old('address') }}" class="form-control p-input" id="address">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="gender">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option vallue="">-- Select --</option>
                                        <option vallue="male">Male</option>
                                        <option vallue="female">Female</option>
                                        <option vallue="transgender">Transgender</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="religion">Religion(ধর্ম)</label>
                                    <select name="religion" class="form-select" id="religion">
                                        <option vallue="">-- Select --</option>
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

                            <div class="row">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="cell">Phone Number</label>
                                    <input name="cell" type="text" value="{{ old('cell') }}" class="form-control p-input" id="cell">
                                </div>

                                <div class="col-md-3 m-2">
                                    <input class="form-control form-control-lg" name="gallery[]" id="photo" type="file" multiple>
                                </div>

                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary">Add Data</button>
                                </div>
                            </div>

                        </form>
                        @endif

                        @if ($form_type == 'edit')
                        <form action="{{ route('passports.update',$edit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @include('validation.validate')
                            <h3 class="mt-2 mb-2">{{ $edit->name }} / {{ $edit->passport_number }}</h3>

                            <div class="row mb-3">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport_number">Passport Number</label>
                                    <input type="text" name="passport_number" value="{{ $edit->passport_number }}" class="form-control" id="passport_number">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" value="{{ $edit->name }}" class="form-control p-input" id="name">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport_issue_date">Passport Issue Date</label>
                                    <input name="passport_issue_date" type="date" value="{{ $edit->passport_issue_date }}" class="form-control" id="passport_issue_date">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="passport_expire_date">Passport Expire Date</label>
                                    <input name="passport_expire_date" type="date" value="{{ $edit->passport_expire_date }}" class="form-control" id="passport_expire_date">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="father">Father Name</label>
                                    <input name="father" type="text" value="{{ $edit->father }}" class="form-control p-input" id="father">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="mother">Mother Name</label>
                                    <input name="mother" type="text" value="{{ $edit->mother }}" class="form-control p-input" id="mother">
                                </div>

                            </div>

                            <div class="row mb-3">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="visa_process">Visa Procesing type</label>
                                    <select class="form-select" name="visa_process" id="visa_process">
                                        <option value="{{ $edit->visa_process }}">{{ $edit->visa_process }}</option>
                                        <option value="">-- Select --</option>
                                        <option value="houseWorker">House Worker</option>
                                        <option value="company">Company</option>
                                        <option value="recruit">Recruit</option>
                                        <option value="manpower">Manpower</option>
                                        <option value="visaProcess">Visa Process</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="agentsBD">Agent in Bangladesh</label>
                                    <select class="form-select" name="agentsBD" id="agentsBD">
                                        <option value="{{ $edit->agentsBD }}">{{ $edit->agents->name }}</option>
                                        @forelse ( $all_agents as $agents)
                                        <option value="{{$agents -> id }}">{{$agents -> name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="applying_country">Select Applying Country</label>
                                    <select class="form-select" name="applying_country" id="applying_country">
                                        <option value="{{ $edit->applying_country }}">{{ $edit->applying_country }}</option>
                                        @forelse ( $all_countries as $countrys)
                                        <option value="{{$countrys -> name }}">{{$countrys -> name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="address">Place Of Birth</label>
                                    <input name="address" type="text" value="{{ $edit->address }}" class="form-control p-input" id="address">
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="gender">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option vallue="{{ $edit->gender }}">{{ $edit->gender }}</option>
                                        <option vallue="male">Male</option>
                                        <option vallue="female">Female</option>
                                        <option vallue="transgender">Transgender</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="religion">Religion(ধর্ম)</label>
                                    <select name="religion" class="form-select" id="religion">
                                        <option vallue="{{ $edit->religion }}">{{ $edit->religion }}</option>
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

                            <div class="row">

                                <div class="form-group col-md-2">
                                    <label class="form-label" for="cell">Phone Number</label>
                                    <input name="cell" type="text" value="{{ $edit->cell }}" class="form-control p-input" id="cell">
                                </div>

                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary">Update Data</button>
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
                <div class="card p-5">


                        <div class="row mb-3">

                            <div class="form-group col-md-4">
                                <label for="passpoertNumber">Passport Number</label>
                                <input type="text" name="passport_number" value="{{ $passports -> passport_number }}" class="form-control" id="passpoertNumber" placeholder="{{ $passports -> passport_number }}" readonly>
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
    function printPhotos() {
        // Open a new window for printing
        var printWindow = window.open('', '_blank');

        // Add styles or additional content for printing
        var printContent = `
            <style>
                /* Add your print styles here */
                body {
                    font-size: 14px;
                }
            </style>
            <ul>
                ${Array.from(document.querySelectorAll('ul li')).map(li => '<li>' + li.innerHTML + '</li>').join('')}
            </ul>
        `;

        // Write the content to the new window
        printWindow.document.write(printContent);

        // Close the document stream to finish the HTML structure
        printWindow.document.close();

        // Trigger the print dialog
        printWindow.print();
    }
</script>


@endsection
