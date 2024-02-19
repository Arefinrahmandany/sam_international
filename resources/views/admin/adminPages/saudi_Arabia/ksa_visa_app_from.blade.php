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
                            <div class="">
                                {!! DNS1D::getBarcodeHTML($data-> passport_number,'CODE128',2,50) !!}
                                p - {{ $data-> passport_number }}
                            </div>
                        </div>

                        <div class="col-md-3 text-end">
                            <div class="">
                                <p>NEW : <b>{{ $data->passport_number }}</b> </p>
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
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">{{ $data->name }} S/O. MD FOL MIAH</span></p>
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
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">JARINA BEGUM</span></p>
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
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">10-02-1986</span></p>
                                        </td>
                                        <td colspan="6" style="width:49.8pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">/<span style="font-family:'Traditional Arabic';">تاريخ الولادة</span>:</p>
                                        </td>
                                        <td colspan="13" style="width:97.95pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span dir="ltr">Place of birth:</span></p>
                                        </td>
                                        <td colspan="18" style="width:94.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:middle;">
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-weight:bold;" dir="ltr">CUMILLA</span></p>
                                        </td>
                                        <td colspan="5" style="width:50.7pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">محل الولادة</span>:</p>
                                        </td>
                                        <td style="vertical-align:top;"><br></td>
                                        <td style="vertical-align:top;"><br></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="width:88.05pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="height:0pt; display:block; position:absolute; z-index:9;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAAAcCAYAAAAz+aIrAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACdSURBVGhD7c/BCsUwCETR/P9P9+FiYAhqsygvLu4BIXUs6AIAAEDrscqc5JnuP8+8RuqWe1v8q6ybvUqLVQtXi5/mmS4bpTqy6stpnvGsm7uuOrLqh2rWZT2JzGssX07vrOeit9cu64ln3dx12aLd8tUxp3Ohy0bxRfXOelIddjKnXpeNEQupZH97vn/L3vdvr5D1owAAAADgv9b6AS1yapZT2IleAAAAAElFTkSuQmCC" width="71" height="28" alt="" style="margin: 0 auto 0 0; display: block; "></span><span dir="ltr">Previous nationality</span></p>
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
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; font-size:13pt;"><span style="font-weight:bold;" dir="ltr">EA0331631</span></p>
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
                                        <td colspan="10" style="width:121pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span style="font-family:'Traditional Arabic';">رئيس القسم القنصلي</span></p>
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><span dir="ltr">Head of consular section</span></p>
                                        </td>
                                        <td colspan="9" style="width:43.85pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:10pt;">&nbsp;</p>
                                        </td>
                                        <td colspan="25" style="width:179.25pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">
                                                <span style="height:0pt; display:block; position:absolute; z-index:-1;">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAcCAYAAACQ0cTtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAaSURBVEhL7cEBDQAAAMKg909tDwcEAAAcqgEL7AAB+B58fAAAAABJRU5ErkJggg==" width="27" height="28" alt="" style="margin: 0 auto 0 0; display: block; ">
                                                </span>
                                                <span dir="ltr">&nbsp;</span>
                                                <img src="data:image/jpeg;base64,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" width="207" height="41" alt="C:\Users\SUBOZ\AppData\Local\Microsoft\Windows\INetCache\Content.Word\barcode.jpg"></p>
                                        </td>
                                        <td colspan="21" style="width:149.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                                            <p dir="rtl" style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:'Traditional Arabic';">مدقق البيانات</span></p>
                                            <p dir="ltr" style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><span dir="ltr">Checked by:</span></p>
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
</main>
@endsection
