@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Visa Submission</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">


        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Applying Country</th>
                                <th scope="col">Application Date</th>
                                <th scope="col">Visa Issue Date</th>
                                <th scope="col">Visa Expiry Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $passports_data as $data )
                            <tr>
                                <form method="POST" action="{{ route('visaSubmission.update', $data->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <th scope="row">{{ $loop-> index + 1 }}</th>

                                    <td>{{ $data -> passport_number }}</td>

                                    <td>{{ $data -> applying_country}}</td>

                                    <td>
                                        <input type="date" name="visa_application_date" value="{{ $data->visa_application_date }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </td>

                                    <td>
                                        <input type="date" name="visa_issue_date" value="{{ $data->visa_issue_date }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </td>

                                    <td>
                                        <input type="date" name="visa_expiry_date" value="{{ $data->visa_expiry_date }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </td>
                                    <td>
                                        @if ($data->visa_issue_date == null )
                                            <span class="btn btn-info">Still On Process</span>
                                        @else
                                            <span class="btn btn-success">Visa Passed</span>
                                        @endif
                                    </td>
                                </form>
                            </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">

        </div>

    </div>
</div>
@endsection
