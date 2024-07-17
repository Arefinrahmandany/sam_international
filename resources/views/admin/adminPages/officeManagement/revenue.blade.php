@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Office Management</a></li>
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Revenue</li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="p-2">
                <form action="{{ route('office.revenue') }}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-btween mt-2 mb-2">
                        <div class="col-md-6 d-flex">
                            <div class="p-1">
                                <label class="form-lable" for="start_date">From Date</label>
                                <input type="date" name="start_date" value="{{ $startDate ?? '' }}" class="form-control" id="start_date">
                            </div>
                            <div class="p-1">
                                <label class="form-lable" for="end_date">To Date</label>
                                <input type="date" name="end_date" value="{{ $endDate ?? '' }}" class="form-control" id="end_date">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-1">
                                <label class="form-lable" for="search">Search</label>
                                <div style="display: flex; align-items: center;">
                                    <select class="form-select" name="type">
                                        <option value="">-- Select --</option>
                                        <option value="revenue">Revenue</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div>
                    <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-2 pt-2">
            <div id="printDiv" class="card">
                <div>
                    <h4>{{ $searchType }} Chart</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Vch.No</th>
                                <th>Detail</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse( $transactionItems as $data )
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ $data -> voucherNo  }}</td>
                                <td>{{ $data -> details  }}</td>
                                <td class="text-end">{{ number_format($data -> debit, 2, '.', ',') }}</td>
                            </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td colspan="3" class="text-end"><b>Total</b></td>
                                <td class="text-end"><b>{{ number_format($totalTransactionItems, 2, '.', ',') }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Display financial metrics -->

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
