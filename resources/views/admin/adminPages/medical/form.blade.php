@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Medical</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('medical.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        @if ($form_type == 'create')

        <div class="container">
            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">
                    <!-- form start -->

                    <form method="post" action="{{ route('medical.store')}}">

                        @csrf
                        @include('validation.validate')

                        <div class="input-group mb-3 row">
                            <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                        </div>

                        <div class="input-group mb-3 row">
                            <label for="medicalDate" class="form-label">Medical Date</label>
                            <input type="date" name="medicalDate" class="form-control col-md-10"  id="medicalDate">
                        </div>

                        <div class="form-group bg-light rounded p-3">
                            <h6 class="mb-2">Medical Status</h6>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="medicalstatus" value="1" id="medicalstatus1" >
                                <label class="btn btn-outline-primary" for="medicalstatus1">Fit</label>

                                <input type="radio" class="btn-check" name="medicalstatus" value="0" id="medicalstatus2" checked>
                                <label class="btn btn-outline-primary" for="medicalstatus2">Unfit</label>

                            </div>
                        </div>

                        <div class="input-group mb-3 row">
                            <label for="expirydate" class="form-label">Expiry Date</label>
                            <input type="date" name="expiryDate" class="form-control col-md-10" id="expirydate">
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create Status</button>
                        </div>

                    </form>

                    <!-- form End -->

                </div>
            </div>
        </div>

        @endif

        @if ($form_type == 'edit')

        <div class="container">
            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">
                    <!-- form start -->

                    <form method="post" action="{{ route('medical.update',$medical->id)}}">

                        @csrf
                        @method('PUT')

                        <div class="input-group mb-3 row">
                            <input type="text" name="passportNumber" value="{{ $medical -> passport_number }}" class="form-control col-md-10" placeholder="Passport Number">
                        </div>

                        <div class="input-group mb-3 row">
                            <label for="medicalDate" class="form-label">Medical Date</label>
                            <input type="date" name="medicalDate" value="{{ $medical -> medical_date }}" class="form-control col-md-10"  id="medicalDate">
                        </div>

                        <div class="form-group bg-light rounded p-3">
                            <h6 class="mb-2">Medical Status</h6>
                            <div class="btn-group" role="group">

                                @if($medical->medicalStatus == 1)
                                    <input type="radio" class="btn-check" name="medicalstatus" value="1" id="medicalstatus1" checked >
                                    <label class="btn btn-outline-primary" for="medicalstatus1" value="1" >Fit</label>

                                    <input type="radio" class="btn-check" name="medicalstatus" value="0" id="medicalstatus2">
                                    <label class="btn btn-outline-primary" for="medicalstatus2" value="0" >Unfit</label>
                                @else
                                    <input type="radio" class="btn-check" name="medicalstatus" value="1" id="medicalstatus1">
                                    <label class="btn btn-outline-primary" for="medicalstatus1" value="1" >Fit</label>

                                    <input type="radio" class="btn-check" name="medicalstatus" value="0" id="medicalstatus2" checked>
                                    <label class="btn btn-outline-primary" for="medicalstatus2" value="0" >Unfit</label>
                                @endif

                            </div>
                        </div>

                        <div class="input-group mb-3 row">
                            <label for="expirydate" class="form-label">Expiry Date</label>
                            <input type="date" name="expiryDate" value="{{ $medical -> expiryDate }}" class="form-control col-md-10" id="expirydate">
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update Status</button>
                        </div>

                    </form>

                    <!-- form End -->

                </div>
            </div>
        </div>

        @endif



    </div>
</div>
@endsection
