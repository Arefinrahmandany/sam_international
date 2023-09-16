@extends('backend.layouts.app')

@section('main-content')


    <div class="container">
        <a class="btn btn-primary" href="{{route('VisaStatus.create')}}" role="button">Visa Status Add</a>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Passport Number</th>
                    <th scope="col">Visa Status</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Expiry Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $all_data as $status)
                <tr>
                    <td>{{$status -> id }}</td>
                    <td>{{$status -> passport_number }}</td>
                    <td>{{$status -> visa_status }}</td>
                    <td>{{$status -> issueDate }}</td>
                    <td>{{$status -> expiryDate }}</td>
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


@endsection
