@extends('admin.layout.app')

@section('main-content')

@php
    use Carbon\Carbon;

    $today = Carbon::today();
@endphp


<!--**********************************
                Content body start
            ***********************************-->

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('transection.index') }}"  class="link-underline-light link-dark">Transection</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Daily Statment</a></li>
        </ol>
    </div>
</div>

<main>
<!-- main Section Start -->

    <div class="container">
        <div id="printDiv" class="row card shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="col-md-12 card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>
                            <form action="{{ route('transection.dailyStatement') }}" method="post">
                                @csrf
                                <label class="form-lable" for="date">Date</label>
                                <div class="">
                                    <input type="date" name="date" value="{{ $requestDate }}" class="form-control font-weight-bold border border-2 border-primary" id="date">
                                </div>
                                <input type="submit" style="display: none;">
                            </form>
                        </h5>
                    </div>
                    <div>
                        <div class="text-center">
                            <img class="img-fluid logo-print text-center" src="{{ url('assets/img/logo.png') }}" style="height: 50px;">
                        </div>
                        <div class="text-center">
                            <h3>SAM International</h3>
                        </div>
                    </div>
                    <style>

                        @media print {
                            .logo-print {
                                height: 50px;
                                width: auto;
                                display: block; /* Show the logo for print */
                                margin: 0 auto; /* Center-align the logo */
                            }
                        }
                    </style>
                    <div>
                        <h4>Day Transaction Sheet</h4>
                        <table class="table table-bordered table-responsive border border-black">
                            <tbody>
                                <tr>
                                    <td>Total Debit :</td>
                                    <td class="text-end">
                                        @if ($totalDebit == null)
                                        @else
                                        {{ number_format($totalDebit, 2, '.', ',') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total credit :</td>
                                    <td class="text-end">
                                        @if ($totalCredit == null)
                                        @else
                                        {{ number_format($totalCredit, 2, '.', ',') }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Balance :</td>
                                    <td class="text-end">
                                        @if ($dayBalance == null)
                                        @else
                                        {{ number_format($dayBalance, 2, '.', ',') }}
                                        @endif
                                    </td>
                                </tr>
                            <tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-2 p-2">
                <table class="table table-bordered table-responsive border border-black">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Voucher</th>
                            <th class="text-center">Detail</th>
                            <th class="text-center">Debit (Deposit)</th>
                            <th class="text-center">Credit (Expense)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-end"><b>Balance B/D : </b></td>
                            <td colspan="2">
                                <b>
                                    @if ($balance_bd == null)
                                    @else
                                    {{ number_format($balance_bd, 2, '.', ',') }}
                                    @endif
                                </b>
                            </td>
                        </tr>
                        @foreach( $dayTransaction as $data )
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $data-> voucherNo }}</td>
                            <td>{{ $data-> details }}</td>
                            <td  class="text-end">
                                @if ($data-> debit == null)
                                    @else
                                    {{ number_format($data-> debit, 2, '.', ',') }}
                                    @endif
                            </td>
                            <td class="text-end">
                                @if ($data-> credit == null)
                                    @else
                                    {{ number_format($data-> credit, 2, '.', ',') }}
                                    @endif
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-end"><b>Total : </b></td>
                            <td class="text-end">
                                <b>
                                    @if ($totalDebit == null)
                                    @else
                                    {{ number_format($totalDebit, 2, '.', ',') }}
                                    @endif
                                </b>
                            </td>
                            <td class="text-end">
                                <b>
                                    @if ($totalCredit == null)
                                    @else
                                    {{ number_format($totalCredit, 2, '.', ',') }}
                                    @endif
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end"><b>Total Balance C/D : </b></td>
                            <td colspan="2" >
                                <b>
                                    @if ($balance_cd == null)
                                    @else
                                    {{ number_format($balance_cd, 2, '.', ',') }}
                                    @endif
                            </b>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" onclick="printDiv()">Print</button>
        </div>
    </div>

<!-- main Section end -->
</main>


<script>

function printDiv() {
    var printContents = document.getElementById('printDiv').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    var linesPerPage = 60; // Set the number of lines per page
    var contentArray = printContents.split('\n');

    for (var i = 0; i < contentArray.length; i += linesPerPage) {
        var chunk = contentArray.slice(i, i + linesPerPage).join('\n');
        document.body.innerHTML = chunk;

        window.print();

        if (i + linesPerPage < contentArray.length) {
            var newPage = document.createElement('div');
            newPage.className = 'page-break'; // Add a class for styling page breaks
            document.body.appendChild(newPage);
        }
    }

    document.body.innerHTML = originalContents;

    }

</script>


@endsection