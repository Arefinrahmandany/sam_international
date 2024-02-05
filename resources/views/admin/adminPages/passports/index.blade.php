@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Passports</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4"><a href="{{ route('passports.create') }}">Passports <i class="fa fa-plus"></i></a></h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Applying Country</th>
                                <th scope="col">Agent</th>
                                <th scope="col">Amount</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $passports as $po_data)
                            <tr>
                                <th scope="row">{{ $loop -> index + 1}}</th>
                                <td>{{ $po_data -> passport_number }}</td>
                                <td>{{ $po_data -> name }}</td>
                                <td>{{ $po_data -> email }}</td>
                                <td>{{ $po_data -> address }}</td>
                                <td>{{ $po_data -> applying_country }}</td>
                                <td>{{ $po_data -> Agents-> name ?? "" }}</td>
                                <td>{{ $po_data -> amount }}</td>
                                <td>{{ $po_data -> created_at->format('d-m-y') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info"  href="{{ route('passports.show',$po_data->id) }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-sm btn-warning"  href="{{route('passports.edit',$po_data->id)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"  href="{{route('passports.tresh.update',$po_data->id)}}"><i class="fa fa-trash"></i></a>
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
