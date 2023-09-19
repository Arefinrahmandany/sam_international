@extends('backend.layouts.app')

@section('main-content')





    <div class="container">
        <a class="btn btn-primary" href="{{ route('visa-application.create') }}" role="button">Update Visa Application</a>
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
                @forelse ( $visaSubmissionData as $visaSubmissionData)
                <tr>
                    <td>{{$visaSubmissionData -> id }}</td>
                    <td>{{$visaSubmissionData -> passport_number }}</td>
                    <td>{{$visaSubmissionData -> applyingcountry }}</td>
                    <td>{{$visaSubmissionData -> agency }}</td>
                    <td>{{$visaSubmissionData -> application_date }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('visa-application.edit',$visaSubmissionData -> id)}}">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('visa-application.destroy', $visaSubmissionData -> id) }}">Delete</i></a>
                    </td>
                </tr>
                @empty

                    @endforelse
            </tbody>
            </table>


        </div>


@endsection
