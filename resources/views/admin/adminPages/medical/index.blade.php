@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Medical</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4"><a href="{{ route('medical.create') }}" >Medical<i class="fa fa-plus"></i></a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Medical Date</th>
                                <th scope="col">Medical Status</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $medical as $data )

                            <tr>
                                <th scope="row">{{ $loop-> index + 1 }}</th>
                                <td>{{ $data -> passport_number }}</td>
                                <td>{{ $data -> medical_date }}</td>
                                <td>@if ($data -> medicalStatus == 1)
                                        Fit
                                    @else
                                        Unfit
                                    @endif
                                </td>
                                <td>{{ $data -> expiryDate }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{route('medical.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"  href="{{route('medical.tresh.update',$data->id)}}"><i class="fa fa-trash"></i></a>
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
