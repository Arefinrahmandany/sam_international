@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Visa Status Check</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">


        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4"><a href="{{ route('VisaStatusCheck.create') }}" >Visa Submission<i class="fa fa-plus"></i></a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Visa Status</th>
                                <th scope="col">Issue Date</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $visaStatusCheck as $data )

                            <tr>
                                <th scope="row">{{ $loop-> index + 1 }}</th>
                                <td>{{ $data -> passport_number }}</td>
                                <td>{{ $data -> visa_status }}</td>
                                <td>{{ $data -> issueDate }}</td>
                                <td>{{ $data -> expiryDate }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{route('VisaStatusCheck.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"  href="{{route('VisaStatusCheck.tresh.update',$data->id)}}"><i class="fa fa-trash"></i></a>
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
@endsection