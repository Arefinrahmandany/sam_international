@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Visa Submission</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('VisaSubmission.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        @if($form_type == 'create')

        <!-- form start -->
        <form method="post" action="{{ route('VisaSubmission.store')}}">
            @csrf
            @include('validation.validate')

            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">

                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                    </div>

                    <div class="input-group mb-3">
                        <select name="applyingcountry" class="form-select">
                            <option>Select the Country</option>
                            @forelse ( $all_countries as $countrys)
                            <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <select name="agencies" class="form-select">
                            <option selected>Select the Agency</option>
                          {{--   @forelse ( $all_visaOffices as $visaOffices)
                            <option value="{{$visaOffices -> id }}">{{$visaOffices -> name }}</option>
                            @empty
                            @endforelse
                             --}}
                        </select>
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="applyingdate" class="form-label">Submission Date</label>
                        <input type="date" name="applyingdate" class="form-control col-md-10" id="applyingdate">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>

                </div>
            </div>

        </form>
        <!-- form End -->

        @endif

        @if($form_type == 'edit')

        <!-- form start -->
        <form method="post" action="{{ route('VisaSubmission.update',$VisaSubmission -> id)}}">
            @csrf
            @method('PUT')

            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">

                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" value="{{ $VisaSubmission -> passport_number }}" class="form-control col-md-10" placeholder="Passport Number">
                    </div>

                    <div class="input-group mb-3">
                        <select name="applyingcountry" class="form-select">
                            @if($VisaSubmission->applyingcountry)
                                <option value="{{ $VisaSubmission->applyingcountry }}">
                                    {{ $VisaSubmission->applyingcountry }}
                                </option>
                            @endif
                            @forelse ($all_countries as $countrys)
                                <option value="{{ $countrys->code }}">{{ $countrys->name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>



                    <div class="input-group mb-3">
                        <select name="agencies" class="form-select">
                        {{--
                            <option selected>Select the Agency</option>
                                @forelse ( $all_visaOffices as $visaOffices)
                                    <option value="{{$visaOffices -> id }}">{{$visaOffices -> name }}</option>
                                @empty
                                @endforelse
                        --}}
                        </select>
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="applyingdate" class="form-label">Submission Date</label>
                        <input type="date" name="applyingdate" class="form-control col-md-10" id="applyingdate">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>

                </div>
            </div>

        </form>
        <!-- form End -->

        @endif



    </div>
</div>
@endsection
