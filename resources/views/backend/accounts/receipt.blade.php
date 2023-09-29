

@extends('backend.layouts.app')

@section('main-content')

<div class="invoice-box">
    <table>
        <tbody>
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tbody>
                            <tr>
                                <td class="title"><img src="{{ asset('image/favicon.png') }}" alt="Company logo" style="width: 100%; max-width: 300px"></td>
                                <td>
                                    Invoice #: {{ $invoiceNumber }}<br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    Sparksuite, Inc.<br>
                                    12345 Sunny Road<br>
                                    Sunnyville, TX 12345
                                </td>

                        <td>
                            Payment By.
                            @if (!empty($byAgent))
                                {{ $byAgent }}
                            @else
                                {{ $receiveFrom }}
                            @endif
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr class="item">
            <td>{{ $description }}</td>
            <td>{{ $debit }}</td>
        </tr>
        <tr class="item">
            <td>Received By:</td>
            <td>{{ $receiveby }}</td>
        </tr>
        <tr class="total">
            <td></td>
            <td>Total: {{ $debit }}</td>
        </tr>
    </tbody></table>
</div>


<!-- Your receipt HTML structure here -->

<!-- Add more receipt details as needed -->

<!-- Add a print button -->
<button type="button" onclick="printReceipt()" id="printReceipt" class="btn btn-primary mb-3">Print Receipt</button>
<script>

</script>

@endsection
