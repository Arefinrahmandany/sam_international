@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Visa Status Check</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('VisaStatusCheck.index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <!-- form start -->
        @if($form_type == 'create')
        <form method="post" action="{{ route('VisaStatusCheck.store')}}">
            @csrf
            @include('validation.validate')


            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">

                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" class="form-control col-md-10" placeholder="Passport Number">
                    </div>

                    <div class="input-group mb-3" name="visaStatus" >
                        <label for="visaStatus" class="form-label">Visa Status</label>
                    </div>

                    <div class="btn-group mb-3" role="group">
                        <input type="radio" name="visaStatus" value="accepted" class="btn-check" id="accepted">
                        <label class="btn btn-outline-primary" for="accepted">Accepted</label>

                        <input type="radio" name="visaStatus" value="rejected" class="btn-check" id="rejected" checked>
                        <label class="btn btn-outline-primary" for="rejected">Rejected</label>
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="issueDate" class="form-label">Issue Date</label>
                        <input type="date" name="issueDate" class="form-control col-md-10" id="issueDate">
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="date" name="expiryDate" class="form-control col-md-10" id="expiryDate">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>

                </div>

            </div>

        </form>
        @endif


        @if($form_type == 'edit')
        <form method="post" action="{{ route('VisaStatusCheck.update')}}">
            @csrf
            @method('PUT')


            <div class="card bg-light rounded col-6 p-4">
                <div class="card-body">

                    <div class="input-group mb-3 row">
                        <input type="text" name="passportNumber" value="" class="form-control col-md-10" placeholder="Passport Number">
                    </div>

                    <div class="input-group mb-3" name="visaStatus" >
                        <label for="visaStatus" class="form-label">Visa Status</label>
                    </div>

                    <div class="btn-group mb-3" role="group">
                        <input type="radio" name="visaStatus" value="accepted" class="btn-check" id="accepted" checked>
                        <label class="btn btn-outline-primary" for="accepted">Accepted</label>

                        <input type="radio" name="visaStatus" value="rejected" class="btn-check" id="rejected">
                        <label class="btn btn-outline-primary" for="rejected">Rejected</label>
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="issueDate" class="form-label">Issue Date</label>
                        <input type="date" name="issueDate" class="form-control col-md-10" id="issueDate">
                    </div>

                    <div class="input-group mb-3 row">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                        <input type="date" name="expiryDate" class="form-control col-md-10" id="expiryDate">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>

                </div>

            </div>

        </form>
        @endif
        <!-- form End -->




    </div>
</div>
@endsection
