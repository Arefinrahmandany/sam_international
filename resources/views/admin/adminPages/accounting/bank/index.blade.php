@extends('admin.layout.app')

@section('main-content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item"><a href="#">Bank</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Bank Accounts</li>
    </ol>
</nav>

<main>
<!-- main Section Start -->
    <div class="container">
            <div class="row">
                <div class="col-md-3 card m-2">

                    @if ($form_type == 'create')

                    <form method="POST" action="{{ route('bank.store') }}">
                        @csrf
                        @include('validation.validate')

                        <div class="form-group">
                            <label class="form-lable" for="bank_name">Bank Name</label>
                            <input type="text" class="form-control" id="bank_name" name="bank_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="bank_branch_name">Branch Name</label>
                            <input type="text" class="form-control" id="bank_branch_name" name="bank_branch_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="account_name">Account Name</label>
                            <input type="text" class="form-control" id="account_name" name="account_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="account_number">Account Number</label>
                            <input type="text" class="form-control" id="account_number" name="account_number" >
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success m-2">Create Account</button>
                        </div>
                    </form>

                    @endif

                    @if ($form_type == 'edit')

                    <form method="POST" action="{{ route('bank.update',$bank -> id) }}">
                        @csrf
                        @method('PUT')
                        @include('validation.validate')

                        <div class="form-group">
                            <label class="form-lable" for="bank_name">Bank Name</label>
                            <input type="text" class="form-control" value="{{ $bank -> bank_name }}" id="bank_name" name="bank_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="bank_branch_name">Branch Name</label>
                            <input type="text" class="form-control" value="{{ $bank -> bank_branch_name }}" id="bank_branch_name" name="bank_branch_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="account_name">Account Name</label>
                            <input type="text" class="form-control" value="{{ $bank -> account_name }}" id="account_name" name="account_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-lable" for="account_number">Account Number</label>
                            <input type="text" class="form-control" value="{{ $bank -> account_number }}" id="account_number" name="account_number" >
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success m-2">Update</button>
                        </div>
                    </form>

                    @endif

                </div>

                <div class="col-md-8 card table-responsive m-2 p-2">
                    @include('validation.validate-table')
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Sl</th>
                                <th class="text-center">Bank Name</th>
                                <th class="text-center">Bank Balance</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $banks as $data )
                            <tr>
                                <td class="text-center">{{ $loop -> index + 1  }}</td>
                                <td><a href="{{ route('bank.show',$data->id) }}" class="text-decoration-none">{{ $data -> bank_name }}</a></td>
                                <td class="text-end">
                                    {{ number_format(($balances[$data->bank_name] ?? 0), 2, '.', ',') }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('bank.edit',$data->id) }}" type="submit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('bank.trash',$data->id) }}" type="submit" class="btn btn-danger" onclick="alert('Are you want to delete This Data ?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

<!-- main Section End -->
</main>
@endsection
