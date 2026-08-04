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
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text1 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_1 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text2 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_2 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text3 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_3 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text4 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_4 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text5 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_5 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text6 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_6 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text7 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_7 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text8 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_8 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text9 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_9 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text10 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_10 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text11 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_11 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text12 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_12 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text13 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_13 }}@endif</td>
                                        </tr>
                                        <tr>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_text14 }}@endif</td>
                                            <td>@if(!empty($row)){{ $row->insurance_transportation_14 }}@endif</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
@endif
</body>
</html>