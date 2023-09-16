@extends('backend.layouts.app')

@section('main-content')





<div class="container-fluid pt-4 px-4">
    <div class="container">
        <a class="btn btn-primary" href="{{route('medical.create')}}" role="button">Update Medical Application Status</a>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID.</th>
                        <th scope="col">Select</th>
                        <th scope="col">Passport</th>
                        <th scope="col">Medical Date</th>
                        <th scope="col">Medical Status</th>
                        <th scope="col">Expiry Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $all_data as $medical)
                    <tr>
                        <td>{{$medical -> id }}</td>
                        <td scope="col">
                            <div class="align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                            </div>
                        </td>
                        <td>{{$medical -> passport_number  }}</td>
                        <td>{{$medical -> medical_date }}</td>
                        <td>{{$medical -> medicalStatus }}</td>
                        <td>{{$medical -> expiryDate }}</td>
                        <td>
                            <a class="btn btn-primary" href="" role="button">View</a>
                            <a class="btn btn-warning" href="" role="button">Edit</a>
                            <a class="btn btn-danger" href="" role="button">Delet</a>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
