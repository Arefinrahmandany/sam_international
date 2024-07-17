@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Office Management</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}">Accounts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Income Stetment</li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="p-2">
                <form action="{{ route('office.balanceSheet') }}" method="post">
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

            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
        </div>
        <div class="row d-flex justify-content-center">
            <div id="printDiv" class="card col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-between m-2 p-2">
                        <div class="col-md-3">
                            <p>From: {{ $startDate }}</p>
                            <p>Till : {{ $endDate }}</p>
                        </div>
                        <div class="col-md-5">
                            <h3>Income Stetment</h3>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <table class="table table-bordered table-responsive">
                        <tbody>
                            <tr>
                                <td>Revenue</td>
                                <td class="text-end">{{ number_format($financialMetrics['revenue'], 2, '.', ',') }}</td>
                            </tr>
                            <tr>
                                <td>Cost of Services</td>
                                <td class="text-end">{{ number_format($financialMetrics['cost_of_work'], 2, '.', ',') }}</td>
                            </tr>
                            <!-- Add other rows for financial metrics here -->

                            <!-- Example:
                            <tr>
                                <td>Utilities</td>
                                <td>{{ number_format($financialMetrics['utilities'], 2, '.', ',') }}</td>
                            </tr>
                            -->

                            <tr>
                                <td><b>Gross Income</b></td>
                                <td class="text-end">{{ number_format($financialMetrics['gross_profit'], 2, '.', ',') }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Expenses</b></td>
                            </tr>
                            @if(!empty($financialMetrics['officeExpenses']))
                                @foreach($financialMetrics['officeExpenses'] as $type => $total_credit)
                                    <tr>
                                        <td>{{ $type }}</td>
                                        <td class="text-end">{{ number_format($total_credit, 2, '.', ',') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <!-- Add other rows for expenses here -->

                            <!-- Example:
                            <tr>
                                <td>Interest</td>
                                <td>{{ number_format($financialMetrics['interest'], 2, '.', ',') }}</td>
                            </tr>
                            -->

                            <tr>
                                <td><b>Total Expense</b></td>
                                <td class="text-end">{{ number_format($financialMetrics['costOfExpenses'], 2, '.', ',') }}</td>
                            </tr>

                            <tr>
                                <td>Earning Before Tax (EBT)</td>
                                <td class="text-end">{{ number_format($financialMetrics['gross_profit'] - $financialMetrics['costOfExpenses'], 2, '.', ',') }}</td>

                            </tr>

                            <tr>
                                <td>Tax</td>
                                <td class="text-end">{{ number_format($financialMetrics['taxes'], 2, '.', ',') }}</td>
                            </tr>

                            <tr>
                                <td><b>Net Profit</b></td>
                                <td class="text-end"><b>{{ number_format($financialMetrics['net_profit'], 2, '.', ',') }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
