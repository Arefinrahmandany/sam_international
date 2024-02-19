@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('transection.index') }}"  class="link-underline-light link-dark">Transection</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Journal</a></li>
        </ol>
    </div>
</div>

<main>
    <div class="container">
        <div class="row p-3 m-3">
            <div class="col-md-12">
                <a type="button" class="btn btn-primary" href="{{ route('transection.accounts') }}">Account Type</a>
                <a type="button" class="btn btn-primary" href="{{ route('transection.accountsGroup') }}">Account Group</a>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if ($form_type == 'account_type')
            <h5>Account Type</h5>
            <div class="row">
                <div class="col-md-7">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Account Code</th>
                                    <th>Account Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($account_type as $data )
                                <tr>
                                    <td>{{ $data -> id }}</td>
                                    <td>{{ $data -> account_type }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-sm btn-warning"  href="{{ route('transection.accountsEdit',$data -> id) }}"><i class="fa fa-edit"></i></a>
                                            <form method="post" action="{{ route('transection.accountsUpdate',$data -> id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-recycle"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="col-md-4">
                        <form method="POST" action="{{ route('transection.accountsStore') }}">
                            @csrf
                            <input class="form-control" name="account_type" placeholder="Enter Account Type">
                            <div class="col-md-4 p-2 m-2">
                                <button class="btn btn-sm btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
            @endif

            @if ($form_type == 'account_group')
            <h5>Account Group</h5>
            <div class="row">
                <div class="col-md-7 p-3 m-3">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Account Code</th>
                                    <th>Account Group</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($account_group as $data )
                                <tr>
                                    <td>{{ $data -> id }}</td>
                                    <td>{{ $data -> account_group }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-sm btn-warning"  href="{{ route('transection.accountsGroupEdit',$data -> id) }}"><i class="fa fa-edit"></i></a>
                                            <form method="post" action="{{ route('transection.accountsGroupUpdate',$data -> id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-recycle"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 p-3 m-3">
                    <form method="POST" action="{{ route('transection.accountsGroupStore') }}">
                    @csrf
                        <input class="form-control p-2" name="account_group" placeholder="Enter Account Group">
                        <div class="col-md-4 p-2 m-2">
                            <button class="btn btn-sm btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
</main>
@endsection
