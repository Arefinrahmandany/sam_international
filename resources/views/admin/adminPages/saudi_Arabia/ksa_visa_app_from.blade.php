@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{-- route('transection.index') --}}"  class="link-underline-light link-dark">Transection</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">pettyCash</a></li>
        </ol>
    </div>
</div>

<main>
<!-- main Section Start -->
    <div class="container px-4">
        <div class="row d-flex justify-content-center">

            <div class="card">
                <div class="card-body">

                    <style>

                        /* Font Definitions */
                        @font-face
                            {font-family:"Cambria Math";
                            panose-1:2 4 5 3 5 4 6 3 2 4;}
                        @font-face
                            {font-family:Calibri;
                            panose-1:2 15 5 2 2 2 4 3 2 4;}
                        @font-face
                            {font-family:Cambria;
                            panose-1:2 4 5 3 5 4 6 3 2 4;}
                        @font-face
                            {font-family:Tahoma;
                            panose-1:2 11 6 4 3 5 4 4 2 4;}
                        @font-face
                            {font-family:"Traditional Arabic";}
                        @font-face
                            {font-family:"Arabic Transparent";
                            panose-1:2 11 6 4 2 2 2 2 2 4;}
                        @font-face
                            {font-family:AF_Tholoth;}
                        /* Style Definitions */
                        p.MsoNormal, li.MsoNormal, div.MsoNormal
                            {margin:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Times New Roman","serif";}
                        h1
                            {mso-style-link:"Heading 1 Char";
                            margin-top:12.0pt;
                            margin-right:0in;
                            margin-bottom:3.0pt;
                            margin-left:0in;
                            text-align:right;
                            page-break-after:avoid;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:16.0pt;
                            font-family:"Cambria","serif";}
                        p.MsoListBullet, li.MsoListBullet, div.MsoListBullet
                            {margin-top:0in;
                            margin-right:.25in;
                            margin-bottom:0in;
                            margin-left:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            text-indent:-.25in;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Times New Roman","serif";}
                        p.MsoListBulletCxSpFirst, li.MsoListBulletCxSpFirst, div.MsoListBulletCxSpFirst
                            {margin-top:0in;
                            margin-right:.25in;
                            margin-bottom:0in;
                            margin-left:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            text-indent:-.25in;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Times New Roman","serif";}
                        p.MsoListBulletCxSpMiddle, li.MsoListBulletCxSpMiddle, div.MsoListBulletCxSpMiddle
                            {margin-top:0in;
                            margin-right:.25in;
                            margin-bottom:0in;
                            margin-left:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            text-indent:-.25in;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Times New Roman","serif";}
                        p.MsoListBulletCxSpLast, li.MsoListBulletCxSpLast, div.MsoListBulletCxSpLast
                            {margin-top:0in;
                            margin-right:.25in;
                            margin-bottom:0in;
                            margin-left:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            text-indent:-.25in;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Times New Roman","serif";}
                        p.MsoTitle, li.MsoTitle, div.MsoTitle
                            {mso-style-link:"Title Char";
                            margin-top:0in;
                            margin-right:0in;
                            margin-bottom:15.0pt;
                            margin-left:0in;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            border:none;
                            padding:0in;
                            font-size:26.0pt;
                            font-family:"Cambria","serif";
                            color:#17365D;
                            letter-spacing:.25pt;}
                        p.MsoTitleCxSpFirst, li.MsoTitleCxSpFirst, div.MsoTitleCxSpFirst
                            {mso-style-link:"Title Char";
                            margin:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            border:none;
                            padding:0in;
                            font-size:26.0pt;
                            font-family:"Cambria","serif";
                            color:#17365D;
                            letter-spacing:.25pt;}
                        p.MsoTitleCxSpMiddle, li.MsoTitleCxSpMiddle, div.MsoTitleCxSpMiddle
                            {mso-style-link:"Title Char";
                            margin:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            border:none;
                            padding:0in;
                            font-size:26.0pt;
                            font-family:"Cambria","serif";
                            color:#17365D;
                            letter-spacing:.25pt;}
                        p.MsoTitleCxSpLast, li.MsoTitleCxSpLast, div.MsoTitleCxSpLast
                            {mso-style-link:"Title Char";
                            margin-top:0in;
                            margin-right:0in;
                            margin-bottom:15.0pt;
                            margin-left:0in;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            border:none;
                            padding:0in;
                            font-size:26.0pt;
                            font-family:"Cambria","serif";
                            color:#17365D;
                            letter-spacing:.25pt;}
                        p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
                            {mso-style-link:"Subtitle Char";
                            margin:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:12.0pt;
                            font-family:"Cambria","serif";
                            color:#4F81BD;
                            letter-spacing:.75pt;
                            font-style:italic;}
                        pre
                            {mso-style-link:"HTML Preformatted Char";
                            margin:0in;
                            margin-bottom:.0001pt;
                            font-size:10.0pt;
                            font-family:"Courier New";}
                        p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
                            {mso-style-link:"Balloon Text Char";
                            margin:0in;
                            margin-bottom:.0001pt;
                            text-align:right;
                            direction:rtl;
                            unicode-bidi:embed;
                            font-size:8.0pt;
                            font-family:"Tahoma","sans-serif";}
                        p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
                            {margin:0in;
                            margin-bottom:.0001pt;
                            font-size:11.0pt;
                            font-family:"Calibri","sans-serif";}
                        span.shorttext1
                            {mso-style-name:short_text1;}
                        span.shorttext
                            {mso-style-name:short_text;}
                        span.hps
                            {mso-style-name:hps;}
                        span.HTMLPreformattedChar
                            {mso-style-name:"HTML Preformatted Char";
                            mso-style-link:"HTML Preformatted";
                            font-family:"Courier New";}
                        span.Heading1Char
                            {mso-style-name:"Heading 1 Char";
                            mso-style-link:"Heading 1";
                            font-family:"Cambria","serif";
                            font-weight:bold;}
                        span.BalloonTextChar
                            {mso-style-name:"Balloon Text Char";
                            mso-style-link:"Balloon Text";
                            font-family:"Tahoma","sans-serif";}
                        span.SubtitleChar
                            {mso-style-name:"Subtitle Char";
                            mso-style-link:Subtitle;
                            font-family:"Cambria","serif";
                            color:#4F81BD;
                            letter-spacing:.75pt;
                            font-style:italic;}
                        span.TitleChar
                            {mso-style-name:"Title Char";
                            mso-style-link:Title;
                            font-family:"Cambria","serif";
                            color:#17365D;
                            letter-spacing:.25pt;}
                        span.rynqvb
                            {mso-style-name:rynqvb;}
                        .MsoChpDefault
                            {font-size:10.0pt;}
                        @page WordSection1
                            {size:595.45pt 841.7pt;
                            margin:.3in .4in 4.5pt .3in;}
                        div.WordSection1
                            {page:WordSection1;}
                        /* List Definitions */
                        ol
                            {margin-bottom:0in;}
                        ul
                            {margin-bottom:0in;}
                    </style>

                        <div class="container row">

                        <div class="card">
                            <div class="card-body col-md-12">

                                <div class="row d-flex justify-content-between">

                                    <div class="col-md-3 text-center">
                                        <div class="border border-dark" class="text-center" style="border: #000 1px; height:110px; width: 96px;">
                                            <p  lang="AR-SA"> صورة </p>
                                            <p> Photo </p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <div class="mt-2">
                                            {!! DNS1D::getBarcodeHTML($data->passport, 'C128') !!}
                                            <p class="bt-0 pt-0">{{ $data->passport }}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-end">
                                        <div class="">
                                            <p>NEW : <b>{{ $data->passport }}</b> </p>
                                        </div>
                                        <div class="pt-2 mt-2">
                                            <p>  سفارة المملكة العربية السعودية القسم القنصلي   </p>
                                        </div>
                                    </div>

                                </div>

                                <div dir="rtl">
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:left;"><span dir="ltr">&nbsp;</span></p>
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:left;"><span dir="ltr">&nbsp;</span></p>
                                    <div dir="ltr">
                                        <table cellspacing="0" cellpadding="0" style="width:536.4pt; border-collapse:collapse;">
                                            <tbody>
                                                <tr style="height:10.8pt;">
                                                    <td colspan="6" style="width:98.1pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Full name:</span></p>
                                                    </td>
                                                    <td colspan="39" style="width:259.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">{{ $data->name }} S/O. {{ $data->father }}</span></p>
                                                    </td>
                                                    <td colspan="14" style="width:84.6pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><span style="font-family:Arial;">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:46.8pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">السم الكامل</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Mother&apos;s name</span></p>
                                                    </td>
                                                    <td colspan="34" style="width:244.8pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">{{ $data->mother }}</span></p>
                                                    </td>
                                                    <td colspan="18" style="width:94.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:13pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:50.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">إسم الإم</span>:</p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date of birth:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:75.45pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">{{ $data -> dob }}</span></p>
                                                    </td>
                                                    <td colspan="6" style="width:49.8pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">/<span style="font-family:'Traditional Arabic';">تاريخ الولادة</span>:</p>
                                                    </td>
                                                    <td colspan="13" style="width:97.95pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Place of birth:</span></p>
                                                    </td>
                                                    <td colspan="18" style="width:94.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">{{ $data->address }}</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:50.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">محل الولادة</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="width:88.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="height:0pt; display:block; position:absolute; z-index:9;">none</span><span dir="ltr">Previous nationality</span></p>
                                                    </td>
                                                    <td colspan="22" style="width:146.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الجنسية السابقة</span>:</p>
                                                    </td>
                                                    <td colspan="13" style="width:97.95pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Present nationality</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:87.9pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">BANGLADESHI&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="8" style="width:57.3pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الجنسية الحالية</span>:</p>
                                                    </td>
                                                    <td style="border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="width:53.45pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Sex:</span></p>
                                                    </td>
                                                    <td colspan="24" style="width:180.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الجنس</span>:</p>
                                                    </td>
                                                    <td colspan="14" style="width:98.55pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Marital Status:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:87.95pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">MARRIED</span></p>
                                                    </td>
                                                    <td colspan="8" style="width:57.25pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الحالة الإجتماعية</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="width:53.45pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Sect.: SUNNI</span></p>
                                                    </td>
                                                    <td colspan="24" style="width:180.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">المـذهـب</span>:</p>
                                                    </td>
                                                    <td colspan="15" style="width:98.85pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Religion:</span></p>
                                                    </td>
                                                    <td colspan="12" style="width:78.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">MUSLIM</span></p>
                                                    </td>
                                                    <td colspan="9" style="width:66.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الديـانـة</span>:</p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" style="width:110.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span dir="ltr">Place ** issue:</span></p>
                                                    </td>
                                                    <td colspan="17" style="width:97.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:8pt;"><span style="font-family:'Traditional Arabic';">مصدرة</span>:</p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><span dir="ltr">&nbsp;&nbsp; Qualification:&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="16" style="width:125pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:8pt;"><span style="font-family:'Traditional Arabic';">المؤهل العلمي</span>:</p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:8pt;">&nbsp;<span dir="ltr">Profession</span></p>
                                                    </td>
                                                    <td colspan="19" style="width:113.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><span style="font-weight:bold;" dir="ltr">عامل انشاءات</span></p>
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><span style="font-weight:bold;" dir="ltr">CONSTRUCTION WORKER</span></p>
                                                    </td>
                                                    <td colspan="3" style="width:31.4pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span style="font-family:'Traditional Arabic';">المهنـة</span>:</p>
                                                    </td>
                                                    <td style="border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="53" style="width:435.6pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">**** address and telephone No: DAOULOT PUR, BANGARA, MURADNAGAR, CUMILLA.</span></p>
                                                    </td>
                                                    <td colspan="11" style="width:74.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:'Traditional Arabic'; font-size:11pt;">عنوان المنزل ورقم التلفون</span><span style="font-size:11pt;">:</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="11" style="width:126.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="41" style="width:282.35pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="11" style="width:90.35pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-size:10pt;">&nbsp;</span></p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">Business address and telephone No.:</span></p>
                                                    </td>
                                                    <td colspan="33" style="width:225.4pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><span style="font-family:Arial; font-weight:bold;" dir="ltr">M/S. S A M INTERNATIONAL. RL-1203</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:127.6pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:1pt;"><span style="font-family:'Traditional Arabic'; font-size:11pt;">عنواان الشركة&nbsp;</span><span style="font-size:11pt;">(</span><span style="font-family:'Traditional Arabic'; font-size:11pt;">المؤسسة</span><span style="font-size:11pt;">)&nbsp;</span><span style="font-family:'Traditional Arabic'; font-size:11pt;">ورقم التلفون</span><span style="font-family:'Traditional Arabic';" dir="ltr">&nbsp;</span><span style="font-size:11pt;">:</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="63" style="width:520.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt;"><span dir="ltr"><span style="font-family:Arial;">26, Chamelibagh (4</span><span style="font-family:Arial; font-size:9.33pt;"><sup>th</sup></span><span style="font-family:Arial;">&nbsp;Floor ) Shantinagor , Dhaka -1217, TEL: +88-02-9336574</span></span></p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="width:82.55pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:4pt;">
                                                            <span dir="ltr">&nbsp;</span>
                                                        </p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:14pt;">
                                                            <span dir="ltr"><span style="font-size:10pt;">Purpose of travel:</span>&nbsp;</span>
                                                        </p>
                                                    </td>
                                                    <td colspan="53" style="width:361.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">

                                                    </td>
                                                    <td colspan="6" style="width:55.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:'Traditional Arabic';">الغاية من السفر</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7" style="width:109.5pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:Arial;">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="13" style="width:62.6pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="font-family:'Traditional Arabic';">محل الإصدار</span>:</p>
                                                    </td>
                                                    <td colspan="19" style="width:150.85pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;"><span style="font-family:'Traditional Arabic';">تاريخ الإصدار</span><span style="font-family:Arial;">:</span></p>
                                                    </td>
                                                    <td colspan="24" style="width:165.15pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">رقم الجواز</span><span style="font-family:Arial;">:</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">***** ** issue:</span></p>
                                                    </td>
                                                    <td colspan="11" style="width:38.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:Arial;" dir="ltr">DHAKA&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="14" style="width:105.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span dir="ltr">Date of passport issued:</span></p>
                                                    </td>
                                                    <td colspan="7" style="width:69.65pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:13pt;"><span style="font-weight:bold;" dir="ltr">07/04/2019</span></p>
                                                    </td>
                                                    <td colspan="13" style="width:55.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Passport No.:&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="12" style="width:99.15pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:13pt;"><span style="font-weight:bold;" dir="ltr">{{ $data->passport }}</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9" style="width:111.1pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date of passport&apos;s expiry:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:79.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:13pt;"><span style="font-weight:bold;" dir="ltr">06/04/2024</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:49.45pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="19" style="width:108.4pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span style="font-family:Arial;" dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="16" style="width:129.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">تاريخ إنتهاء صلاحية الجواز</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="12" style="width:64.8pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;"><span style="font-family:'Traditional Arabic';">مدة الإقامة بالمملكة</span>:</p>
                                                    </td>
                                                    <td colspan="21" style="width:160.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">تاريخ الوصول</span>:<span dir="ltr">//</span></p>
                                                    </td>
                                                    <td colspan="24" style="width:165.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">تاريخ المغادرة</span>:</p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="15" style="width:137.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Duration of stay ** the Kingdom:</span></p>
                                                    </td>
                                                    <td colspan="7" style="width:51.15pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="25" style="width:164.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date of arrival:</span></p>
                                                    </td>
                                                    <td colspan="16" style="width:134.55pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date of departure:</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="63" style="width:520.5pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">طريقة الدفع</span>:&nbsp;&nbsp; <span style="font-size:10pt;">(</span><span style="font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:10pt;">)&nbsp;</span><span style="font-family:'Traditional Arabic';">مجاملة</span><span style="font-family:'Traditional Arabic';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:10pt;">(</span><span style="font-size:10pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:10pt;">)&nbsp;</span><span style="font-family:'Traditional Arabic';">نقداً</span><span style="font-family:'Traditional Arabic';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(&nbsp;&nbsp;&nbsp; ) <span style="font-family:'Traditional Arabic';">بشيك رقم</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:'Traditional Arabic';">تاريخ</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp; ) <span style="font-family:'Traditional Arabic';">ايصال رقم</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-family:'Traditional Arabic';">تاريخ</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="63" style="width:520.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Mode of Payment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp; ) Free&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp; ) Cash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp; ) Cheque No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp;&nbsp; )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr style="height:18.4pt;">
                                                    <td colspan="16" style="width:146.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:6pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:10pt;"><span dir="ltr">Relationship:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:106.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;">&nbsp; <span style="font-family:'Traditional Arabic';">صلتـه</span>:</p>
                                                    </td>
                                                    <td colspan="15" style="width:97.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="17" style="width:138.35pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">إسم المحرم</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:3pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Destination:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:106.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">جهة الوصول بالمملكة</span>:</p>
                                                    </td>
                                                    <td colspan="15" style="width:97.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Carrier&apos;s name:</span></p>
                                                    </td>
                                                    <td colspan="17" style="width:138.35pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">اسم الشركة الناقلة</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="31" style="width:263.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:2pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Dependents traveling in the **** passport:</span></p>
                                                    </td>
                                                    <td colspan="32" style="width:246.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;"><span style="font-family:'Traditional Arabic';">إيضاحات تخص أفراد العائلة&nbsp;</span>(<span style="font-family:'Traditional Arabic';">المضافين</span>) <span style="font-family:'Traditional Arabic';">علي نفس جواز السفر</span>:</p>
                                                    </td>
                                                    <td style="border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-family:'Traditional Arabic';">نوع الصلة</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span dir="ltr">Relationship</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:106.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-family:'Traditional Arabic';">تــاريخ الميــلاد</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span dir="ltr">Date of Birth</span></p>
                                                    </td>
                                                    <td colspan="12" style="width:88.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-family:'Traditional Arabic';">الجنـــس</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span dir="ltr">Sex</span></p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-family:'Traditional Arabic';">الاسم بـالكــامل</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span dir="ltr">Full name</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:106.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="12" style="width:88.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:9pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;">&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="14" style="width:105.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="13" style="width:89.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="16" style="width:146.5pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:106.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="12" style="width:88.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="31" style="width:263.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:2pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Name and address of company or individual in the kingdom:</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:43.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:10pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="27" style="width:192.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">اسم وعنوان الشركة أو اسم الشخص وعنوان بالمملكة</span>:</p>
                                                    </td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                    <td style="border-top-style:solid; border-top-width:0.75pt; vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="63" style="width:520.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; line-height:150%; font-size:11pt;"><span style="font-family:Calibri;" dir="ltr">ZIAD BIN AYED AL SHAMMARI FOUNDATION</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="37" style="width:318.3pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:9pt;"><span dir="ltr">The undersigned hereby certify that all the information I have provided *** correct.</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">I will abide by the laws of the Kingdom during the period of my residence in it.</span></p>
                                                    </td>
                                                    <td colspan="26" style="width:191.4pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:'Arabic Transparent';">أنا الموقع أدناه أقر بأن كل المعلومات التي دونها صحيصة</span>.</p>
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:'Arabic Transparent';">وسأكون ملتزما بقوانين المملكة أثناء فترة وجودي بها&nbsp;</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr style="height:21.6pt;">
                                                    <td colspan="14" style="width:134.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="18" style="width:127.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="5" style="width:34.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:8pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="26" style="width:191.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:4pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date:</span></p>
                                                    </td>
                                                    <td colspan="8" style="width:25.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;"><span style="font-family:'Traditional Arabic';">التاريخ</span>:</p>
                                                    </td>
                                                    <td colspan="9" style="width:55.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:3pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><span dir="ltr">Signature:</span></p>
                                                    </td>
                                                    <td colspan="5" style="width:34.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt;"><span style="font-family:'Traditional Arabic';">التوقيع</span>:</p>
                                                    </td>
                                                    <td colspan="7" style="width:44pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span dir="ltr">Name:</span></p>
                                                    </td>
                                                    <td colspan="26" style="width:170.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-weight:bold;" dir="ltr">JAMAL HOSSAIN</span></p>
                                                    </td>
                                                    <td colspan="2" style="width:27.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">الاسم</span>:</p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" style="width:98.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:7pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="8" style="width:25.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:7pt;"><span style="font-size:9pt;">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="9" style="width:55.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:7pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="14" style="width:107pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:7pt;"><span style="font-size:9pt;">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="24" style="width:152.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:7pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="2" style="width:27.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:7pt;"><span style="font-size:9pt;">&nbsp;</span></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="14" style="width:134.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><u><span dir="ltr">For official use only</span></u></p>
                                                    </td>
                                                    <td colspan="9" style="width:55.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="9" style="width:61.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                                                    </td>
                                                    <td colspan="31" style="width:237pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><u><span style="font-family:'Traditional Arabic';">للاستعمال الرسمى فقط</span></u><u>:</u></p>
                                                    </td>
                                                    <td style="vertical-align:top;"><br></td>
                                                    <td style="vertical-align:top;"><br></td>
                                                </tr>
                                                <tr style="height:18.9pt;">
                                                    <td style="width:39.3pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:3pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Date:</span></p>
                                                    </td>
                                                    <td colspan="14" style="width:87.6pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:13pt;"><strong>28/01/1445هـ</strong></p>
                                                    </td>
                                                    <td colspan="3" style="width:25.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt;"><span style="font-family:'Traditional Arabic';">تاريخه</span>:</p>
                                                    </td>
                                                    <td colspan="14" style="width:88.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:2pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Authorization:</span></p>
                                                    </td>
                                                    <td colspan="11" style="width:79.55pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:13pt;"><span style="font-weight:bold;" dir="ltr">1303512334</span></p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span style="font-family:'Traditional Arabic';">رقم الامر المعتمد عليه في إعطاء التأشيرة</span>:</p>
                                                    </td>
                                                </tr>
                                                <tr style="height:17.5pt;">
                                                    <td colspan="6" style="width:98.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Visit/ Work for:</span></p>
                                                    </td>
                                                    <td colspan="59" style="width:416.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><span style="font-weight:bold;" dir="ltr">مؤسسة زياد بن عايد الشمري</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="width:48pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">&nbsp;&nbsp;&nbsp;&nbsp; Date:</span></p>
                                                    </td>
                                                    <td colspan="10" style="width:69.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; line-height:21.9pt;"><span style="font-family:Arial; font-size:9pt; font-weight:bold;" dir="ltr">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="6" style="width:34.4pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:9pt;"><span style="font-family:'Traditional Arabic'; font-size:11pt;">وتاريخ</span><span style="font-size:11pt;">:</span></p>
                                                    </td>
                                                    <td colspan="15" style="width:97.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span dir="ltr">Visa No.:</span></p>
                                                    </td>
                                                    <td colspan="10" style="width:70.55pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:9pt;"><span style="font-size:10pt;">&nbsp;</span></p>
                                                    </td>
                                                    <td colspan="22" style="width:151.75pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:9pt;"><span style="font-family:'Traditional Arabic'; font-size:11pt;">أشر له برقم</span><span style="font-size:11pt;">:</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="13" style="width:130.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><span dir="ltr">FEE COLLECTED:</span></p>
                                                    </td>
                                                    <td colspan="13" style="width:89.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:10pt;"><span style="font-family:'Traditional Arabic';">المبلغ المحصل</span>:</p>
                                                    </td>
                                                    <td colspan="8" style="width:43.9pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:2pt;"><span dir="ltr">&nbsp;</span></p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Type:</span></p>
                                                    </td>
                                                    <td colspan="16" style="width:91.2pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">نوعها</span>:</p>
                                                    </td>
                                                    <td colspan="12" style="width:89.25pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Duration:</span></p>
                                                    </td>
                                                    <td colspan="3" style="width:28.1pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">مدتها</span>:</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="30">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                                            <span style="font-family:'Traditional Arabic';">رئيس القسم القنصلي</span>
                                                        </p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">
                                                            <span dir="ltr">Head of consular section</span>
                                                        </p>
                                                    </td>
                                                    <td colspan="30" class="text-center">
                                                        <div class="mt-2">
                                                            {!! DNS1D::getBarcodeHTML($data->passport, 'C128') !!}
                                                            <p class="bt-0 pt-0">{{ $data->passport }}</p>
                                                        </div>
                                                    </td>
                                                    <td colspan="30">
                                                        <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">
                                                            <span style="font-family:'Traditional Arabic';"> مدقق البيانات </span>
                                                        </p>
                                                        <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;">
                                                            <span dir="ltr">Checked by:</span>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center;"><span dir="ltr">&nbsp;</span></p>
                                </div>

                        </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
