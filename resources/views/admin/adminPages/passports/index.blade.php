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

<section class="container">
    <div class="row d-flex justify-content-between m-3 p-3">
        <div class="col-6">
            <a class="btn btn-primary" href="{{ route('passports.create') }}"><i class="fa fa-plus"></i> New Passport</a>
        </div>
        @if(in_array( 'RecycleBin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
        <div class="col-md-6 text-end">
            <a href="{{ route('passports.recycle') }}" class="btn btn-sm btn-warning"><i class="fa fa-recycle"></i></a>
        </div>
        @endif
    </div>
</section>

<main>
    <div class="container pt-4 px-4">
{{--
        <div class="p-2">
            <form action="{{ route('passports.index') }}" method="post">
                @csrf
                <div class="row d-flex justify-content-btween mt-2 mb-2 table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <td class="col-2 m-1">
                                    <div class="p-1">
                                        <label class="form-lable" for="start_date">From Date</label>
                                        <input type="date" name="startDate" value="{{ $startDate ?? '' }}" class="form-control" id="start_date">
                                    </div>
                                </td>
                                <td class="col-2 m-1">
                                    <div class="p-1">
                                        <label class="form-lable" for="end_date">To Date</label>
                                        <input type="date" name="endDate" value="{{ $endDate ?? '' }}" class="form-control" id="end_date">
                                    </div>
                                </td>
                                <td class="col-2 m-1">
                                    <label class="form-lable" for="country">Country</label>
                                    <select class="form-select" name="country" id="country">
                                        <option value="{{ $searchCountry ?? '' }}">{{ $searchCountry }}</option>
                                        <option value="">-- Select --</option>
                                        @forelse( $country as $data )
                                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </td>
                                <td class="col-3 m-1">
                                    <label class="form-lable" for="agents">Agent</label>
                                    <select class="form-select" name="agents" id="agents">
                                        <option value="">-- Select --</option>
                                        @forelse( $agents as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </td>
                                <td class="col-3 m-1">
                                    <label class="form-lable" for="service">Work Type</label>
                                    <select class="form-select" name="service" id="service">
                                        <option value="">-- Select --</option>
                                        @forelse( $service as $data )
                                        <option value="{{ $data->id }}">{{ $data->service }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-end">
                                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Search</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>

            <div class="m-2 p-2">
                <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
            </div>
        </div>
--}}
        <div class="row g-4 mb-3">
            <div class="container">
                <div id="printDiv" class="row shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="col-md-12 table-responsive">
                        <table id="example" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Passport Number</th>
                                    <th scope="col" class="text-center">Applying Country</th>
                                    <th scope="col" class="text-center">Service Type</th>
                                    <th scope="col" class="text-center">Agent</th>
                                    <th scope="col" class="text-center">Attested</th>
                                    @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <th scope="col" class="text-center">Amount</th>
                                    <th scope="col" class="text-center">Created By</th>
                                    @endif
                                    <th scope="col" class="text-center">Created At</th>
                                    @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <th scope="col" class="text-center">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $passports as $data )
                                <tr>
                                    <th scope="row">{{ $loop -> index + 1}}</th>
                                    <td>{{ $data -> name }}</td>
                                    <td>
                                        <a href="{{ route('passports.show',$data->id) }}" class="text-decoration-none">{{ $data -> passport }}</a>
                                    </td>
                                    <td>{{ $data -> applying_country }}</td>
                                    <td>{{ optional($data->servic)->service }}</td>
                                    <td>{{ optional($data->agent)->name }}</td>
                                    <td>
                                        @if($data->attested == 1)
                                        Attested
                                        @else
                                        Non-Attested
                                        @endif
                                    </td>
                                    @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <td class="text-center">
                                        @if ($data->amount)
                                        {{ number_format($data->amount, 2, '.', ',') }}
                                        @else
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{ optional($data->userID)->username }}
                                    </td>
                                    @endif
                                    <td  class="text-center">{{ $data -> created_at->format('d-m-y') }}</td>
                                    @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <td class="text-center">
                                        <div class="row d-flex justify-content-center">
                                            @if($data -> passportStatus == 'delivered')
                                            <div class="col-md-6">
                                                <a class="btn btn-sm btn-info"  href="{{ route('passports.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                                            </div>
                                            @else
                                            <div class="col-md-6">
                                                <a class="btn btn-sm btn-warning"  href="{{route('passports.edit',$data->id)}}"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="col-md-6">
                                                <form method="post" action="{{ route('passports.trash',$data->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </td>
                                    @endif
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
</main>

@endsection