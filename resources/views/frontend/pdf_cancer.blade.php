<html>
<head>
    <title>PDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('public/fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ asset('public/fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ asset('public/fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
        }

        .textTh {
            font-family: "THSarabunNew";
        }

        .headerFontSize {
            font-size: 25px;
        }
    </style>
</head>

<body>
@if(!empty($row))
                            <div class="col-6 col-lg-4">
                                <div class="healthbox">
                                    <div class="imginsu">
                                        <img src="{{ asset('public/frontend/images/logo.svg') }}" alt="" class="img-fluid" width="150">
                                    </div>

                                    <table width="100%">
                                        <tr>
                                            <td align="left" class="headerFontSize" colspan="2">ความคุ้มครองค่ารักษาพยาบาล</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text1 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_1) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text2 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text3 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_3) }} </td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text4 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_4) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองกรณีเสียชีวิต</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text5 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_5) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text6 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_6) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองในการเดินทาง</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text7 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_7) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text8 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text9) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text10 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text11) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองสัมภาระ และทรัพย์สิน</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text12 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text13) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text14 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text15) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text15 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text16) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text16 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text17) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text18 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text19) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text20 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text21) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text22 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text23) }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $row->insurance_cancer_text24 }}</td>
                                            <td>{{ priceInsurewise($row->insurance_cancer_text25) }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
@endif
</body>
</html>