@extends('admin.layout.app')

@section('main-content')

<style>
    table, th, td, tr {
    border:2px solid black;
    padding: 10px;
}
table tr th :last-child{
    text-align: right;
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

            <div class="container p-2 m-2">
                <h4>Link Up Embassy Form</h4>
            </div>

            <div class="container">
                <div class="wrapper" id="printDiv">
                    <div class="row">
                        <div class="col-12">

                            <h4 class="text-center"><u>  إرفاق الجدول التالي في كل معاملة </u></h4>
                            <div class="d-flex justify-content-center" >
                            <table class="mx-auto table table-striped table-hover table-bordered" style="border:1px solid black;">
                                <tr class="text-center" style="background-color: #f7caac;">
                                    <th>ব্যবস্থা</th>
                                    <th> الملاحظات <br> মতামত</th>
                                    <th> المنفذ <br>বন্দর</th>
                                    <th> المكتب <br>অফিস</th>
                                    <th> الاجراء </th=>
                                </tr>


                                <tr>
                                    <td>ইঞ্জাজ নম্বর </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{optional($data->embassys)->incharge_number}}</td>
                                    <td> رقم إنجاز </td>
                                </tr>
                                <tr>
                                    <td>ভিসা নম্বর </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->mofas)->visaNumber }}</td>
                                    <td> رقم المستند </tdclass=>
                                </tr>
                                <tr>
                                    <td>নাম পাসপোর্টে যেমন আছে</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $data -> name }}</td>
                                    <td> الاسم في الجواز </td>
                                </tr>
                                <tr>
                                    <td>পাসপোর্ট নম্বর</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $data -> passport }}</td>
                                    <td> رقم الجواز </td>
                                </tr>
                                <tr>
                                    <td>পাসপোর্টের বৈধতার তারিখ </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $data -> passport_issue_date }}</td>
                                    <td> صلاحية الجواز </td>
                                </tr>
                                <tr>
                                    <td>বয়স </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$data -> age}}</td>
                                    <td> العمر </td>
                                </tr>
                                <tr>
                                    <td>লিঙ্গ </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $data -> gender }}</td>
                                    <td> الجنس </td>
                                </tr>
                                <tr>
                                    <td>মুসানেদ </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->embassys)->supports }}</td>
                                    <td> مساند </td>
                                </tr>
                                <tr>
                                    <td>ওকালা </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->embassys)->okala }}</td>
                                    <td> الوكالة </td>
                                </tr>
                                <tr>
                                    <td>মেডিকেল রিপোর্ট </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        @if( $data -> medical_report  )
                                            Fit
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td> فحص طبي </td>
                                </tr>
                                <tr>
                                    <td>পুলিশ ক্লিয়ারেন্স </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->embassys)->police_clearance }}</td>
                                    <td> ورقة الشرطة  </td>
                                </tr>
                                <tr>
                                    <td>লাইসেন্স </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->embassys)->licence }}</td>
                                    <td> الرخصة </td>
                                </tr>
                                <tr>
                                    <td>পেশা </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->mofas)->occupetion }}</td>
                                    <td> المهنة </td>
                                </tr>
                                <tr>
                                    <td>যোগ্যতাএবং অভিজ্ঞতা সার্টিফিকেট </td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ optional($data->embassys)->qualification }}</td>
                                    <td> المؤهل وشهادة الخبرة </td>
                                </tr>
                                <tr>
                                    <td>ফিঙ্গারপ্রিন্ট</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                             {{--           @php
                                            $finger= $data->mofas->finger;
                                        @endphp
                                        @if( $finger )
                                            Done
                                        @else
                                            N/A
                                        @endif
                                    --}}</td>
                                    <td>البصمة</td>
                                </tr>


                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5 d-flex justify-content-between">
                        <div class="justify-content-start">
                            <div><p> অফিসের নাম :.......................................................</p></div>
                            <div><p> লাইসেন্স নম্বর : ...................................................</p></div>
                            <div><p> স্বাক্ষর :.......................................................</p></div>
                            <div><p> সিল : ...............................................................</p></div>
                        </div>

                        <div class="text-end">
                            <div> <p> MS/ SAM INTERNATIONAL : إسم المكتب </p></div>
                            <div> <p>{{ $data->rla_num }} : رقم الرخصة </p></div>
                            <div> <p>: التوقيع </p></div>
                            <div> <p>: الختم </p></div>
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