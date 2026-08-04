<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;
use EveryWell\Imagination\Traits\HasImages;
use EveryWell\Imagination\Contracts\HasImages as HasImagesContract;
use Image;

use Session;

class ImportExcelController extends Controller implements HasImagesContract
{
    use HasImages;

    // import_excel_insurance_car
    public function import_excel_insurance_car(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_car/form', $data);
    }

    public function import_excel_car(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_car']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_car']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();


                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'brand_car_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['model_car_id'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['sub_model_car_id'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['year_car_id'] = $val_;
                			}

							if($j == 4) {
                				$data_excel['level_car_id'] = $val_;
                			}

							if($j == 5) {
                				$data_excel['damages_first_id'] = $val_;
                			}

							if($j == 6) {
                				$data_excel['type_repair_id'] = $val_;
                			}

							if($j == 7) {
                				$data_excel['insurance_company_id'] = $val_;
                			}

							if($j == 8) {
                				$data_excel['insurance_car_prb'] = $val_;
                			}

							if($j == 9) {
                				$data_excel['insurance_car_name'] = $val_;
                			}

							if($j == 10) {
                				$data_excel['insurance_car_text2'] = $val_;
                			}

							if($j == 11) {
                				$data_excel['insurance_car_premium_price'] = $val_;
                			}

							if($j == 12) {
                				$data_excel['insurance_car_text3'] = $val_;
                			}

							if($j == 13) {
                				$data_excel['insurance_car_lost_fire_price'] = $val_;
                			}

							if($j == 14) {
                				$data_excel['insurance_car_text4'] = $val_;
                			}

							if($j == 15) {
                				$data_excel['insurance_car_equiment_damage_price'] = $val_;
                			}

							if($j == 16) {
                				$data_excel['insurance_car_text5'] = $val_;
                			}

							if($j == 17) {
                				$data_excel['insurance_car_first_damage_price'] = $val_;
                			}

							if($j == 18) {
                				$data_excel['insurance_car_text6'] = $val_;
                			}

							if($j == 19) {
                				$data_excel['insurance_car_price'] = $val_;
                			}

							if($j == 20) {
                				$data_excel['insurance_car_text1'] = $val_;
                			}

							if($j == 21) {
                				$data_excel['insureance_car_text1_1'] = $val_;
                			}

							if($j == 22) {
                				$data_excel['insureance_car_value1_1'] = $val_;
                			}

							if($j == 23) {
                				$data_excel['insureance_car_text1_2'] = $val_;
                			}

							if($j == 24) {
                				$data_excel['insureance_car_value1_2'] = $val_;
                			}

							if($j == 25) {
                				$data_excel['insureance_car_text1_3'] = $val_;
                			}

							if($j == 26) {
                				$data_excel['insureance_car_value1_3'] = $val_;
                			}

							if($j == 27) {
                				$data_excel['insureance_car_text1_4'] = $val_;
                			}

							if($j == 28) {
                				$data_excel['insureance_car_value1_4'] = $val_;
                			}

							if($j == 29) {
                				$data_excel['insurance_car_text2'] = $val_;
                			}

                			if($j == 30) {
                				$data_excel['insureance_car_text2_1'] = $val_;
                			}

                			if($j == 31) {
                				$data_excel['insureance_car_value2_1'] = $val_;
                			}

                			if($j == 32) {
                				$data_excel['insureance_car_text2_2'] = $val_;
                			}

                			if($j == 33) {
                				$data_excel['insureance_car_value2_2'] = $val_;
                			}

                			if($j == 34) {
                				$data_excel['insurance_car_text3'] = $val_;
                			}

                            if($j == 35) {
                				$data_excel['insureance_car_text3_1'] = $val_;
                			}

                            if($j == 36) {
                				$data_excel['insureance_car_value3_1'] = $val_;
                			}
                            
                            if($j == 37) {
                				$data_excel['insureance_car_text3_2'] = $val_;
                			}

                            if($j == 38) {
                				$data_excel['insureance_car_value3_2'] = $val_;
                			}

                            if($j == 39) {
                				$data_excel['insureance_car_text3_3'] = $val_;
                			}

                            if($j == 40) {
                				$data_excel['insureance_car_value3_3'] = $val_;
                			}

                            if($j == 41) {
                				$data_excel['insurance_car_text4'] = $val_;
                			}

                            if($j == 42) {
                				$data_excel['insureance_car_text4_1'] = $val_;
                			}

                            if($j == 43) {
                				$data_excel['insureance_car_value4_1'] = $val_;
                			}

                            if($j == 44) {
                				$data_excel['insureance_car_text4_2'] = $val_;
                			}

                            if($j == 45) {
                				$data_excel['insureance_car_value4_2'] = $val_;
                			}

                            if($j == 46) {
                				$data_excel['insureance_car_text4_3'] = $val_;
                			}

							if($j == 47) {
                				$data_excel['insureance_car_value4_3'] = $val_;
                			}

							if($j == 48) {
                				$data_excel['insureance_car_text4_4'] = $val_;
                			}
                            
                            if($j == 49) {
                				$data_excel['insureance_car_value4_4'] = $val_;
                                $data_excel['insurance_car_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_car_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_car')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_car']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'car'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_car').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_car').'";</script>';
        }
    }
    // end import_excel_insurance_car

	public function ajaxClearInsuranceCar() {
		DB::table('insurance_car')
			->truncate();
	}

	// import_excel_insurance_car
    public function import_excel_insurance_health(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_health/form', $data);
    }

	public function ajaxClearInsuranceHealth() {
		DB::table('insurance_healthy')
			->truncate();
	}

    public function import_excel_health(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_health']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_health']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				// dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'type_insurance_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_healthy_name'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_healthy_age_begin'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_healthy_age_end'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_healthy_gender'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_healthy_premium_price'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_healthy_premium_start_price'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_company_id'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['insurance_healthy_special_cover'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['insurance_healthy_text1'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['insurance_healthy_text1_1'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['insurance_healthy_medical'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_healthy_text1_2'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_healthy_medical_after_return_to_thai'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['insurance_healthy_text1_3'] = $val_;
                			}

                            if($j == 15) {
                				$data_excel['insurance_healthy_emergency'] = $val_;
                			}

                            if($j == 16) {
                				$data_excel['insurance_healthy_text1_4'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_healthy_daily_compensation'] = $val_;
                			}

                            if($j == 18) {
                				$data_excel['insurance_healthy_text2'] = $val_;
                			}

                            if($j == 19) {
                				$data_excel['insurance_healthy_text2_1'] = $val_;
                			}

							if($j == 20) {
                				$data_excel['insurance_healthy_case_death'] = $val_;
                			}

							if($j == 21) {
                				$data_excel['insurance_healthy_text2_2'] = $val_;
                			}

							if($j == 22) {
                				$data_excel['insurance_healthy_cost_of_repatriating'] = $val_;
                			}

							if($j == 23) {
                				$data_excel['insurance_healthy_text3'] = $val_;
                			}

							if($j == 24) {
                				$data_excel['insurance_healthy_text3_1'] = $val_;
                			}

							if($j == 25) {
                				$data_excel['insurance_healthy_flight_delay'] = $val_;
                			}

							if($j == 26) {
                				$data_excel['insurance_healthy_text3_2'] = $val_;
                			}

							if($j == 27) {
                				$data_excel['insurance_healthy_trip_cancel'] = $val_;
                			}

							if($j == 28) {
                				$data_excel['insurance_healthy_text3_3'] = $val_;
                			}

							if($j == 29) {
                				$data_excel['insurance_healthy_mising_a_flight'] = $val_;
                			}

							if($j == 30) {
                				$data_excel['insurance_healthy_text4'] = $val_;
                			}

							if($j == 31) {
                				$data_excel['insurance_healthy_text4_1'] = $val_;
                			}

							if($j == 32) {
                				$data_excel['insurance_healthy_lost_items'] = $val_;
                			}

							if($j == 33) {
                				$data_excel['insurance_healthy_text4_2'] = $val_;
                			}

							if($j == 34) {
                				$data_excel['insurance_healthy_stolen_cash'] = $val_;
                			}

							if($j == 35) {
                				$data_excel['insurance_healthy_text4_3'] = $val_;
                			}

							if($j == 36) {
                				$data_excel['insurance_healthy_travel_document'] = $val_;
                			}

							if($j == 37) {
                				$data_excel['insurance_healthy_text4_4'] = $val_;
							}

							if($j == 38) {
								$data_excel['insurance_healthy_pc_notebook'] = $val_;
                                $data_excel['insurance_healthy_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_healthy_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_healthy')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_health']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'health'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_health').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_health').'";</script>';
        }
    }
    // end import_excel_insurance_car

	// import_excel_prb
    public function import_excel_insurance_prb(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_prb/form', $data);
    }

    public function import_excel_prb(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_prb']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_prb']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'prb_name' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['prb_name2'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['prb_name3'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['prb_price'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['prb_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['prb_text1_1'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['prb_medical_expenses_price1'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['prb_text1_2'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['prb_died_price1'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['prb_text2'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['prb_text2_1'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['prb_medical_expenses_price2'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['prb_text2_2'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['prb_died_price2'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['prb_text2_3'] = $val_;
                			}

                            if($j == 15) {
                				$data_excel['prb_dismemberment_price'] = $val_;
                			}

                            if($j == 16) {
                				$data_excel['prb_text2_4'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['prb_daily_compensation_price'] = $val_;
                			    $data_excel['prb_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['prb_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('prb')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_prb']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'prb'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_prb').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_prb').'";</script>';
        }
    }

	public function ajaxClearInsurancePrb() {
		DB::table('prb')
			->truncate();
	}
    // end import_excel_insurance_prb

	// import_excel_travel
    public function import_excel_insurance_travel(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_travel/form', $data);
    }

    public function import_excel_travel(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_travel']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_travel']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'insurance_travel_row_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_travel_name'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_travel_plan'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_travel_premium_price'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_travel_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_travel_accident'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_travel_text_2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_travel_sick'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['insurance_travel_text_3'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['insurance_travel_vaccine'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['insurance_travel_text_4'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['insurance_travel_deposit'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_travel_text_5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_travel_external'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['insurance_travel_text_6'] = $val_;
                			}

							if($j == 15) {
                				$data_excel['insurance_travel_injury'] = $val_;
                			}

							if($j == 16) {
                				$data_excel['insurance_travel_text_7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_travel_property'] = $val_;
                			    $data_excel['insurance_travel_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_travel_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_travel')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_travel']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'travel'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_travel').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_travel').'";</script>';
        }
    }

	public function ajaxClearInsuranceTravel() {
		DB::table('insurance_travel')
			->truncate();
	}
    // end import_excel_insurance_travel

	// import_excel_pet
    public function import_excel_insurance_pet(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_pet/form', $data);
    }

    public function import_excel_pet(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_pet']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_pet']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'insurance_pet_row_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_pet_name'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_pet_plan'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_pet_premium_price'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_pet_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_pet_accident'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_pet_text2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_pet_sick'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['insurance_pet_text3'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['insurance_pet_vaccine'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['insurance_pet_text4'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['insurance_pet_deposit'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_pet_text5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_pet_injured'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['insurance_pet_text6'] = $val_;
                			}

							if($j == 15) {
                				$data_excel['insurance_pet_funeral'] = $val_;
                			}

							if($j == 16) {
                				$data_excel['insurance_pet_text7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_pet_property'] = $val_;
                			    $data_excel['insurance_pet_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_pet_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_pet')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_pet']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'pet'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_pet').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_pet').'";</script>';
        }
    }

	public function ajaxClearInsurancePet() {
		DB::table('insurance_pet')
			->truncate();
	}
    // end import_excel_insurance_pet

	// import_excel_home
    public function import_excel_insurance_home(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_home/form', $data);
    }

    public function import_excel_home(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_home']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_home']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'insurance_home_row_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_home_name'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_home_plan'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_home_premium_price'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_home_text_1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_home_accident'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_home_text_2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_home_sick'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['insurance_home_text_3'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['insurance_home_vaccine'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['insurance_home_text_4'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['insurance_home_deposit'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_home_text_5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_home_external'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['insurance_home_text_6'] = $val_;
                			}

							if($j == 15) {
                				$data_excel['insurance_home_injury'] = $val_;
                			}

							if($j == 16) {
                				$data_excel['insurance_home_text_7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_home_property'] = $val_;
                			    $data_excel['insurance_home_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_home_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_home')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_home']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'home'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_home').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_home').'";</script>';
        }
    }

	public function ajaxClearInsuranceHome() {
		DB::table('insurance_home')
			->truncate();
	}
    // end import_excel_insurance_home

	// import_excel_condo
    public function import_excel_insurance_condo(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_condo/form', $data);
    }

    public function import_excel_condo(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_condo']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_condo']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'insurance_condo_row_id' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_condo_name'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_condo_plan'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_condo_premium_price'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_condo_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_condo_accident'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_condo_text2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_condo_sick'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['insurance_condo_text3'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['insurance_condo_vaccine'] = $val_;
                			}

                            if($j == 10) {
                				$data_excel['insurance_condo_text4'] = $val_;
                			}
                            
                            if($j == 11) {
                				$data_excel['insurance_condo_deposit'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_condo_text5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_condo_injured'] = $val_;
                			}

                            if($j == 14) {
                				$data_excel['insurance_condo_text6'] = $val_;
                			}

							if($j == 15) {
                				$data_excel['insurance_condo_funeral'] = $val_;
                			}

							if($j == 16) {
                				$data_excel['insurance_condo_text7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_condo_property'] = $val_;
                			    $data_excel['insurance_condo_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_condo_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_condo')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_condo']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'condo'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_condo').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_condo').'";</script>';
        }
    }

	public function ajaxClearInsuranceCondo() {
		DB::table('insurance_condo')
			->truncate();
	}

	public function ajaxClearInsuranceCancer() {
		DB::table('insurance_cancer')
			->truncate();
	}

	public function ajaxClearInsuranceAccident() {
		DB::table('insurance_accident')
			->truncate();
	}
    // end import_excel_insurance_condo

	// import_excel_extended
    public function import_excel_insurance_extended(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_extended/form', $data);
    }

    public function import_excel_extended(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_extended']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_extended']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'extended_insurance_plan' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['extended_insurance_premium_price'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['extended_insurance_text_1'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['extended_insurance_fire'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['extended_insurance_text_2'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['extended_insurance_money_salary'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['extended_insurance_text_3'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['extended_insurance_text_4'] = $val_;
                			}

                			if($j == 8) {
                				$data_excel['extended_insurance_money'] = $val_;
                			}

                            if($j == 9) {
                				$data_excel['extended_insurance_text_5'] = $val_;
                			}
                            
                            if($j == 10) {
                				$data_excel['extended_insurance_die'] = $val_;
                			    $data_excel['extended_insurance_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['extended_insurance_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('extended_insurance')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_extended']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'extended'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_extended').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_extended').'";</script>';
        }
    }

	public function ajaxClearInsuranceExtended() {
		DB::table('extended_insurance')
			->truncate();
	}
    // end import_excel_insurance_extended

	// import_excel_business
    public function import_excel_insurance_business(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_business/form', $data);
    }

    public function import_excel_business(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_business']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_business']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();

				//dd($data);

                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
                					'insurance_business_price' => $val_
                				);
                			}

                			if($j == 1) {
                				$data_excel['insurance_business_price_per_year'] = $val_;
                			}

                			if($j == 2) {
                				$data_excel['insurance_business_text_1'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_business_fire'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_business_text_2'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_business_money_salary'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_business_text_3'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_business_money'] = $val_;
                			}

							if($j == 8) {
                				$data_excel['insurance_business_text_4'] = $val_;
                			}

                			if($j == 9) {
                				$data_excel['insurance_business_die'] = $val_;
                			    $data_excel['insurance_business_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_business_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_business')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_business']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'business'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_business').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_business').'";</script>';
        }
    }

	public function ajaxClearInsuranceBusiness() {
		DB::table('insurance_business')
			->truncate();
	}

	public function ajaxClearInsuranceTransportation() {
		DB::table('insurance_transportation')
			->truncate();
	}
    // end import_excel_insurance_condo

	// import_excel_insurance_accident
    public function import_excel_insurance_accident(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_accident/form', $data);
    }

    public function import_excel_accident(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_accident']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_accident']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();


                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
									'insurance_company_id' => $val_
                				);
                			}

							if($j == 1) {
                				$data_excel['insurance_accident_plan'] = $val_;
                			}

							if($j == 2) {
                				$data_excel['insurance_accident_price'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_accident_row'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_accident_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_accident_1'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_accident_text2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_accident_2'] = $val_;
                			}

							if($j == 8) {
                				$data_excel['insurance_accident_text3'] = $val_;
                			}

                			if($j == 9) {
                				$data_excel['insurance_accident_3'] = $val_;
                			}

                			if($j == 10) {
                				$data_excel['insurance_accident_text4'] = $val_;
                			}

                			if($j == 11) {
                				$data_excel['insurance_accident_4'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_accident_text5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_accident_5'] = $val_;
                			}
                            
                            if($j == 14) {
                				$data_excel['insurance_accident_text6'] = $val_;
                			}

                            if($j == 15) {
                				$data_excel['insurance_accident_6'] = $val_;
                			}

                            if($j == 16) {
                				$data_excel['insurance_accident_text7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_accident_7'] = $val_;
                                $data_excel['insurance_accident_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_accident_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_accident')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_accident']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'accident'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_accident').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_accident').'";</script>';
        }
    }
    // end import_excel_insurance_accident

	// import_excel_insurance_cancer
    public function import_excel_insurance_cancer(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_cancer/form', $data);
    }

    public function import_excel_cancer(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_cancer']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_cancer']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();


                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
									'insurance_company_id' => $val_
                				);
                			}

							if($j == 1) {
                				$data_excel['insurance_cancer_plan'] = $val_;
                			}

							if($j == 2) {
                				$data_excel['insurance_cancer_price'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_cancer_row'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_cancer_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_cancer_1'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_cancer_text2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_cancer_2'] = $val_;
                			}

							if($j == 8) {
                				$data_excel['insurance_cancer_text3'] = $val_;
                			}

                			if($j == 9) {
                				$data_excel['insurance_cancer_3'] = $val_;
                			}

                			if($j == 10) {
                				$data_excel['insurance_cancer_text4'] = $val_;
                			}

                			if($j == 11) {
                				$data_excel['insurance_cancer_4'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_cancer_text5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_cancer_5'] = $val_;
                			}
                            
                            if($j == 14) {
                				$data_excel['insurance_cancer_text6'] = $val_;
                			}

                            if($j == 15) {
                				$data_excel['insurance_cancer_6'] = $val_;
                			}

                            if($j == 16) {
                				$data_excel['insurance_cancer_text7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_cancer_7'] = $val_;
                                $data_excel['insurance_cancer_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_cancer_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_cancer')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_cancer']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'cancer'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_cancer').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_cancer').'";</script>';
        }
    }
    // end import_excel_insurance_cancer

	// import_excel_insurance_transportation
    public function import_excel_insurance_transportation(Request $request) {
        $data['test'] = 'Test';

        return view('backend/import_excel_insurance_transportation/form', $data);
    }

    public function import_excel_transportation(Request $request) {
        // upload file
        $file_parts = pathinfo($_FILES['import_excel_insurance_transportation']['name']);

        if($file_parts['extension'] == 'xlsx') {
            $xlsx_name = date('YmdHis').'.xlsx';
            
            if(move_uploaded_file($_FILES['import_excel_insurance_transportation']['tmp_name'], public_path('uploads/import_excel/'.$xlsx_name))) {

                $data = array(
                    'import_excel_product' => $xlsx_name,
                    'import_excel_datetime_create' => date('Y-m-d H:i:s')
                );

                DB::table('import_excel')
                    ->insert($data);

                // echo 'Import Excel Processing :: '.$xlsx_name;

                require base_path('vendor/autoload.php');

                header('Content-Type: text/html; charset=utf-8');

                // # Create a new Xls Reader
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

                // Tell the reader to only read the data. Ignore formatting etc.
                $reader->setReadDataOnly(true);

                // Read the spreadsheet file.
                $spreadsheet = $reader->load(base_path('public/uploads/import_excel/'.$xlsx_name));

                $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
                $data = $sheet->toArray();


                $i = 0;
                foreach($data as $val) {
                	if($i > 0) {
                		$j = 0;
                		foreach($val as $val_) {
                			//echo $j.$val_.' ';
                			if($j == 0) {
                				$data_excel = array(
									'insurance_company_id' => $val_
                				);
                			}

							if($j == 1) {
                				$data_excel['insurance_transportation_plan'] = $val_;
                			}

							if($j == 2) {
                				$data_excel['insurance_transportation_price'] = $val_;
                			}

                			if($j == 3) {
                				$data_excel['insurance_transportation_row'] = $val_;
                			}

                			if($j == 4) {
                				$data_excel['insurance_transportation_text1'] = $val_;
                			}

                			if($j == 5) {
                				$data_excel['insurance_transportation_1'] = $val_;
                			}

                			if($j == 6) {
                				$data_excel['insurance_transportation_text2'] = $val_;
                			}

                			if($j == 7) {
                				$data_excel['insurance_transportation_2'] = $val_;
                			}

							if($j == 8) {
                				$data_excel['insurance_transportation_text3'] = $val_;
                			}

                			if($j == 9) {
                				$data_excel['insurance_transportation_3'] = $val_;
                			}

                			if($j == 10) {
                				$data_excel['insurance_transportation_text4'] = $val_;
                			}

                			if($j == 11) {
                				$data_excel['insurance_transportation_4'] = $val_;
                			}

                            if($j == 12) {
                				$data_excel['insurance_transportation_text5'] = $val_;
                			}

                            if($j == 13) {
                				$data_excel['insurance_transportation_5'] = $val_;
                			}
                            
                            if($j == 14) {
                				$data_excel['insurance_transportation_text6'] = $val_;
                			}

                            if($j == 15) {
                				$data_excel['insurance_transportation_6'] = $val_;
                			}

                            if($j == 16) {
                				$data_excel['insurance_transportation_text7'] = $val_;
                			}

                            if($j == 17) {
                				$data_excel['insurance_transportation_7'] = $val_;
                                $data_excel['insurance_transportation_datetime_create'] = date('Y-m-d H:i:s');
                                $data_excel['insurance_transportation_datetime_update'] = date('Y-m-d H:i:s');

                                DB::table('insurance_transportation')
                                    ->insert($data_excel);
                			}

                			$j++;
                		}

                		echo '<br>';
                	}

                	$i++;
                }

				$username = DB::table('user')
					->where('user_id', '=', Session::get('user_id'))
					->first();

				if(!empty($username)) {
					$data_log = array(
						'log_import_excel_file_name' => $_FILES['import_excel_insurance_transportation']['name'],
						'log_import_excel_datetime_create' => date('Y-m-d H:i:s'),
						'log_import_excel_user' => $username->user_username,
						'log_import_excel_insurance' => 'transportation'
					);

					DB::table('log_import_excel')
						->insert($data_log);
				}
            }

            echo '<script>alert("Import Excel Success");window.location.href="'.url('backend/import_excel_insurance_transportation').'";</script>';
        } else {
            echo '<script>alert("นามสกุลไฟล์ต้องเป็น .xlsx เท่านั้น");window.location.href="'.url('backend/import_excel_insurance_transportation').'";</script>';
        }
    }
    // end import_excel_insurance_transportation
}