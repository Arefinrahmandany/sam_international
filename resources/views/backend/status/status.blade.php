@extends('backend.layouts.app')

@section('main-content')


    <div class="container">
        <a class="btn btn-primary" href="{{url('add-VisaStatus')}}" role="button">Visa Status Add</a>
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


                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('visa-StatusView') }}" role="button">View</a>
                        <a class="btn btn-warning" href="{{ url('visa-StatusUpdate') }}" role="button">Edit</a>
                        <a class="btn btn-danger" href="" role="button">Delet</a>
                    </td>
                </tr>
            </tbody>
            </table>

        </div>


@endsection
