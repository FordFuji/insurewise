<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;
use EveryWell\Imagination\Traits\HasImages;
use EveryWell\Imagination\Contracts\HasImages as HasImagesContract;
use Image;

class ExportExcelController extends Controller implements HasImagesContract
{
    use HasImages;

    public function contact_car_export_excel(Request $request) {
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_car_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_car')
            ->orderBy('contact_car_id', 'asc')
            ->where('contact_car_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_car_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_car_id;?></td>
                        <td><?php echo $r->contact_car_name_surname;?></td>
                        <td><?php echo $r->contact_car_telephone;?></td>
                        <td><?php echo $r->contact_car_email;?></td>
                        <td><?php echo $r->contact_car_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function quotation_car_export_excel(Request $request) {
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=quotation_car_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('quotation_car')
            ->orderBy('quotation_car.quotation_car_id', 'asc')
            ->join('insurance_car', 'quotation_car.insurance_car_id', '=', 'insurance_car.insurance_car_id')
            ->where('quotation_car.quotation_car_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('quotation_car.quotation_car_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->quotation_car_id;?></td>
                        <td><?php echo $r->insurance_car_name;?></td>
                        <td><?php echo $r->quotation_car_name_surname;?></td>
                        <td><?php echo $r->quotation_car_telephone;?></td>
                        <td><?php echo $r->quotation_car_email;?></td>
                        <td><?php echo $r->quotation_car_call;?></td>
                        <td><?php echo $r->quotation_car_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function car_contact_confirm_export_excel(Request $request) {
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=car_contact_confirm_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('car_contact_confirm')
            ->orderBy('car_contact_confirm.car_contact_confirm_id', 'asc')
            ->join('insurance_car', 'car_contact_confirm.insurance_car_id', '=', 'insurance_car.insurance_car_id')
            ->where('car_contact_confirm.car_contact_confirm_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('car_contact_confirm.car_contact_confirm_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->car_contact_confirm_id;?></td>
                        <td><?php echo $r->insurance_car_name;?></td>
                        <td><?php echo $r->car_contact_confirm_name_surname;?></td>
                        <td><?php echo $r->car_contact_confirm_telephone;?></td>
                        <td><?php echo $r->car_contact_confirm_email;?></td>
                        <td><?php echo $r->car_contact_confirm_call;?></td>
                        <td><?php echo $r->car_contact_confirm_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function healthy_contact_export_excel(Request $request) {
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_healthy_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('healthy_contact')
            ->orderBy('healthy_contact.healthy_contact_id', 'asc')
            ->join('insurance_healthy', 'healthy_contact.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->where('healthy_contact.healthy_contact_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('healthy_contact.healthy_contact_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->healthy_contact_id;?></td>
                        <td><?php echo $r->insurance_healthy_name;?></td>
                        <td><?php echo $r->healthy_contact_name_surname;?></td>
                        <td><?php echo $r->healthy_contact_telephone;?></td>
                        <td><?php echo $r->healthy_contact_telephone;?></td>
                        <td><?php echo $r->healthy_contact_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function quotation_health_export_excel(Request $request) {
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=quotation_healthy_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('quotation_health')
            ->orderBy('quotation_health.quotation_health_id', 'asc')
            ->join('insurance_healthy', 'quotation_health.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->where('quotation_health.quotation_health_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('quotation_health.quotation_health_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->quotation_health_id;?></td>
                        <td><?php echo $r->insurance_healthy_name;?></td>
                        <td><?php echo $r->quotation_health_name_surname;?></td>
                        <td><?php echo $r->quotation_health_telephone;?></td>
                        <td><?php echo $r->quotation_health_email;?></td>
                        <td><?php echo $r->quotation_health_call;?></td>
                        <td><?php echo $r->quotation_health_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function healthy_contact_confirm_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=healthy_contact_confirm_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('healthy_contact_confirm')
            ->orderBy('healthy_contact_confirm.healthy_contact_confirm_id', 'asc')
            ->join('insurance_healthy', 'healthy_contact_confirm.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->where('healthy_contact_confirm.healthy_contact_confirm_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('healthy_contact_confirm.healthy_contact_confirm_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->healthy_contact_confirm_id;?></td>
                        <td><?php echo $r->insurance_healthy_name;?></td>
                        <td><?php echo $r->healthy_contact_confirm_name_surname;?></td>
                        <td><?php echo $r->healthy_contact_confirm_telephone;?></td>
                        <td><?php echo $r->healthy_contact_confirm_email;?></td>
                        <td><?php echo $r->healthy_contact_confirm_call;?></td>
                        <td><?php echo $r->healthy_contact_confirm_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function golf_contact_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=golf_contact_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('golf_contact')
            ->orderBy('golf_contact.golf_contact_id', 'asc')
            ->where('golf_contact.golf_contact_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('golf_contact.golf_contact_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->golf_contact_id;?></td>
                        <td><?php echo $r->golf_contact_name_surname;?></td>
                        <td><?php echo $r->golf_contact_telephone;?></td>
                        <td><?php echo $r->golf_contact_email;?></td>
                        <td><?php echo $r->golf_contact_call;?></td>
                        <td><?php echo $r->golf_contact_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_travel_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_travel_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_travel')
            ->orderBy('contact_travel.contact_travel_id', 'asc')
            ->join('insurance_travel', 'contact_travel.insurance_travel_id', '=', 'insurance_travel.insurance_travel_id')
            ->where('contact_travel.contact_travel_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_travel.contact_travel_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_travel_id;?></td>
                        <td><?php echo $r->insurance_travel_name;?></td>
                        <td><?php echo $r->contact_travel_name_surname;?></td>
                        <td><?php echo $r->contact_travel_tel;?></td>
                        <td><?php echo $r->contact_travel_email;?></td>
                        <td><?php echo $r->contact_travel_call;?></td>
                        <td><?php echo $r->contact_travel_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_travel_detail_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_travel_detail_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_travel_detail')
            ->orderBy('contact_travel_detail.contact_travel_detail_id', 'asc')
            ->join('insurance_travel', 'contact_travel_detail.insurance_travel_id', '=', 'insurance_travel.insurance_travel_id')
            ->where('contact_travel_detail.contact_travel_detail_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_travel_detail.contact_travel_detail_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_travel_detail_id;?></td>
                        <td><?php echo $r->insurance_travel_name;?></td>
                        <td><?php echo $r->contact_travel_detail_name_surname;?></td>
                        <td><?php echo $r->contact_travel_detail_telephone;?></td>
                        <td><?php echo $r->contact_travel_detail_email;?></td>
                        <td><?php echo $r->contact_travel_detail_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_pet_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_pet_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_pet')
            ->orderBy('contact_pet.contact_pet_id', 'asc')
            ->join('insurance_pet', 'contact_pet.insurance_pet_id', '=', 'insurance_pet.insurance_pet_id')
            ->where('contact_pet.contact_pet_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_pet.contact_pet_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_pet_id;?></td>
                        <td><?php echo $r->insurance_pet_name;?></td>
                        <td><?php echo $r->contact_pet_name_surname;?></td>
                        <td><?php echo $r->contact_pet_tel;?></td>
                        <td><?php echo $r->contact_pet_email;?></td>
                        <td><?php echo $r->contact_pet_call;?></td>
                        <td><?php echo $r->contact_pet_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_pet_detail_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_pet_detail_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_pet_detail')
            ->orderBy('contact_pet_detail.contact_pet_detail_id', 'asc')
            ->join('insurance_pet', 'contact_pet_detail.insurance_pet_id', '=', 'insurance_pet.insurance_pet_id')
            ->where('contact_pet_detail.contact_pet_detail_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_pet_detail.contact_pet_detail_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_pet_detail_id;?></td>
                        <td><?php echo $r->insurance_pet_name;?></td>
                        <td><?php echo $r->contact_pet_detail_name_surname;?></td>
                        <td><?php echo $r->contact_pet_detail_tel;?></td>
                        <td><?php echo $r->contact_pet_detail_email;?></td>
                        <td><?php echo $r->contact_pet_detail_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_home_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_home_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_home')
            ->orderBy('contact_home.contact_home_id', 'asc')
            ->join('insurance_home', 'contact_home.insurance_home_id', '=', 'insurance_home.insurance_home_id')
            ->where('contact_home.contact_home_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_home.contact_home_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_home_id;?></td>
                        <td><?php echo $r->insurance_home_name;?></td>
                        <td><?php echo $r->contact_home_name_surname;?></td>
                        <td><?php echo $r->contact_home_tel;?></td>
                        <td><?php echo $r->contact_home_email;?></td>
                        <td><?php echo $r->contact_home_call;?></td>
                        <td><?php echo $r->contact_home_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_detail_home_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_detail_home_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_detail_home')
            ->orderBy('contact_detail_home.contact_detail_home_id', 'asc')
            ->join('insurance_home', 'contact_detail_home.insurance_home_id', '=', 'insurance_home.insurance_home_id')
            ->where('contact_detail_home.contact_detail_home_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_detail_home.contact_detail_home_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_detail_home_id;?></td>
                        <td><?php echo $r->insurance_home_name;?></td>
                        <td><?php echo $r->contact_detail_home_name_surname;?></td>
                        <td><?php echo $r->contact_detail_home_tel;?></td>
                        <td><?php echo $r->contact_detail_home_email;?></td>
                        <td><?php echo $r->contact_detail_home_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_condo_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_condo_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาให้ติดต่อกลับ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_condo')
            ->orderBy('contact_condo.contact_condo_id', 'asc')
            ->join('insurance_condo', 'contact_condo.insurance_condo_id', '=', 'insurance_condo.insurance_condo_id')
            ->where('contact_condo.contact_condo_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_condo.contact_condo_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_condo_id;?></td>
                        <td><?php echo $r->insurance_condo_name;?></td>
                        <td><?php echo $r->contact_condo_name_surname;?></td>
                        <td><?php echo $r->contact_condo_telephone;?></td>
                        <td><?php echo $r->contact_condo_email;?></td>
                        <td><?php echo $r->contact_condo_call;?></td>
                        <td><?php echo $r->contact_condo_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_condo_detail_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_condo_detail_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_condo_detail')
            ->orderBy('contact_condo_detail.contact_condo_detail_id', 'asc')
            ->join('insurance_condo', 'contact_condo_detail.insurance_condo_id', '=', 'insurance_condo.insurance_condo_id')
            ->where('contact_condo_detail.contact_condo_detail_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_condo_detail.contact_condo_detail_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_condo_detail_id;?></td>
                        <td><?php echo $r->insurance_condo_name;?></td>
                        <td><?php echo $r->contact_condo_detail_name_surname;?></td>
                        <td><?php echo $r->contact_condo_detail_telephone;?></td>
                        <td><?php echo $r->contact_condo_detail_email;?></td>
                        <td><?php echo $r->contact_condo_detail_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_cancer_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_cancer_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาติดต่อ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_cancer')
            ->orderBy('contact_cancer.contact_cancer_id', 'asc')
            ->join('insurance_cancer', 'contact_cancer.insurance_cancer_id', '=', 'insurance_cancer.insurance_cancer_id')
            ->where('contact_cancer.contact_cancer_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_cancer.contact_cancer_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_cancer_id;?></td>
                        <td><?php echo $r->insurance_cancer_plan;?></td>
                        <td><?php echo $r->contact_cancer_name_surname;?></td>
                        <td><?php echo $r->contact_cancer_telephone;?></td>
                        <td><?php echo $r->contact_cancer_email;?></td>
                        <td><?php echo $r->contact_cancer_call;?></td>
                        <td><?php echo $r->contact_cancer_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_accident_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_accident_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาติดต่อ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_accident')
            ->orderBy('contact_accident.contact_accident_id', 'asc')
            ->join('insurance_accident', 'contact_accident.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->where('contact_accident.contact_accident_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_accident.contact_accident_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_accident_id;?></td>
                        <td><?php echo $r->insurance_accident_plan;?></td>
                        <td><?php echo $r->contact_accident_name_surname;?></td>
                        <td><?php echo $r->contact_accident_telephone;?></td>
                        <td><?php echo $r->contact_accident_email;?></td>
                        <td><?php echo $r->contact_accident_call;?></td>
                        <td><?php echo $r->contact_accident_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function confirm_accident_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=confirm_accident_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('confirm_accident')
            ->orderBy('confirm_accident.confirm_accident_id', 'asc')
            ->join('insurance_accident', 'confirm_accident.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->where('confirm_accident.confirm_accident_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('confirm_accident.confirm_accident_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->confirm_accident_id;?></td>
                        <td><?php echo $r->insurance_accident_plan;?></td>
                        <td><?php echo $r->confirm_accident_name_surname;?></td>
                        <td><?php echo $r->confirm_accident_telephone;?></td>
                        <td><?php echo $r->confirm_accident_email;?></td>
                        <td><?php echo $r->confirm_accident_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function confirm_accident2_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=confirm_accident2_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาติดต่อ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('confirm_accident2')
            ->orderBy('confirm_accident2.confirm_accident2_id', 'asc')
            ->join('insurance_accident', 'confirm_accident2.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->where('confirm_accident2.confirm_accident2_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('confirm_accident2.confirm_accident2_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->confirm_accident2_id;?></td>
                        <td><?php echo $r->insurance_accident_plan;?></td>
                        <td><?php echo $r->confirm_accident2_name_surname;?></td>
                        <td><?php echo $r->confirm_accident2_telephone;?></td>
                        <td><?php echo $r->confirm_accident2_email;?></td>
                        <td><?php echo $r->confirm_accident2_call;?></td>
                        <td><?php echo $r->confirm_accident2_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_transportation_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_transportation_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>ช่วงเวลาติดต่อ</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_transportation')
            ->orderBy('contact_transportation.contact_transportation_id', 'asc')
            ->join('insurance_transportation', 'contact_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->where('contact_transportation.contact_transportation_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_transportation.contact_transportation_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_transportation_id;?></td>
                        <td><?php echo $r->insurance_transportation_plan;?></td>
                        <td><?php echo $r->contact_transportation_name_surname;?></td>
                        <td><?php echo $r->contact_transportation_telephone;?></td>
                        <td><?php echo $r->contact_transportation_email;?></td>
                        <td><?php echo $r->contact_transportation_call;?></td>
                        <td><?php echo $r->contact_transportation_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function detail_transportation_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=detail_transportation_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('detail_transportation')
            ->orderBy('detail_transportation.detail_transportation_id', 'asc')
            ->join('insurance_transportation', 'detail_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->where('detail_transportation.detail_transportation_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('detail_transportation.detail_transportation_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->detail_transportation_id;?></td>
                        <td><?php echo $r->insurance_transportation_plan;?></td>
                        <td><?php echo $r->detail_transportation_name_surname;?></td>
                        <td><?php echo $r->detail_transportation_telephone;?></td>
                        <td><?php echo $r->detail_transportation_email;?></td>
                        <td><?php echo $r->detail_transportation_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function confirm_transportation_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=confirm_transportation_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>แผนประกัน</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('confirm_transportation')
            ->orderBy('confirm_transportation.confirm_transportation_id', 'asc')
            ->join('insurance_transportation', 'confirm_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->where('confirm_transportation.confirm_transportation_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('confirm_transportation.confirm_transportation_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->confirm_transportation_id;?></td>
                        <td><?php echo $r->insurance_transportation_plan;?></td>
                        <td><?php echo $r->confirm_transportation_name_surname;?></td>
                        <td><?php echo $r->confirm_transportation_telephone;?></td>
                        <td><?php echo $r->confirm_transportation_email;?></td>
                        <td><?php echo $r->confirm_transportation_call;?></td>
                        <td><?php echo $r->confirm_transportation_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_business_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_business_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>จำนวนเงินเอาประกันภัย</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_business')
            ->orderBy('contact_business.contact_business_id', 'asc')
            ->join('insurance_business', 'contact_business.insurance_business_id', '=', 'insurance_business.insurance_business_id')
            ->where('contact_business.contact_business_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_business.contact_business_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_business_id;?></td>
                        <td><?php echo $r->insurance_business_price;?></td>
                        <td><?php echo $r->contact_business_name_surname;?></td>
                        <td><?php echo $r->contact_business_tel;?></td>
                        <td><?php echo $r->contact_business_email;?></td>
                        <td><?php echo $r->contact_business_call;?></td>
                        <td><?php echo $r->contact_business_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }

    public function contact_extended_export_excel(Request $request) {
        header("Content-Type: application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=contact_extended_".date('YmdHis').".xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);

?>
        <html>
			<head>
				<meta charset="utf-8">
			</head>
			<body>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อประกันภัย</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล์</th>
                        <th>Datetime Create</th>
                    </tr>
<?php
        $rows = DB::table('contact_extended')
            ->orderBy('contact_extended.contact_extended_id', 'asc')
            ->join('extended_insurance', 'contact_extended.insurance_extended_id', '=', 'extended_insurance.extended_insurance_id')
            ->where('contact_extended.contact_extended_datetime_create', '>=', $request->input('date_start').' 00:00:00')
            ->where('contact_extended.contact_extended_datetime_create', '<=', $request->input('date_end').' 23:59:59')
            ->get();

        if(!empty($rows)) {
            foreach($rows as $r) {
?>
                    <tr>
                        <td><?php echo $r->contact_extended_id;?></td>
                        <td><?php echo $r->extended_insurance_plan;?></td>
                        <td><?php echo $r->contact_extended_name_surname;?></td>
                        <td><?php echo $r->contact_extended_tel;?></td>
                        <td><?php echo $r->contact_extended_email;?></td>
                        <td><?php echo $r->contact_extended_call;?></td>
                        <td><?php echo $r->contact_extended_datetime_create;?></td>
                    </tr>
<?php
            }
        }
?>
                </table>
            </body>
        </html>
<?php
    }
}