@extends('backend.layouts.app')

@section('main-content')




    <div class="container">
        <a class="btn btn-primary" href="{{url('AddNewAgency')}}" role="button">Add Visa Agency</a>
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

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('viewAgency') }}" role="button">View</a>
                        <a class="btn btn-warning" href="" role="button">Edit</a>
                        <a class="btn btn-danger" href="" role="button">Delet</a>
                    </td>
                </tr>
            </tbody>
            </table>

        </div>


        @endsection
