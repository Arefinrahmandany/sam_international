@extends('backend.layouts.app')

@section('main-content')

<!-- Table Start -->

<div class="pt-4 px-4 mb-3">
    <a class="btn btn-primary" href="{{route('passports.create')}}" role="button">Add New Agent</a>
    <div class="container">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID.</th>
            <th scope="col">Passport Number</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Applying Country</th>
            <th scope="col">Agent Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $all_data as $passports)
            <tr>
                <td>{{$passports -> id }}</td>
                <td>{{$passports -> passport_number }}</td>
                <td>{{$passports -> name }}</td>
                <td>{{$passports -> email }}</td>
                <td>{{$passports -> phone }}</td>
                <td>{{$passports -> address }}</td>
                <td>{{$passports -> applying_country }}</td>
                <td>{{$passports -> agent_via }}</td>
                <td>{{$passports -> amount }}</td>
                <td><img src="{{ url('photos/'. $passports->photos) }}" style="height:100px; width: auto;"></td>
                <td>
                    <a class="btn btn-primary" href="" role="button">View</a>
                    <a class="btn btn-warning" href="" role="button">Edit</a>
                    <a class="btn btn-danger" href="" role="button">Delet</a>
                </td>
            </tr>
            @empty
            <tr class="text-center"><td colspan="10">Storage empty, Dont have any DATA</td></tr>
                    @endforelse
        </tbody>
        </table>
    </div>
</div>

<!-- Table End -->


@endsection
