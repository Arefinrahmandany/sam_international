@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Passports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
    </ol>
</nav>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Passport Number</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Applying Country</th>
                                <th scope="col" class="text-center">Work Type</th>
                                <th scope="col" class="text-center">Agent</th>
                                <th scope="col" class="text-center">Amount</th>
                                <th scope="col" class="text-center">Created At</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $passports as $data )
                            <tr>
                                <th scope="row">{{ $loop -> index + 1}}</th>
                                <td>
                                    <a href="{{ route('passports.show',$data->id) }}" class="text-decoration-none">{{ $data -> passport }}</a>
                                </td>
                                <td>{{ $data -> name }}</td>
                                <td>{{ $data -> applying_country }}</td>
                                <td>{{ optional($data->services)->service }}</td>
                                <td>{{ optional($data->agents)->name }}</td>
                                <td class="text-center">
                                    @if($data->amount == null )
                                    <form action="{{ route('passports.amount',$data ->id) }}" method="Post">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="amount" value="{{ $data->amount }}" class="form-control text-center" style="width: 8rem">
                                        <!-- Hidden submit button -->
                                        <input type="submit" style="display: none;">
                                    </form>
                                    @else
                                    {{ number_format($data->amount, 2, '.', ',') }}
                                    @endif
                                </td>
                                <td  class="text-center">{{ $data -> created_at->format('d-m-y') }}</td>
                                <td class="text-center">
                                    @if($data -> passportStatus == 'delivered')
                                    <a class="btn btn-sm btn-info"  href="{{ route('passports.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                                    @else
                                    <a class="btn btn-sm btn-warning"  href="{{route('passports.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger"  href="{{route('passports.tresh.update',$data->id)}}"><i class="fa fa-trash"></i></a>
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
