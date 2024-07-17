@extends('admin.layout.app')
@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Man Power</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Passport Delivery</a></li>
                    </ol>
                </div>
            </div>
<main>
    <div class="container">
        <div class="card row d-flex justify-content-center">
            <div class="card-body">
                <form method="post" action="{{ route('passport.deliver') }}">
                    @csrf
                    @include('validation.validate')
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="form-label" for="passport">Passport Number</label>
                            <input type="text" name="passport" list="passports" class="form-control" id="passport">
                            <datalist id="passports">
                                @foreach( $working_passports as $passport )
                                    <option value="{{ $passport->passport }}"></option>
                                @endforeach
                            </datalist>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="form-label" for="workStatus">Delivery With</label>
                            <select class="form-control" name="workStatus" id="workStatus">
                                <option value="completeDelivery">Complete</option>
                                <option value="reject">Reject</option>
                                <option value="return">return With Out Work</option>
                            </select>
                        </div>
                    </div>
                    <div class="m-2 m-1 text-end">
                        <button type="submit" class="btn btn-sm btn-success">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 mb-3">
            <div class="col-md-12">
                <table id="example" class="table table-bordered table-hover">
                    @include('validation.validate-table')
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Passport Number</td>
                            <td>Visa Type</td>
                            <td>Agent Name</td>
                            <td>Amount</td>
                            <td>Status</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $all_passports as $data )
                        <tr>
                            <td>{{ $loop -> index + 1}}</td>
                            <td>{{ $data -> name}}</td>
                            <td>{{ $data -> passport}}</td>
                            <td>{{ optional($data -> services)->service}}</td>
                            <td>{{ optional($data -> agents)->name}}</td>
                            <td>{{ $data -> amount}}</td>
                            <td>
                                @if($data->passportStatus == 'reject')
                                <span class="text-danger btn">{{ $data -> passportStatus}}</span>
                                @else
                                <span class="text-success btn">{{ $data -> passportStatus}}</span>
                                @endif
                            </td>
                            <td>{{ $data -> updated_at->format('d-m-Y')}}</td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection