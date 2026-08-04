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
                                            <td>ค่ารักษาจากอุบัติเหตุ</td>
                                            <td>{{ $row->insurance_travel_accident }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่ารักษาจากการเจ็บป่วย</td>
                                            <td>{{ $row->insurance_travel_sick }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง</td>
                                            <td>{{ $row->insurance_travel_vaccine }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่าฝากเลี้ยงกรณีไปต่างประเทศ</td>
                                            <td>{{ $row->insurance_travel_deposit }}</td>
                                        </tr>
                                        <tr>
                                            <td>บาดเจ็บคนภายนอก</td>
                                            <td>{{ $row->insurance_travel_external }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง</td>
                                            <td>{{ $row->insurance_travel_injury }}</td>
                                        </tr>
                                        <tr>
                                            <td>ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์</td>
                                            <td>{{ $row->insurance_travel_property }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
@endif
</body>
</html>