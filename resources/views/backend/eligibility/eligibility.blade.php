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
                <td>{{$eligibility -> id}}</td>
                <td>{{$eligibility -> passport_number}}</td>
                <td>{{$eligibility -> finger }}</td>
                <td>{{$eligibility -> training }}</td>
                <td>{{$eligibility -> attested }}</td>
                <td>{{$eligibility -> status }}</td>
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

<!-- Table End -->


@endsection
