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


<!--**********************************
                Content body start
            ***********************************-->


<div class="container p-5 m-5">
    <h4>Employment Contract</h4>
</div>

<div class="container">
    <div class="wrapper" id="printDiv">
        <div class="row">
            <div class="col-6">

                <p style="font-size:16px;font-weight:700;">EMPLOYMENT CONTRACT</p>
                <table style="padding: 1px">
                    <tr style="padding: 1px;margin:6px;">
                        <td>1<sup>st</sup> Party</td>
                        <td> : </td>
                        <td>{{ $data -> first_Party }}</td>
                    </tr>
                    <tr style="padding: 1px;margin:6px;">
                        <td>2<sup>nd</sup> Party</td>
                        <td> : </td>
                        <td>{{ $data -> name }}</td>
                    </tr>
                    <tr style="padding: 1px;margin:6px;">
                        <td>Nationality </td>
                        <td> : </td>
                        <td>{{ $data -> nationality	 }}</td>
                    </tr>
                    <tr style="padding: 1px;margin:6px;">
                        <td>Passport No </td>
                        <td> : </td>
                        <td>{{ $data -> passport_number }}</td>
                    </tr>
                    <tr style="padding: 1px;margin:6px;">
                        <td>Profession </td>
                        <td> : </td>
                        <td>{{ $data -> occupation }}</td>
                    </tr>
                </table>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/img/soudia/contract/image001.jpg') }}" alt="">
                </div>


            </div>
            <div class="col-6">
                <img class="img-fluid" src="{{ asset('assets/img/soudia/contract/image002.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

<!--**********************************
                            Content body end
                        ***********************************-->

                        <div class="container">
                        <div class="p-2">
                            <button type="button" onclick="printDiv()" class="btn btn-primary mb-3">Print</button>
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
                            window.location.href = "{{ route('saudiEmp.index') }}"; // Replace '/your-target-page' with the actual URL

                        }

                    </script>

@endsection
