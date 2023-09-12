@extends('backend.layouts.app')

@section('main-content')





    <div class="container">
        <a class="btn btn-primary" href="{{url('AddNewAgent')}}" role="button">Update Visa Application</a>
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


                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('') }}" role="button">View</a>
                        <a class="btn btn-warning" href="" role="button">Edit</a>
                        <a class="btn btn-danger" href="" role="button">Delet</a>
                    </td>
                </tr>
            </tbody>
            </table>


        </div>


@endsection
