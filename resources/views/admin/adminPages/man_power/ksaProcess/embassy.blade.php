@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">Visa Process</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('embassy.index') }}" class="text-decoration-none">Embassy</a></li>
    </ol>
</nav>
<main>

    <div class="container pt-4 px-4">
        <div class="row g-4 mb-3">
            <h5>Embassy Submission</h5>
            <div class="card">
                <div class="card-body">
                    @if ( $form_type == 'create')
                    <form method="POST" action="{{ route('embassy.store') }}">
                        @csrf
                        @include('validation.validate')
                        <div class="row">
                            <div class="m-2">
                                <h3>New Form</h3>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-2">
                                <label class="form-label" for="passport">Passport Number</label>
                                <input name="passport" type="text" value="{{ old('passport') }}" list="passports" class="form-control p-input" id="passport">
                                <datalist id="passports">
                                    @foreach( $passport as $passport )
                                    <option value="{{ $passport->passport }}"></option>
                                    @endforeach
                                </datalist>
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
                        <div class="row mt-2">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary">Add Data</button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @if ( $form_type == 'edit')
                    <form method="POST" action="{{ route('embassy.update',$embassy->id) }}">
                        @csrf
                        @method('put')
                        @include('validation.validate')
                        <div class="row">
                            <div class="m-2">
                                <h3>Edit Form</h3>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-2">
                                <label class="form-label" for="passport">Passport Number</label>
                                <input name="passport" type="text" value="{{ $embassy->passport }}" class="form-control" id="passport" readonly>
                            </div>

                            <div class="form-group col-md-2">
                                <label class="form-label" for="visa_number">Visa Number</label>
                                <input name="visa_number" type="text" value="{{ $embassy->visa_number }}" class="form-control p-input" id="visa_number">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="supports">Musaned(মুসানেদ)</label>
                                <input name="supports" type="text" value="{{ $embassy->supports }}" class="form-control p-input" id="supports">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="okala">Agency(ওকালা)</label>
                                <input name="okala" type="text" value="{{ $embassy->okala }}" class="form-control p-input" id="okala">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="first_Party">1st Party Name</label>
                                <input name="first_Party" type="text" value="{{ $embassy->first_Party }}" class="form-control p-input" id="first_Party">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group  col-md-2">
                                <label for="licence">Company Licence Number</label>
                                <input name="licence" type="text" value="{{ $embassy->licence }}" class="form-control p-input" id="licence">
                            </div>

                            <div class="form-group  col-md-4">
                                <label for="qualification">Qualification(যোগ্যতা এবং অভিজ্ঞতা সার্টিফিকেট)</label>
                                <input name="qualification" type="text" value="{{ $embassy->qualification }}" class="form-control p-input" id="qualification">
                            </div>

                            <div class="form-group  col-md-3">
                                <label for="police_clearance">Police Clearance</label>
                                <input name="police_clearance" type="text" value="{{ $embassy->police_clearance }}" class="form-control" id="police_clearance">
                            </div>
                            <div class="form-group  col-md-3">
                                <label for="incharge_number">Incharge Number</label>
                                <input name="incharge_number" type="text" value="{{ $embassy->incharge_number }}" class="form-control p-input" id="incharge_number">
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary">Update Data</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="mt-2">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Passport Number</th>
                            <th>Visa Number</th>
                            <th>Musaned</th>
                            <th>Agency</th>
                            <th>1st Party Name</th>
                            <th>Company Licence Number</th>
                            <th>Qualification</th>
                            <th>Police Clearance</th>
                            <th>Incharge Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $embassyList as $data )
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $data -> passport }}</td>
                            <td>{{ $data -> visa_number  }}</td>
                            <td>{{ $data -> supports  }}</td>
                            <td>{{ $data -> okala  }}</td>
                            <td>{{ $data -> first_Party  }}</td>
                            <td>{{ $data -> licence  }}</td>
                            <td>{{ $data -> qualification  }}</td>
                            <td>{{ $data -> police_clearance  }}</td>
                            <td>{{ $data -> incharge_number  }}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="m-1">
                                        <a href="{{ route('embassy.edit',$data->id) }}" class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i></a>
                                    </div>
                                    <div class="m-1">
                                        <a href="{{ route('embassy.trash',$data->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
