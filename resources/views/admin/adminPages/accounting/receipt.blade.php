@extends('admin.layout.app')

@section('main-content')

<style>
    body{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #808080;
    }


    .wrapper{
        width: 1024px;
        height: auto;
        background: #fff;
        padding: 30px 40px;
    }

    @media print {
        body {
            height: 390px;
            width: 550mm;
        }
        .wrapper {
            /* Adjust the styles for printing content as needed */
            width: 100%; /* Use 100% width to fit the print size */
            height: auto;
            background: #fff;
            padding: 30px 40px;
        }
    }

</style>
<div class="container p-5">
    <a href="{{ route('transection.pettyCash') }}" class="btn btn-primary"><i class="fas fa-times fs-3x text-bg-info"></i></a>

<div class="wrapper" id="printDiv">
    <div class="card">
        <div class="card-body">

    <!-- Your receipt for full page wrapper -->
    <div class="container">
        <div class="invoice-box p-5">
            <ul class="list-group list-unstyled">
                <li><h3>Recipt</h3></li>
                <li><h5 style="margin-bottom: 0px;"><strong>Sam Internation</strong></h5></li>
                <li><p style="margin-bottom: 0px;">26, Chamelibagh, 4th Floor,</p></li>
                <li><p style="margin-bottom: 0px;">Shantinagar, Dhaka-1217.</p></li>
                <li><p>Phone: 9336574 (Off.), 01613984300, 01817515161</p></li>
            </ul>
        </div>


    <div class="card">
        <div class="card-body">
        <div class="container mb-5 mt-3">

            <div class="container">

            <div class="row d-flex justify-content-between">
                <div class="col-xl-8">
                    <ul class="list-unstyled">
                        <li class="text-muted">To:
                            <span style="color:#5d9fc5 ;">
                            </span>
                        </li>
                        <li class="text-muted">
                            @if (!empty($data->agentsBD))
                                {{ $data->agents->name }}
                            @elseif (!empty($data->reciveFrom))
                                {{ $data->reciveFrom }}
                            @elseif (!empty($data->paid_to))
                                {{ $data->paid_to }}
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4">
                    <p>Date : {{ $data -> created_at->format('d-m-y') }}</p>
                    <p style="color: #7e8d9f;font-size: 20px;">Invoice <strong>ID: {{ $data -> voucherNo }} </strong></p>
                </div>
            </div>

            <div class="row my-2 mx-1 justify-content-center">
                <table class="table table-striped table-borderless">
                <thead style="background-color:#84B0CA ;" class="text-white">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data -> details }}</td>
                        <td>&#2547;{{ $data->debit ?? $data->credit ?? $data->due }}</td>
                    </tr>
                </tbody>

                </table>
            </div>
            <div class="row">
                <div class="col-xl-7">
                <p class="ms-3">Add additional notes and payment information</p>

                </div>
                <div class="col-xl-4">
                <ul class="list-unstyled">
                    <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>&#2547; {{ $data->debit ?? $data->credit ?? $data->due }}</li>
                </ul>
                <p class="text-black float-start"><span class="text-black me-3">Total Amount</span><span
                    style="font-size: 20px;">&#2547; {{ $data->debit ?? $data->credit ?? $data->due }}</span></p>
                </div>
            </div>
            <hr>


            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Your receipt for full page wrapper End-->
</div>
</div>
</div>
<!-- Your receipt HTML structure here -->
</div>
<!-- Add more receipt details as needed -->

<!-- Add a print button -->
<div class="container">
    <div p-2>
        <button type="button" onclick="printDiv()" class="btn btn-primary mb-3">Print Receipt</button>
    </div>
</div>

<script>

function printDiv() {
        var printContents = document.getElementById('printDiv').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

        // Redirect to another page after printing
        window.location.href = "{{ route('transection.pettyCash') }}"; // Replace '/your-target-page' with the actual URL

    }

</script>

@endsection
