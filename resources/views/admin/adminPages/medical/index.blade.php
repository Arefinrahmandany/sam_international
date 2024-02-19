@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Medical</a></li>
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
                                <th scope="col">Medical Date</th>

                                <th scope="col">Expiry Date</th>
                                <th scope="col">Medical Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $data as $data )

                            <tr>


                                    <th scope="row">{{ $loop-> index + 1 }}</th>
                                    <td>{{ $data -> passport_number }}</td>
                                    <form method="POST" action="{{ route('medical.update', $data->id) }}">
                                        @csrf
                                        @method('PUT')
                                    <td>
                                        <input type="date" name="medical_date" value="{{ $data -> medical_date }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </td>
                                    <td>
                                        <input type="date" name="medical_expiryDate" value="{{ $data -> medical_expiryDate }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </td>
                                    </form>
                                    <td>
                                        @if ($data -> medical_report)
                                            <span class="badge bg-success">Fit</span>
                                            <a class="text-danger" href="{{ route('medical.reportEdit', $data -> id ) }}"><i class="fa fa-times"></i></a>
                                        @else
                                            <span class="badge bg-danger">Unfit</span>
                                            <a class="text-success" href="{{ route('medical.reportEdit', $data -> id ) }}"><i class="fa fa-check"></i></a>
                                        @endif
                                    </td>

                            </tr>

                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>



@endsection
