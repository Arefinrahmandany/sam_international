@extends('backend.layouts.app')

@section('main-content')




    <!-- Table Start -->

<div class="container-fluid pt-4 px-4">
    <div class="container">
        <a class="btn btn-primary" href="{{route('Eligibility.create')}}" role="button">Eligibility Add</a>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID.</th>
            <th scope="col">Passport Number</th>
            <th scope="col">Finger print</th>
            <th scope="col">Training</th>
            <th scope="col">Attested</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $all_data as $eligibility)
            <tr>
                <td>{{$loop -> index + 1}}</td>
                <td>{{$eligibility -> passport_number}}</td>
                <td>{{$eligibility -> finger }}</td>
                <td>{{$eligibility -> training }}</td>
                <td>{{$eligibility -> attested }}</td>
                <td>{{$eligibility -> status }}</td>
                <td>
                    <a class="btn btn-primary" href="" role="button">View</a>
                    <a class="btn btn-warning" href="{{ route('eligibility.edit',$eligibility -> id ) }}">Edit</a>
                    <a class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('eligibility.destroy',$eligibility -> id ) }}">Delete</i></a>
                </td>
            </tr>
            @empty
            @endforelse
        </tbody>
        </table>


        <div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Salse</h6>
                    <a href="">Show All</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                <th scope="col">Date</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>01 Jan 2045</td>
                                <td>INV-0123</td>
                                <td>Jhon Doe</td>
                                <td>$123</td>
                                <td>Paid</td>
                                <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
    </div>
</div>

<!-- Table End -->


@endsection
