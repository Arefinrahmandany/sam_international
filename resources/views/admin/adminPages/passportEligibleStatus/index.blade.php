@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Passport Eligible Status</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Home</a></li>
                    </ol>
                </div>
            </div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4 mb-3">

        <div class="col-md-4">
            <form method="POST" action="{{ route('passportEligible.store') }}">

                @csrf

                <div class="bg-light rounded p-4">
                <h4 class="mb-4">Passport Eligible Status Update</h4>
                    <div class="input-group mb-3 col-6">
                        <input type="text" name="passport_number" class="form-control col-md-10" placeholder="Passport Number" required>
                    </div>


                    <div class="form-group bg-light rounded p-3">
                        <h6 class="mb-2">Fingerprint</h6>
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="finger" value="yes" id="finger1">
                            <label class="btn btn-outline-primary" for="finger1">Yes</label>

                            <input type="radio" class="btn-check" name="finger" value="no" id="finger2" checked>
                            <label class="btn btn-outline-primary" for="finger2">No</label>

                        </div>
                    </div>

                    <div class="form-group bg-light rounded p-3">
                        <h6 class="mb-2">Training</h6>
                        <div class="btn-group" role="group">

                            <input type="radio" class="btn-check" name="training" value="yes" id="training1">
                            <label class="btn btn-outline-primary" for="training1">Yes</label>

                            <input type="radio" class="btn-check" name="training" value="no" id="training2" checked>
                            <label class="btn btn-outline-primary" for="training2">No</label>

                        </div>
                    </div>

                    <div class="form-group bg-light rounded p-3">
                        <h6 class="mb-2">Attested</h6>
                        <div class="btn-group" role="group">

                            <input type="radio" class="btn-check" name="attested" value="yes" id="attested1">
                            <label class="btn btn-outline-primary" for="attested1">Attested</label>

                            <input type="radio" class="btn-check" name="attested" value="no" id="attested2" checked>
                            <label class="btn btn-outline-primary" for="attested2">Non Attested</label>

                        </div>
                    </div>

                    <div class="text-right p-3">
                        <button type="submit" class="btn btn-primary">Submit Status</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row">
            <h6 class="mb-4">Passport Eligible Status</h6>
                <div class="col-12 table-responsive">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Applying Country</th>
                                <th scope="col">Finger print</th>
                                <th scope="col">ZIP</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse( $passportEligible as $passportEligible )
                            <tr>
                                <th scope="row">{{$loop -> index + 1}}</th>
                                <td>{{$passportEligible -> created_at->format('d-m-y')}}</td>
                                <td>{{$passportEligible -> passport_number}}</td>
                                <td>{{$passportEligible -> applying_country}}</td>
                                <td>{{$passportEligible -> finger }}</td>
                                <td>{{$passportEligible -> training }}</td>
                                <td>{{$passportEligible -> attested }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href="{{route('passportEligible.edit',$passportEligible -> id)}}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{ route('passportEligible.destroy',$passportEligible -> id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
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
