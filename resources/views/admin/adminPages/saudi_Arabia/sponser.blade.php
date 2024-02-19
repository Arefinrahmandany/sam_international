@extends('admin.layout.app')

@section('main-content')

<style>
.card-body{
    font-size:12.0pt;
}
.pera_start{
    padding: 10px 0px 10px ;
}
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
<div class="heading">
    <div class="text-center pt-5">
        <h3> <img src="{{ asset('assets/img/soudia/sponser001.jpg') }}" style="width: 100%; height:auto;" class="img-fluid"> </h3>
    </div>

</div>

                                <div class=WordSection1 dir=RTL>
                                    <br clear=ALL>
                                    <div class="d-flex justify-content-center" align=right dir=rtl>
                                        <table class="mx-auto table table-bordered" dir=rtl border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none'>
                                            <tr>
                                                <td width=45 valign=top style='width:33.7pt;border:solid windowtext 1.5pt; border-left:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span lang=AR-SA style='font-size:10.0pt'>ت</span></b>
                                                    </p>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>SL</span></b></p>
                                                </td>
                                                <td width=90 valign=top style='width:67.5pt;border-top:solid windowtext 1.5pt; border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.5pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span lang=AR-SA style='font-size:10.0pt'>رقـم الجـــواز</span></b>
                                                    </p>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>Passport No.</span></b></p>
                                                </td>
                                                <td width=288 valign=top style='width:216.05pt;border-top:solid windowtext 1.5pt; border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.5pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span lang=AR-SA style='font-size:10.0pt'>اســم الـكـفـيـــل</span></b></p>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>Sponsor Name</span></b>
                                                    </p>
                                                </td>
                                                <td width=96 valign=top style='width:1.0in;border-top:solid windowtext 1.5pt; border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.5pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span lang=AR-SA style='font-size:10.0pt'>رقم التأشيـــــــرة</span>
                                                    </b></p>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                        <span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>Visa Number</span></b>
                                                    </p>
                                                </td>
                                                <td width=60 valign=top style='width:45.05pt;border-top:solid windowtext 1.5pt; border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.5pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                    <span lang=AR-SA style='font-size:10.0pt'> التاريـــــخ </span></b></p>
                                                <p class=MsoNormal align=center dir=RTL style='text-align:center'><b>
                                                    <span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>Year</span></b>
                                                </p>
                                                </td>
                                                <td width=133 valign=top style='width:99.8pt;border:solid windowtext 1.5pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=LTR style='text-align:center;direction: ltr;unicode-bidi:embed'><b>
                                                        <span lang=AR-SA dir=RTL style='font-size:10.0pt'>المهنة</span></b></p>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'><b><span dir=LTR style='font-size:10.0pt;font-family:"CG Times","serif"'>Profession</span></b>
                                                    </p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width=712 colspan=6 valign=top style='width:534.1pt;border-top:none;
                                                border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
                                                border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal dir=RTL><span lang=AR-SA style='font-size:10.0pt;
                                                font-family:"Traditional Arabic"'>&nbsp;</span></p>
                                                </td>
                                            </tr>
                                            @forelse( $data as $data )
                                            <tr>
                                                <td width=45 style='width:33.7pt;border-top:none;border-left:solid windowtext 1.0pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt; padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'>
                                                        <span lang=AR-SA style='font-size:10.0pt;font-family:"Calibri","sans-serif"'>{{ $loop -> index+1 }}</span>
                                                    </p>
                                                </td>
                                                <td width=90 style='width:67.5pt;border-top:none;border-left:solid windowtext 1.0pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal align=center dir=RTL style='text-align:center'>
                                                        <span lang=AR-SA style='font-size:10.0pt;font-family:"Calibri","sans-serif"'>{{  $data -> passport_number }}</span>
                                                    </p>
                                                </td>
                                                <td width=288 style='width:216.05pt;border-top:none;border-left:solid windowtext 1.0pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class="MsoNormal" align="right" dir="LTR" style="text-align:right; direction: ltr; unicode-bidi: embed">
                                                        <b>
                                                            <span style="font-size:11.0pt; font-family:'Times New Roman','serif'">General Contracting<br>Hassan Majid bin Dhafer Al Subaie Foundation
                                                            </span>
                                                        </b>
                                                    </p>

                                                </td>
                                                <td class="text-center" width=96 style='width:1.0in;border-top:none;border-left:solid windowtext 1.0pt;
                                                border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p>
                                                        <span style='font-size:10.0pt'>{{ $data->visa_number ? $tr->setSource("en")->setTarget("ar")->translate($data->visa_number) : 'Null' }}
                                                        </span>
                                                    </p>
                                                </td>
                                                <td width=60 style='width:45.05pt;border-top:none;border-left:solid windowtext 1.0pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal dir=RTL>
                                                        <span lang=AR-SA style='font-size:10.0pt'>
                                                            @php
                                                            // Set the locale to Arabic
                                                            setlocale(LC_TIME, 'ar');
                                                            // Get the current year
                                                            $currentYear = strftime('%Y');
                                                            @endphp
                                                            1445 هــ
                                                        </span>
                                                    </p>
                                                </td>
                                                <td width=133 style='width:99.8pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
                                                    <p class=MsoNormal dir=RTL><b>
                                                        <span dir=LTR style='font-size:10.0pt'>{{ $data->occupation ? $tr->setSource("en")->setTarget("ar")->translate($data -> occupation) : 'Null' }}</span></b>
                                                    </p>
                                                </td>
                                            </tr>
                                            @empty
                                            @endforelse
                                            <tr>
                                                <td width=712 colspan=6 valign=top style='width:534.1pt;border:solid windowtext 1.5pt;
                                                border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal dir=RTL><span lang=AR-SA style='font-size:10.0pt;
                                                font-family:"Traditional Arabic"'>&nbsp;</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width=712 colspan=6 valign=top style='width:534.1pt;border:solid windowtext 1.5pt;
                                                border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                                                <p class=MsoNormal dir=RTL><b>
                                                    <span lang=AR-SA style='font-size:10.0pt'> المجموعة </span></b>
                                                    <b><span lang=AR-SA style='font-size:10.0pt;font-family:"Calibri","sans-serif"'>: {{ $sponserListTotal }}</span></b>
                                                </p>
                                                </td>
                                            </tr>
                                        </table>

                                </div>

<p class=MsoNormal dir=RTL><b><span lang=AR-SA style='font-size:10.0pt'>&nbsp;</span></b></p>

<p class=MsoNormal dir=RTL><span dir=LTR style='font-family:"Traditional Arabic"'>&nbsp;</span></p>

<p class=MsoTitle align=left dir=RTL style='text-align:right'><span dir=LTR
style='font-family:"Traditional Arabic"'>&nbsp;</span></p>

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
                                    setTimeout(function() {
                                        window.location.href = "{{ route('saudiEmp.sponserDestroy', ['id' => Auth::guard('admin')->user()->id]) }}";
                                    }, 1000); // Adjust the delay as needed (in milliseconds)

                                }

                            </script>

        @endsection
