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
                                            <td align="left" class="headerFontSize" colspan="2">@if(!empty($row)){{ $row->insurance_car_text1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text1_1 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value1_1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text1_2 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value1_2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text1_3 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value1_3 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text1_4 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value1_4 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td align="left" class="headerFontSize" colspan="2">@if(!empty($row)){{ $row->insurance_car_text2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text2_1 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value2_1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text2_2 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value2_2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td align="left" class="headerFontSize" colspan="2">@if(!empty($row)){{ $row->insurance_car_text3 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text3_1 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value3_1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text3_2 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value3_2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text3_3 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value3_3 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_car_text4 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text4_1 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value4_1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text4_2 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value4_2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text4_3 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value4_3 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insureance_car_text4_4 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insureance_car_value4_4 }}@endif</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
@endif
</body>
</html>