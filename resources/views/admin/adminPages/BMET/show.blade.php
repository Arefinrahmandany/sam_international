@extends('admin.layout.app')
@section('main-content')

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('manpower.index') }}" class="text-decoration-none">Man Power</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('bmet.index') }}" class="text-decoration-none">BMET</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="text-decoration-none">{{ $rlLicence->rl_name }}</a></li>
        </ol>
    </div>
</div>

<main>
    <div class="container">

        <table id="example" class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Passport Number</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Due</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $rlHistory as $data)
                <tr>
                    <td>{{ $loop ->index+1 }}</td>
                    <td>{{ $data ->passportNumber }}</td>
                    <td>{{ $data ->debit }}</td>
                    <td>{{ $data ->credit }}</td>
                    <td>{{ $data ->due }}</td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end"><b>Balance : </b></td>
                    <td colspan="3">{{ $rlBalance }}</td>

                </tr>
            </tfoot>
        </table>

    </div>
</main>
@endsection
