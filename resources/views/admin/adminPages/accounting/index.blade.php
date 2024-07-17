@extends('admin.layout.app')

@section('main-content')

@php
    use Carbon\Carbon;
    $date = Carbon::today()->format('d.m.Y');
@endphp

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Trabsactions</li>
    </ol>
</nav>
<main>
    <!-- main Section Start -->
    <div class="container">

        <div class="card p-2 m-3">
            <div class="row card-body d-flex justify-content-between">

                <div class="col-sm-1">
                    <h3>
                        <form action="{{ route('transection.dailyStatement') }}" method="post">
                            @csrf
                            <button type="submit" class="btn text-danger shadow p-3 mb-5 bg-body-tertiary rounded"><b>Daily Transections</b></button>
                        </form>
                    </h3>
                </div>

                <div class="col-sm-1">
                    <b><a href="{{ route('bank.index') }}" class="btn text-info shadow p-3 mb-5 bg-body-tertiary rounded"><b>Banking Transections</b></a></b>
                </div>

                <div class="col-sm-1">
                    <h3>
                        <form action="{{ route('staff.salaryStatement') }}" method="post">
                            @csrf
                            <button type="submit" class="btn text-danger shadow p-3 mb-5 bg-body-tertiary rounded"><b>Salary Statement</b></button>
                        </form>
                    </h3>
                </div>

                <div class="col-sm-1">
                    <form action="{{ route('office.expenses') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn text-success shadow p-3 mb-5 bg-body-tertiary rounded"><b>Office Expenses</b></button>
                    </form>
                </div>

                <div class="col-sm-1">
                    <form action="{{ route('office.revenue') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn text-success shadow p-3 mb-5 bg-body-tertiary rounded"><b>Office Revenue</b></button>
                    </form>
                </div>

                <div class="col-sm-1">
                    <form action="{{ route('office.balanceSheet') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn text-success shadow p-3 mb-5 bg-body-tertiary rounded"><b>Balance Sheet</b></button>
                    </form>
                </div>

                <div class="col-sm-1">
                    <a href="{{ route('transaction.typeShow') }}" class="btn text-success shadow p-3 mb-5 bg-body-tertiary rounded">Transaction Types</a>
                </div>

                @if(in_array( 'Admin', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                <div class="col-sm-1">
                    <a href="{{ route('transection.recycle') }}" class="btn text-success shadow p-3 mb-5 bg-body-tertiary rounded">Recycle Bin</a>
                </div>
                @endif

            </div>
        </div>

        <div class="row">
            <h3>Transections</h3>
            <div class="col-12 table-responsive">
                <div class="data_table">
                    <table id="example" class="table table-striped table-hover table-bordered shadow p-3 mb-5 bg-body-tertiary rounded">
                        <thead>
                            <tr>
                                <th  style="display: none;">#</th>
                                <th>Date</th>
                                <th>Voucher No</th>
                                <th>Details</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Due</th>
                                <th>Payment System</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $transection as $data )
                            <tr>
                                <td style="display: none;">{{ $loop-> index +1 }}</td>
                                <td>{{ $data->created_at->format("d.m.Y") }}</td>
                                <td>{{ $data->voucherNo }}</td>
                                <td>{{ $data->details }}</td>
                                <td>
                                    @if ($data->debit == null)
                                    @else
                                    {{ number_format($data->debit, 2, '.', ',') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($data->credit == null)
                                    @else
                                    {{ number_format($data->credit, 2, '.', ',') }}
                                    @endif
                                </td>
                                <td>
                                    @if ($data->due == null)
                                    @else
                                    {{ number_format($data->due, 2, '.', ',') }}
                                    @endif
                                </td>
                                <td>{{ $data->paymentSystem }}</td>
                                <td>
                                    <div class="d-flex">
                                    @if(in_array( 'Accounts', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <a class="btn btn-sm btn-danger"  href="{{route('transection.TransectionTresh',$data->id)}}"><i class="fa fa-trash"></i></a>
                                    @endif
                                    @if(in_array( 'Accounts', json_decode(Auth::guard('admin')->user()-> roles-> permissions) ) )
                                    <a class="btn btn-sm btn-warning"  href="{{route('transection.TransectionTresh',$data->id)}}"><i class="fa fa-edit"></i></a>
                                    @endif
                                    </div>
                                </td>
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
<!-- main Section end -->








@endsection
