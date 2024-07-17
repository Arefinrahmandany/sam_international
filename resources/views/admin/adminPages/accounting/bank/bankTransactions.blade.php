@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item"><a href="#">Bank</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bank Transactions</li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row card p-2 m-3">
            <div class="col-md-12 card-body d-flex">
                <div class="m-2 p-2">
                    <b><a href="{{ route('bank.index') }}" class="btn text-info shadow p-3 mb-5 bg-body-tertiary rounded"><b>ADD Bank</b></a></b>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="p-2">
                <form action="{{ route('bank.transactions') }}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-btween mt-2 mb-2 table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-2 m-1">
                                        <div class="p-1">
                                            <label class="form-lable" for="start_date">From Date</label>
                                            <input type="date" name="startDate" value="{{ $startDate ?? '' }}" class="form-control" id="start_date">
                                        </div>
                                    </td>
                                    <td class="col-2 m-1">
                                        <div class="p-1">
                                            <label class="form-lable" for="end_date">To Date</label>
                                            <input type="date" name="endDate" value="{{ $endDate ?? '' }}" class="form-control" id="end_date">
                                        </div>
                                    </td>
                                    <td class="col-2 m-1">

                                    </td>
                                    <td class="col-3 m-1">
                                        <label class="form-lable" for="agents">Agent</label>
                                        <select class="form-select" name="agents" id="agents">
                                            <option value="">-- Select --</option>
                                            @forelse( $agents as $data )
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </td>
                                    <td class="col-3 m-1">
                                        <label class="form-lable" for="banks">Bank</label>
                                        <select class="form-select" name="banks" id="banks">
                                            <option value="">-- Select --</option>
                                            @forelse( $banks as $data )
                                            <option value="{{ $data->bank_name }}">{{ $data->bank_name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Search</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>

                <div class="m-2 p-2">
                    <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div id="printDiv" class="card-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Vch.No.</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Debit</th>
                                <th class="text-center">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $bankTransaction as $data )
                            <tr>
                                <td class="text-center">{{ $loop ->index+1 }}</td>
                                <td class="text-center">{{ $data ->voucherNo }}</td>
                                <td>{{ $data ->details }}</td>
                                <td class="text-end">{{ $data ->debit }}</td>
                                <td class="text-end">{{ $data ->credit }}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
