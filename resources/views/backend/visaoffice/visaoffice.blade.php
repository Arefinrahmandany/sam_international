@extends('backend.layouts.app')

@section('main-content')




    <div class="container">
        <a class="btn btn-primary" href="{{route('visa-agency.create')}}" role="button">Add Visa Agency</a>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $visaOffice_data as $visaOffice)
                <tr>
                    <td>{{$loop -> index + 1}}</td>
                    <td>{{$visaOffice -> name }}</td>
                    <td>{{$visaOffice -> phone }}</td>
                    <td>{{$visaOffice -> address }}</td>
                    <td>{{$visaOffice -> email }}</td>
                    <td>
                        <a class="btn btn-primary" href="" role="button">View</a>
                        <a class="btn btn-warning" href="{{ route('visa-agency.edit',$visaOffice -> id ) }}">Edit</a>
                        <a class="btn btn-danger"   onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('visa-agency.destroy',$visaOffice -> id ) }}">Delete</i></a>
                    </td>
                </tr>
                @empty

                    @endforelse
            </tbody>
            </table>

        </div>


        @endsection
