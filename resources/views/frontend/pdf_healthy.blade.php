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
                                            <td>ค่ารักษาพยาบาล</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_medical) }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_medical_after_return_to_thai) }}</td>
                                        </tr>
                                        <tr>
                                            <td>เคลื่อนย้ายฉุกเฉิน</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_emergency) }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่าชดเชยรายวัน</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_daily_compensation) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองกรณีเสียชีวิต</td>
                                        </tr>
                                        <tr>
                                            <td>ชดเชยกรณีเสียชีวิต</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_case_death) }}</td>
                                        </tr>
                                        <tr>
                                            <td>ค่าใช้จ่ายในการส่งศพกลับประเทศ</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_cost_of_repatriating) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองในการเดินทาง</td>
                                        </tr>
                                        <tr>
                                            <td>ความล่าช้าของเที่ยวบิน</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_flight_delay) }}</td>
                                        </tr>
                                        <tr>
                                            <td>การบอกเลิกการเดินทาง</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_trip_cancel) }}</td>
                                        </tr>
                                        <tr>
                                            <td>การพลาดต่อเที่ยวบิน</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_mising_a_flight) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="headerFontSize">ความคุ้มครองสัมภาระ และทรัพย์สิน</td>
                                        </tr>
                                        <tr>
                                            <td>สัมภาระสูญหาย/เสียหาย</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_lost_items) }}</td>
                                        </tr>
                                        <tr>
                                            <td>เงินสดถูกขโมย</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_stolen_cash) }}</td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารเดินทาง</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_travel_document) }}</td>
                                        </tr>
                                        <tr>
                                            <td>คอมพิวเตอร์โน๊ตบุ๊ค</td>
                                            <td>{{ priceInsurewise($row->insurance_healthy_pc_notebook) }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
@endif
</body>
</html>