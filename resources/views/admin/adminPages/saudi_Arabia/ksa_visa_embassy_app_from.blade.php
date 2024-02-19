@extends('admin.layout.app')

@section('main-content')

<style>
.card-body{
    font-size:12.0pt;
}
.pera_start{
    padding: 10px 0px 10px ;
}
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}

</style>


<!--**********************************
                Content body start
            ***********************************-->

            <div class="container p-2 m-2">
                <h4>KSA Embassy Form</h4>
            </div>

            <div class="container">
                <div class="wrapper" id="printDiv">
                    <div class="row">
                        <div class="col-12">
                                <div class="card-body">
                                    <p>TO</span></p>
                                    <p>HIS EXCELENCY THE CHIEF OF CONSULATE SECTION</p>
                                    <p>ROYAL EMBASSY OF SAUDI ARABIA</p>
                                    <p>DHAKA, BANGLADESH</span></p>
                                    <p class="pera_start"><b>EXCELLENCY,</b></p>
                                    <p>WITH DUE RESPECT WE ARE SUBMETTING ONE PASSPORT FOR WORK VISA WITH ALL NECESSARY DOCUMENTS AND PARTICULARS MENTIONED AS BELOW, KNOWING ALL INSTRUCTIONS AND REGULATION OF THE CONSULATE SECTION:</p>

                                    <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
                                        <tr>
                                            <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span style='font-size:12.0pt; line-height:150%;'>1.</span>
                                                </p>
                                            </td>
                                            <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt; line-height:150%;font-family:"Times New Roman","serif"'>NAME OF THE EMPLYER IN SAUDI ARABIA</span>
                                                </p>
                                            </td>
                                            <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNoSpacing style='margin-left:8.1pt;text-indent:-8.1pt'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>:</span><span style='font-family:"Times New Roman","serif"'> {{ $data-> first_Party }}</span>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>2.</span>
                                                </p>
                                            </td>
                                            <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt; line-height:150%;font-family:"Times New Roman","serif"'>VISA NO. &amp; DATE </span></p>
                                            </td>
                                            <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                            line-height:150%;font-family:"Times New Roman","serif"'>: {{ $data -> visa_number }}  DATE: {{ $data -> visa_issue_date }}</span></p>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
                                        style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>3.</span></p>
                                        </td>
                                        <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                        line-height:150%;font-family:"Times New Roman","serif"'>FULL NAME OF THE
                                        EMPLYEE </span></p>
                                        </td>
                                        <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>:</span><span
                                        style='font-family:"Times New Roman","serif"'> </span><span style='font-size:
                                        12.0pt;font-family:"Times New Roman","serif"'>{{ $data -> name }}</span></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
                                        style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>4.</span></p>
                                        </td>
                                        <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                        line-height:150%;font-family:"Times New Roman","serif"'>PASSPORT NO. WITH
                                        DATE</span></p>
                                        </td>
                                        <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                            <p class="MsoNormal" style='line-height:150%'>
                                                <span style="line-height:150%;">: {{ $data->passport_number }}. DATE: {{ $data->passport_expire_date }}</span>
                                            </p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
                                        style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>5.</span></p>
                                        </td>
                                        <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                        line-height:150%;font-family:"Times New Roman","serif"'>PROFESSION</span></p>
                                        </td>
                                        <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>:
                                        </span><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>{{ $data -> occupation }}</span></p>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td width=43 style='width:.45in;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
                                        style='font-size:12.0pt;line-height:150%;font-family:"Times New Roman","serif"'>6.</span></p>
                                        </td>
                                        <td width=228 style='width:171.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                        line-height:150%;font-family:"Times New Roman","serif"'>RELIGION</span></p>
                                        </td>
                                        <td width=345 style='width:258.75pt;padding:0in 5.4pt 0in 5.4pt'>
                                        <p class=MsoNormal style='line-height:150%'><span style='font-size:12.0pt;
                                        line-height:150%;font-family:"Times New Roman","serif"'>: {{ $data -> religion }}</span></p>
                                        </td>
                                        </tr>
                            </table>

                            <p class=MsoListParagraph style='text-align:justify'><span style='font-size:
                            12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span style='font-size:12.0pt;
                            font-family:"Times New Roman","serif"'>I DO HEREBY CONFIRM AND DECLARE THAT,
                            THE RELIGION STATED IN THE VISA FORM AND FORWARDING LETTER IS FULLY CORRECT. I
                            ALSO UDNERTAKE WITH MY OWN RESPONSIBILITY TO CONCEL THE VISA AND TO STOP
                            FUNCTIONING WITH MY OFFICE, IF THE STATEMENT IS FOUND INCORRECT.</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal style='text-align:justify'><span style='font-size:12.0pt;
                            font-family:"Times New Roman","serif"'>WE THEREFORE REQUEST YOUR EXCELLENCY TO
                            KINDLY ISSUE WORK VISA OUT OF VISAS AND OBLIGE THEREBY.</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></p>

                            <p class=MsoNormal><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>YOUR’S
                            FAITHFULLY</span></p>

                            </div>
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
