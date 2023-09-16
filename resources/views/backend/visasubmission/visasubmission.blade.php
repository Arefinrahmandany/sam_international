@extends('backend.layouts.app')

@section('main-content')





    <div class="container">
        <a class="btn btn-primary" href="{{route('VisaApplication.create')}}" role="button">Update Visa Application</a>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID.</th>
                    <th scope="col">Passport Number</th>
                    <th scope="col">Applying Country</th>
                    <th scope="col">Applying Agency</th>
                    <th scope="col">Submission Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $all_data as $submission)
                <tr>
                    <td>{{$submission -> id }}</td>
                    <td>{{$submission -> passport_number }}</td>
                    <td>{{$submission -> applyingcountry }}</td>
                    <td>{{$submission -> agency }}</td>
                    <td>{{$submission -> application_date }}</td>
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
