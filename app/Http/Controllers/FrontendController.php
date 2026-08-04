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
use PDF;

use Session;

class FrontendController extends Controller implements HasImagesContract
{
    use HasImages;

    public function index(Request $request) {
        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        $data['model_car'] = DB::table('model_car')
            ->orderBy('model_car_id', 'asc')
            ->get();

        $data['year_car'] = DB::table('year_car')
            ->orderBy('year_car_id', 'asc')
            ->get();

        $data['promotion'] = DB::table('promotion')
            ->orderBy('promotion_id', 'desc')
            ->get(); 
            
        $data['banner_slide'] = DB::table('banner_slide')
            ->orderBy('banner_slide_id', 'desc')
            ->get();

        $data['insurance_company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        $data['news_and_article'] = DB::table('news_and_article')
            ->orderBy('news_and_article_id', 'desc')
            ->get();

        $data['type'] = DB::table('type_insurance')
            ->orderBy('type_insurance_id', 'asc')
            ->get();

        return view('frontend/index', $data);
    }

    public function about(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/about', $data);
    }

    public function car_insurance_landing(Request $request) {
        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        $data['model_car'] = DB::table('model_car')
            ->orderBy('model_car_id', 'asc')
            ->get();

        $data['sub_model_car'] = DB::table('sub_model_car')
            ->orderBy('sub_model_car_id', 'asc')
            ->get();

        $data['year_car'] = DB::table('year_car')
            ->orderBy('year_car_id', 'asc')
            ->get();

        $data['level_car'] = DB::table('level_car')
            ->orderBy('level_car_id', 'asc')
            ->get();

        $data['faq'] = DB::table('car_faq')
            ->orderBy('car_faq_id', 'asc')
            ->get();

        $data['insurance_company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        $data['table'] = DB::table('car_table_insurance')
            ->where('car_table_insurance_id', '=', 1)
            ->first();

        $data['province'] = DB::table('provinces')
            ->orderBy('name_in_thai', 'asc')
            ->get();

        return view('frontend/car_insurance_landing', $data);
    }

    public function car_insurance(Request $request) {
        $data['txt_brand_car'] = DB::table('brand_car')
            ->where('brand_car_id', '=', $request->input('brand_car'))
            ->first();

        $data['txt_model_car'] = DB::table('model_car')
            ->where('model_car_id', '=', $request->input('model_car'))
            ->first();

        $data['txt_year_car'] = DB::table('year_car')
            ->where('year_car_id', '=', $request->input('year_car'))
            ->first();


        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        $data['model_car'] = DB::table('model_car')
            ->orderBy('model_car_id', 'asc')
            ->get();

        $data['sub_model_car'] = DB::table('sub_model_car')
            ->orderBy('sub_model_car_id', 'asc')
            ->get();

        $data['year_car'] = DB::table('year_car')
            ->orderBy('year_car_id', 'asc')
            ->get();

        $data['level_car_inc'] = DB::table('level_car')
            ->orderBy('level_car_id', 'asc')
            ->get();

        $data['damages_first_inc'] = DB::table('damages_first')
            ->orderBy('damages_first_id', 'asc')
            ->get();

        $data['type_repair_inc'] = DB::table('type_repair')
            ->orderBy('type_repair_id', 'asc')
            ->get();

        $data['insurance_company_inc'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        // dd($_POST);
            
        $data['insurance_car'] = DB::table('insurance_car');

        if(!empty($request->input('brand_car'))) {
            $data['insurance_car']->where('brand_car_id', '=', $request->input('brand_car'));
        }

        if(!empty($request->input('model_car'))) {
            $data['insurance_car']->where('model_car_id', '=', $request->input('model_car'));
        }

        if(!empty($request->input('sub_model_car'))) {
            $data['insurance_car']->where('sub_model_car_id', '=', $request->input('sub_model_car'));
        }

        if(!empty($request->input('year_car'))) {
            $data['insurance_car']->where('year_car_id', '=', $request->input('year_car'));
        }

        if(!empty($request->input('level_car'))) {
            $data['insurance_car']->where('level_car_id', '=', $request->input('level_car'));
        }

        if(!empty($request->input('insurance_car_register_province'))) {
            $data['insurance_car']->where('insurance_car_register_province', '=', $request->input('insurance_car_register_province'));
        }
        
        $data['insurance_car'] = $data['insurance_car']->orderBy('insurance_car.insurance_car_id', 'asc')
            ->get();

        $data['count_insurance_car'] = count($data['insurance_car']);

        return view('frontend/car_insurance', $data);
    }

    public function ajaxSendFormCancer(Request $request) {
        $data_post = array(
            'insurance_cancer_id' => $request->input('insurance_cancer_id'),
            'contact_cancer_name_surname' => $request->input('contact_cancer_name_surname'),
            'contact_cancer_telephone' => $request->input('contact_cancer_telephone'),
            'contact_cancer_email' => $request->input('contact_cancer_email'),
            'contact_cancer_call' => $request->input('contact_cancer_call'),
            'contact_cancer_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_cancer')
            ->insert($data_post);
    }

    public function ajaxSendFormTransportation(Request $request) {
        $data_post = array(
            'insurance_transportation_id' => $request->input('insurance_transportation_id'),
            'contact_transportation_name_surname' => $request->input('contact_transportation_name_surname'),
            'contact_transportation_telephone' => $request->input('contact_transportation_telephone'),
            'contact_transportation_email' => $request->input('contact_transportation_email'),
            'contact_transportation_call' => $request->input('contact_transportation_call'),
            'contact_transportation_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_transportation')
            ->insert($data_post);
    }

    public function ajaxSendFormAccident(Request $request) {
        $data_post = array(
            'insurance_accident_id' => $request->input('insurance_accident_id'),
            'contact_accident_name_surname' => $request->input('contact_accident_name_surname'),
            'contact_accident_telephone' => $request->input('contact_accident_telephone'),
            'contact_accident_email' => $request->input('contact_accident_email'),
            'contact_accident_call' => $request->input('contact_accident_call'),
            'contact_accident_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_accident')
            ->insert($data_post);
    }

    public function compulsory(Request $request) {
        $data['faq'] = DB::table('prb_faq')
            ->orderBy('prb_faq_id', 'asc')
            ->get();

        $data['prb'] = DB::table('prb')
            ->orderBy('prb_id', 'asc')
            ->get();

        $data['prb_pdf'] = DB::table('prb_pdf')
            ->where('prb_pdf_id', '=', 1)
            ->first();

        return view('frontend/compulsory', $data);
    }

    public function contact(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/contact', $data);
    }

    public function golf_insurance(Request $request) {
        $data['row'] = DB::table('insurance_golf')
            ->where('insurance_golf_id', '=', 1)
            ->first();

        $data['faq'] = DB::table('golf_faq')
            ->orderBy('golf_faq_id', 'asc')
            ->get();

        return view('frontend/golf_insurance', $data);
    }

    public function ajaxConfirmAccident(Request $request) {
        $data = array(
            'insurance_accident_id' => $request->input('insurance_accident_id'),
            'confirm_accident_name_surname' => $request->input('confirm_accident_name_surname'),
            'confirm_accident_telephone' => $request->input('confirm_accident_telephone'),
            'confirm_accident_email' => $request->input('confirm_accident_email'),
            'confirm_accident_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('confirm_accident')
            ->insert($data);
    }

    public function ajaxDetailTransportation(Request $request) {
        $data = array(
            'insurance_transportation_id' => $request->input('insurance_transportation_id'),
            'detail_transportation_name_surname' => $request->input('detail_transportation_name_surname'),
            'detail_transportation_telephone' => $request->input('detail_transportation_telephone'),
            'detail_transportation_email' => $request->input('detail_transportation_email'),
            'detail_transportation_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('detail_transportation')
            ->insert($data);
    }

    public function ajaxConfirmAccident2(Request $request) {
        $data = array(
            'insurance_accident_id' => $request->input('insurance_accident_id'),
            'confirm_accident2_name_surname' => $request->input('confirm_accident2_name_surname'),
            'confirm_accident2_telephone' => $request->input('confirm_accident2_telephone'),
            'confirm_accident2_email' => $request->input('confirm_accident2_email'),
            'confirm_accident2_call' => $request->input('confirm_accident2_call'),
            'confirm_accident2_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('confirm_accident2')
            ->insert($data);
    }

    public function health_insurance_landing(Request $request) {
        $data['faq'] = DB::table('healthy_faq')
            ->orderBy('healthy_faq_id', 'asc')
            ->get();

        $data['type'] = DB::table('type_insurance')
            ->orderBy('type_insurance_id', 'asc')
            ->get();

        return view('frontend/health_insurance_landing', $data);
    }

    public function health_insurance(Request $request) {
        // if (request()->getMethod() == 'POST') {
        //     $rules = ['captcha' => 'required|captcha'];
        //     $validator = validator()->make(request()->all(), $rules);
        //     if ($validator->fails()) {
        //         echo '<p style="color: #ff0000;">Incorrect!</p>';
        //     } else {
        //         echo '<p style="color: #00ff30;">Matched :)</p>';
        //     }
        // }
        
        $data['insurance_healthy'] = DB::table('insurance_healthy');

        if(!empty($request->input('insurance_healthy_age'))) {
            $data['insurance_healthy']->where('insurance_healthy_age_begin', '<=', $request->input('insurance_healthy_age'))
            ->where('insurance_healthy_age_end', '>=', $request->input('insurance_healthy_age'));
        }

        if(!empty($request->input('insurance_healthy_gender'))) {
            $data['insurance_healthy']->where('insurance_healthy_gender', '=', $request->input('insurance_healthy_gender'));
        }

        if(!empty($request->input('type_insurance_id'))) {
            $data['insurance_healthy']->where('type_insurance_id', '=', $request->input('type_insurance_id'));
        }
            
        $data['insurance_healthy'] = $data['insurance_healthy']->join('insurance_company', 'insurance_healthy.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->orderBy('insurance_healthy.insurance_healthy_id', 'asc')
            ->get();

        $data['count_insurance_healthy'] = count($data['insurance_healthy']);

        $data['insurance_company_inc'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        $data['type_insurance_inc'] = DB::table('type_insurance')
            ->orderBy('type_insurance_id', 'asc')
            ->get();

        return view('frontend/health_insurance', $data);
    }

    public function home_insurance(Request $request) {
        $data['faq'] = DB::table('home_faq')
            ->orderBy('home_faq_id', 'asc')
            ->get();

        $data['insurance'] = DB::table('insurance_home')
            ->orderBy('insurance_home_id', 'asc')
            ->get();

        return view('frontend/home_insurance', $data);
    }

    public function news_detail(Request $request, $news_and_article_id) {
        $data['row'] = DB::table('news_and_article')
            ->where('news_and_article_id', '=', $news_and_article_id)
            ->first();

        $data['news_and_article'] = DB::table('news_and_article')
            ->orderBy('news_and_article_id', 'desc')
            ->where('news_and_article_id', '!=', $news_and_article_id)
            ->get();

        return view('frontend/news_detail', $data);
    }

    public function news(Request $request) {
        $data['news_and_article'] = DB::table('news_and_article')
            ->orderBy('news_and_article_id', 'desc')
            ->paginate(6);

        return view('frontend/news', $data);
    }

    public function pdf_healthy(Request $request, $insurance_healthy_id) {
        $data['row'] = DB::table('insurance_healthy')
            ->where('insurance_healthy_id', $insurance_healthy_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_healthy', $data);

        return @$pdf->stream();
    }

    public function pdf_accident(Request $request, $insurance_accident_id) {
        $data['row'] = DB::table('insurance_accident')
            ->where('insurance_accident_id', $insurance_accident_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_accident', $data);

        return @$pdf->stream();
    }

    public function pdf_transportation(Request $request, $insurance_transportation_id) {
        $data['row'] = DB::table('insurance_transportation')
            ->where('insurance_transportation_id', $insurance_transportation_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_transportation', $data);

        return @$pdf->stream();
    }

    public function pdf_cancer(Request $request, $insurance_cancer_id) {
        $data['row'] = DB::table('insurance_cancer')
            ->where('insurance_cancer_id', $insurance_cancer_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_cancer', $data);

        return @$pdf->stream();
    }

    public function pdf_car(Request $request, $insurance_car_id) {
        $data['row'] = DB::table('insurance_car')
            ->where('insurance_car_id', $insurance_car_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_car', $data);

        return @$pdf->stream();
    }

    public function pdf_travel(Request $request, $insurance_travel_id) {
        $data['row'] = DB::table('insurance_travel')
            ->where('insurance_travel_id', $insurance_travel_id)
            ->first();

        $pdf = PDF::loadView('frontend/pdf_travel', $data);

        return @$pdf->stream();
    }

    public function pet_insurance(Request $request) {
        $data['faq'] = DB::table('pet_faq')
            ->orderBy('pet_faq_id', 'asc')
            ->get();

        $data['rows'] = DB::table('insurance_pet_row')
            ->orderBy('insurance_pet_row_id', 'asc')
            ->get();

        $data['insurance_pet'] = DB::table('insurance_pet')
            ->orderBy('insurance_pet_id', 'asc')
            ->get();

        return view('frontend/pet_insurance', $data);
    }

    public function promotion(Request $request) {
        $data['promotion'] = DB::table('promotion')
            ->orderBy('promotion_id', 'desc')
            ->paginate(8);

        return view('frontend/promotion', $data);
    }

    public function promotion_detail(Request $request, $promotion_id) {
        $data['row'] = DB::table('promotion')
            ->where('promotion_id', $promotion_id)
            ->first();

        if(!empty($data['row'])) {
            $data['promotion'] = DB::table('promotion')
                ->where('promotion_id', '!=', $promotion_id)
                ->get();
        }

        return view('frontend/promotion_detail', $data);
    }

    public function terms_cookies(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/terms_cookies', $data);
    }

    public function terms_policy(Request $request) {
        $data['test'] = 'Test';

        return view('frontend/terms_policy', $data);
    }

    public function travel_insurance(Request $request) {
        $data['faq'] = DB::table('travel_faq')
            ->orderBy('travel_faq_id', 'asc')
            ->get();

        $data['rows'] = DB::table('insurance_travel_row')
            ->orderBy('insurance_travel_row_id', 'asc')
            ->get();

        $data['insurance'] = DB::table('insurance_travel')
            ->orderBy('insurance_travel_id', 'asc')
            ->get();

        return view('frontend/travel_insurance', $data);
    }

    public function saveUpdateContactUsForm(Request $request) {
        $datetime_exp = explode('/', $request->input('contact_us_form_datetime_contact'));

        $datetime_contact = $datetime_exp[0].'-'.$datetime_exp[1].'-'.$datetime_exp[2];

        $data_post = array(
            'contact_us_form_name_surname' => $request->input('contact_us_form_name_surname'),
            'contact_us_form_tel' => $request->input('contact_us_form_tel'),
            'contact_us_form_email' => $request->input('contact_us_form_email'),
            'contact_us_form_datetime_contact' => $datetime_contact,
            'contact_us_form_detail' => $request->input('contact_us_form_detail'), 
            'contact_us_form_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_us_form')
            ->insert($data_post);

        echo '<script>alert("ส่งแบบฟอร์มนัดหมายเสร็จเรียบร้อย");window.location.href="'.url('index').'";</script>';    
    }

    public function ajaxConfirmTransportation(Request $request) {
        $data_post = array(
            'insurance_transportation_id' => $request->input('insurance_transportation_id'),
            'confirm_transportation_name_surname' => $request->input('confirm_transportation_name_surname'),
            'confirm_transportation_telephone' => $request->input('confirm_transportation_telephone'),
            'confirm_transportation_email' => $request->input('confirm_transportation_email'),
            'confirm_transportation_call' => $request->input('confirm_transportation_call'),
            'confirm_transportation_datetime_create' => date('Y-m-d H:i:s'),
        );

        DB::table('confirm_transportation')
            ->insert($data_post);
    }

    public function ajaxSaveDataInsuranceHealth(Request $request) {
        $data_post = array(
            'insurance_healthy_id' => $request->input('insurance_healthy_id'),
            'healthy_contact_name_surname' => $request->input('healthy_contact_name_surname'),
            'healthy_contact_telephone' => $request->input('healthy_contact_telephone'),
            'healthy_contact_email' => $request->input('healthy_contact_email'),
            'healthy_contact_datetime_create' => date('Y-m-d H:i:s'),
        );

        DB::table('healthy_contact')
            ->insert($data_post);
    }

    public function ajaxSaveDataInsuranceHealthConfirm(Request $request) {
        $data_post = array(
            'insurance_healthy_id' => $request->input('insurance_healthy_id'),
            'healthy_contact_confirm_name_surname' => $request->input('healthy_contact_confirm_name_surname'),
            'healthy_contact_confirm_telephone' => $request->input('healthy_contact_confirm_telephone'),
            'healthy_contact_confirm_email' => $request->input('healthy_contact_confirm_email'),
            'healthy_contact_confirm_call' => $request->input('healthy_contact_confirm_call'),
            'healthy_contact_confirm_datetime_create' => date('Y-m-d H:i:s'),
        );

        DB::table('healthy_contact_confirm')
            ->insert($data_post);
    }

    public function saveGolfContact(Request $request) {
        $data_post = array(
            'golf_contact_name_surname' => $request->input('golf_contact_name_surname'),
            'golf_contact_telephone' => $request->input('golf_contact_telephone'),
            'golf_contact_email' => $request->input('golf_contact_email'),
            'golf_contact_call' => $request->input('golf_contact_call'),
            'golf_contact_datetime_create' => date('Y-m-d H:i:s'),
        );

        DB::table('golf_contact')
            ->insert($data_post);

        echo '<script>alert("Save Data Success");window.location.href="'.url('golf_insurance').'";</script>';
    }

    public function saveMember(Request $request) {
        // Gen รหัสสมาชิก

        $member_code = DB::table('member')
            ->where('member_code', 'like', date('Ymd').'%')
            ->orderBy('member_id', 'desc')
            ->first();

        if(!empty($member_code)) {
            if(substr($member_code->member_code, 8, 3) == '000') {
                $auto_run = substr($member_code->member_code, 11, 1);
            } elseif(substr($member_code->member_code, 8, 2) == '00') {
                $auto_run = substr($member_code->member_code, 10, 2);
            } elseif(substr($member_code->member_code, 8, 1) == '0') {
                $auto_run = substr($member_code->member_code, 9, 3);
            }

            $auto_run++;

            $len = strlen($auto_run);

            if($len == 1) {
                $member_code_ = date('Ymd').'000'.$auto_run;
            } elseif($len == 2) {
                $member_code_ = date('Ymd').'00'.$auto_run;
            } elseif($len == 3) {
                $member_code_ = date('Ymd').'0'.$auto_run;
            } elseif($len == 4) {
                $member_code_ = date('Ymd').$auto_run;
            }
        } else {
            $member_code_ = date('Ymd').'0001';
        }

        $data_auto_run = array(
            'member_code' => $member_code_,
            'member_name_surname' => $request->input('inc_member_name_surname'),
            'member_tel' => $request->input('inc_member_tel'),
            'member_email' => $request->input('inc_member_email'),
            'member_password' => $request->input('inc_member_password'),
            'member_address' => $request->input('inc_member_address'),
        );

        DB::table('member')
            ->insert($data_auto_run);

        return redirect('index');
    }

    public function ajaxSaveContactHealth(Request $request) {
        $data = array(
            'insurance_healthy_id' => $request->input('insurance_healthy_id'),
            'healthy_contact_name_surname' => $request->input('healthy_contact_name_surname'),
            'healthy_contact_telephone' => $request->input('healthy_contact_telephone'),
            'healthy_contact_email' => $request->input('healthy_contact_email'),
            'healthy_contact_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('healthy_contact')
            ->insert($data);
    }

    public function ajaxConfirmCancer(Request $request) {
        $data = array(
            'insurance_cancer_id' => $request->input('insurance_cancer_id'),
            'confirm_cancer_name_surname' => $request->input('confirm_cancer_name_surname'),
            'confirm_cancer_telephone' => $request->input('confirm_cancer_telephone'),
            'confirm_cancer_email' => $request->input('confirm_cancer_email'),
            'confirm_cancer_call' => $request->input('confirm_cancer_call'),
            'confirm_cancer_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('confirm_cancer')
            ->insert($data);
    }

    public function login(Request $request) {
        $login = DB::table('member')
            ->where('member_email', '=', $request->input('inc_member_email2'))
            ->where('member_password', '=', $request->input('inc_member_password2'))
            ->first();

        if(!empty($login)) {
            $request->session()->put('member_id', $login->member_id);

            return redirect('acct_page');
        } else {
            echo '<script>alert("อีเมล์หรือรหัสผ่านไม่ถูกต้อง");window.location.href="'.url('index').'";</script>';
        }
    }

    public function test_captcha_google() {
?>
        <!doctype html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Google reCAPTCHA</title>
        <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
        </head>
        
        <body>
        <form name="form1" method="post" action="send.php">
        <div>Message:  </div>
        <div>
            <textarea name="msg" cols="50" rows="3" id="msg"></textarea>
        </div>
        <script>
        function makeaction(){
                document.getElementById('btn_submit').disabled = false;  
        }
        </script>
        <div class="g-recaptcha" data-callback="makeaction" data-sitekey="6Ldr1cwjAAAAAHIPRbVgS3ZWNbl0TMPT2-rM9Qpk"></div>
        <div>
        <br>
            <button type="submit" id="btn_submit" name="btn_submit" disabled>Send Message</button>
        </div>
        </form>
        </body>
        </html>
<?php
    }

    public function ajaxFilterHealthy(Request $request) {
        if($request->input('check_insurance') == true) {
            $insurance_healthy = DB::table('insurance_healthy')
                ->join('insurance_company', 'insurance_healthy.insurance_company_id', '=', 'insurance_company.insurance_company_id')
                ->where('insurance_healthy_premium_price', '>=', $request->input('price_min'))
                ->where('insurance_healthy_premium_price', '<=', $request->input('price_max'))
                ->get();
        } else {
            $insurance_healthy = DB::table('insurance_healthy');

            if(!empty($request->input('search_health'))) {
                $insurance_healthy->where('insurance_company.insurance_company_name', 'like', 
                '%'.$request->input('search_health').'%');
            }

            if(!empty($request->input('type_insurance'))) {
                $insurance_healthy->whereIn('insurance_healthy.type_insurance_id', $request->input('type_insurance'));
            }
            
            if(!empty($request->input('insurance_company'))) {
                $insurance_healthy->whereIn('insurance_healthy.insurance_company_id', $request->input('insurance_company'));
            }

            if(!empty($request->input('order_by'))) {
                if($request->input('order_by') == 'price_asc') {
                    $insurance_healthy->orderBy('insurance_healthy.insurance_healthy_premium_start_price', 'asc');
                } elseif($request->input('order_by') == 'price_desc') {
                    $insurance_healthy->orderBy('insurance_healthy.insurance_healthy_premium_start_price', 'desc');
                }
            }

            if(!empty($request->input('age'))) {
                $insurance_healthy->where('insurance_healthy_age_begin', '<=', $request->input('age'));
                $insurance_healthy->where('insurance_healthy_age_end', '>=', $request->input('age'));
            }

            if(!empty($request->input('gender'))) {
                $insurance_healthy->where('insurance_healthy_gender', '=', $request->input('gender'));
            }

            if(!empty($request->input('type'))) {
                $insurance_healthy->where('type_insurance_id', '=', $request->input('type'));
            }

            if(!empty($request->input('price_min')) and !empty($request->input('price_min'))) {
                $insurance_healthy->where('insurance_healthy_premium_start_price', '>=', $request->input('price_min'));
                $insurance_healthy->where('insurance_healthy_premium_start_price', '<=', $request->input('price_max'));
            }
            
            $insurance_healthy->join('insurance_company', 'insurance_healthy.insurance_company_id', '=', 'insurance_company.insurance_company_id');

            $insurance_healthy = $insurance_healthy->get();
        }
        
        // dd($insurance_healthy);

        if(!empty($insurance_healthy)) {
            foreach($insurance_healthy as $r) {
?>
                            <div class="col-6 col-lg-4">
                                <div class="healthbox">
                                    <div class="imginsu">
                                        <img src="<?php echo asset('public/uploads/insurance_healthy/'.$r->insurance_healthy_image);?>" alt="" class="img-fluid">
                                    </div>

                                    <div class="bgwhitecompul">
                                        <div class="boxcontent">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="logobig">
                                                        <img src="<?php echo asset('public/uploads/insurance_company/'.$r->insurance_company_logo);?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 text-start pt-1">
                                                    <div class="nameof">
                                                        <?php echo $r->insurance_company_name;?> <br>
                                                        <span><?php echo $r->insurance_healthy_name;?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="middleborder"></div>
                                            <div class="row mt-3 text-start">
                                                <div class="col-md-6">
                                                    คุ้มครองสูงสุด
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <?php echo number_format($r->insurance_healthy_premium_price, 0, '.', ',');?> บาท
                                                </div>
                                                <div class="col-lg-12 mt-2 mb-2">
                                                    <span class="colorIC"><i class="fi fi-rr-social-network"></i></span>
                                                    <span class="bluecolor"> ความคุ้มครองพิเศษ</span>
                                                </div>
                                                <!-- <div class="col-lg-12 mt-1">
                                                    ลดหย่อนภาษีได้
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    ไม่ต้องสำรองจ่าย ด้วยบัตร VIP Care Card
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    ไม่ต้องตรวจสุขภาพ
                                                </div> -->
                                                <div class="col-lg-12 mt-1">
                                                    <?php echo $r->insurance_healthy_special_cover;?>
                                                </div>
                                            </div>
                                            <div class="pricestart text-start mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        เบี้ยเริ่มต้น
                                                    </div>
                                                    <div class="col-md-6 text-md-end">
                                                        <?php echo number_format($r->insurance_healthy_premium_start_price, 0, '.', ',');?> ฿ ต่อปี
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-secondary" data-width="648" data-height="700"
                                                    data-fancybox data-src="#healthone" href="javascript:;"><i
                                                        class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-primary" data-width="948" data-height="700"
                                                    data-fancybox data-src="#contactback" href="javascript:;" onclick="clickQuotationCar('<?php echo @$r->insurance_car_id;?>')"><i
                                                        class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>
                                            </div>
                                        </div>


                                        <div style="display: none;" id="healthone">
                                            <div class="titleTopic text-center">
                                                กรุณากรอกข้อมูลเพื่อดำเนินการต่อ <br>
                                                <p class="smtext">กรอกแบบฟอร์มด้านล่าง</p>
                                            </div>
                                            <form method="post" action="<?php echo url('health_insurance');?>">
                                            <div class="contactform">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="healthy_contact_name_surname" name="healthy_contact_name_surname">
                                                    <label for="healthy_contact_name_surname">ชื่อ - นามสกุล <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="healthy_contact_telephone" name="healthy_contact_telephone">
                                                    <label for="healthy_contact_telephone">เบอร์โทรศัพท์ <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="healthy_contact_email" name="healthy_contact_email">
                                                    <label for="healthy_contact_email">อีเมล
                                                    </label>
                                                </div>
                                            </div>
                                            <br><br>
                                            <!-- <img src="<?php echo asset('public/frontend/images/captcha.png');?>" alt="" class="img-fluid">
                                            {!! captcha_img() !!} <input type="text" name="captcha" value="123">
                                            <br><br> -->
                                            <center> <a href="#" class="btn btn-primary" data-width="648"
                                                    data-height="700" data-fancybox data-src="#healthtwo"
                                                    href="javascript:;" onclick="return saveDataInsuranceHealth('<?php echo $r->insurance_healthy_id;?>');">ตกลง</a></center>
                                            </form>
                                            <div style="display: none;" id="healthtwo">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="logobig">
                                                                    <img src="<?php echo asset('public/uploads/insurance_company/'.$r->insurance_company_logo);?>" class="img-fluid" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 text-start pt-1">
                                                                <div class="nameofpopup">
                                                                    <?php echo $r->insurance_company_name;?> <br>
                                                                    <span><?php echo $r->insurance_healthy_name;?> </span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-end">
                                                        <div class="nameofpopup">
                                                            เบี้ยเริ่มต้น <br>
                                                            <span class="orangetext"><?php echo $r->insurance_healthy_premium_start_price;?> ฿</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div class="bgmoreinfo">
                                                            <h3><i class="fi fi-rr-comment"></i>
                                                                ความคุ้มครองค่ารักษาพยาบาล</h3>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    ค่ารักษาพยาบาล
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                    <?php echo priceInsurewise($r->insurance_healthy_medical);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                    <?php echo priceInsurewise($r->insurance_healthy_medical_after_return_to_thai);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    เคลื่อนย้ายฉุกเฉิน
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                    <?php echo priceInsurewise($r->insurance_healthy_emergency);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    ค่าชดเชยรายวัน
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_daily_compensation);?>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h3><i class="fi fi-rr-comment"></i>
                                                                ความคุ้มครองกรณีเสียชีวิต</h3>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    ชดเชยกรณีเสียชีวิต
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_case_death);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    ค่าใช้จ่ายในการส่งศพกลับประเทศ
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_cost_of_repatriating);?>
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <h3><i class="fi fi-rr-comment"></i>
                                                                ความคุ้มครองในการเดินทาง</h3>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    ความล่าช้าของเที่ยวบิน
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_flight_delay);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    การบอกเลิกการเดินทาง
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_trip_cancel);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    การพลาดต่อเที่ยวบิน
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_mising_a_flight);?>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h3><i class="fi fi-rr-comment"></i>
                                                                ความคุ้มครองสัมภาระ และทรัพย์สิน</h3>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    สัมภาระสูญหาย/เสียหาย
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_lost_items);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    เงินสดถูกขโมย
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_stolen_cash);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    เอกสารเดินทาง
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_travel_document);?>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    คอมพิวเตอร์โน๊ตบุ๊ค
                                                                </div>
                                                                <div class="col-md-5 text-end">
                                                                <?php echo priceInsurewise($r->insurance_healthy_pc_notebook);?>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col text-center">
                                                        <a href="<?php echo url('pdf_healthy/'.$r->insurance_healthy_id);?>" target="_blank" class="btn btn-secondary"><i
                                                                class="fi fi-rr-download"></i>ดาวน์โหลด PDF</a>
                                                        <a href="#" class="btn btn-primary" data-width="648"
                                                            data-height="700" data-fancybox data-src="#contact"
                                                            href="javascript:;"> <i class="fi fi-rr-phone-call"></i>
                                                            ติดต่อเจ้าหน้าที่</a>
                                                        <div style="display: none;" id="contact">
                                                            <div class="titleTopic text-center">
                                                            กรุณากรอกข้อมูลติดต่อกลับ<br>
                                                                <p class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</p>
                                                            </div>
                                                            <div class="contactform">
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="healthy_contact_confirm_name_surname" name="healthy_contact_confirm_name_surname" required>
                                                                    <label for="healthy_contact_confirm_name_surname">ชื่อ - นามสกุล
                                                                        <span>*</span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control"
                                                                        id="healthy_contact_confirm_telephone" name="healthy_contact_confirm_telephone" required>
                                                                    <label for="healthy_contact_confirm_telephone">เบอร์โทรศัพท์
                                                                        <span>*</span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="email" class="form-control"
                                                                        id="healthy_contact_confirm_email" name="healthy_contact_confirm_email" required>
                                                                    <label for="healthy_contact_confirm_email">อีเมล
                                                                    </label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control" name="healthy_contact_confirm_call" id="healthy_contact_confirm_call" required>
                                                                    <label for="healthy_contact_confirm_call">เวลาที่สะดวกให้เราติดต่อกลับ
                                                                    </label>
                                                                </div>
                                                            </div>
                                                             <br><br>
                                                            <img src="<?php echo asset('public/frontend/images/captcha.png');?>" alt="" class="img-fluid"> --}}
                                                            <br><br>
                                                            <center> <button
                                                                    class="btn btn-primary" onclick="return saveDataInsuranceHealthConfirm('<?php echo $r->insurance_healthy_id;?>');">ส่งแบบฟอร์ม</button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
            }

            echo '!@#$%^&*()_+';

            echo count($insurance_healthy);
        }
    }

    public function accident_insurance(Request $request) {
        $data['faq'] = DB::table('accident_faq')
            ->orderBy('accident_faq_id', 'asc')
            ->get();

        $data['rows1'] = DB::table('insurance_accident')
            ->orderBy('insurance_accident.insurance_accident_id', 'asc')
            ->join('insurance_company', 'insurance_accident.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_accident_row', 1)
            ->get();

        $data['rows2'] = DB::table('insurance_accident')
            ->orderBy('insurance_accident.insurance_accident_id', 'asc')
            ->join('insurance_company', 'insurance_accident.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_accident_row', 2)
            ->get();

        $data['rows3'] = DB::table('insurance_accident')
            ->orderBy('insurance_accident.insurance_accident_id', 'asc')
            ->join('insurance_company', 'insurance_accident.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_accident_row', 3)
            ->get();

        $data['rows4'] = DB::table('insurance_accident')
            ->orderBy('insurance_accident.insurance_accident_id', 'asc')
            ->join('insurance_company', 'insurance_accident.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_accident_row', 4)
            ->get();

        return view('frontend/accident_insurance', $data);
    }

    public function acct_page(Request $request) {
        if($request->session()->get('member_id') == '') {
            return redirect('index');
        }
        
        $data['row'] = DB::table('member')
            ->where('member_id', '=', $request->session()->get('member_id'))
            ->first();

        return view('frontend/acct_page', $data);
    }

    public function business_insurance(Request $request) {
        $data['faq'] = DB::table('business_faq')
            ->orderBy('business_faq_id', 'asc')
            ->get();

        $data['insurance'] = DB::table('insurance_business')
            ->orderBy('insurance_business_id', 'asc')
            ->get();

        return view('frontend/business_insurance', $data);
    }

    public function cancer_insurance(Request $request) {
        $data['faq'] = DB::table('cancer_faq')
            ->orderBy('cancer_faq_id', 'asc')
            ->get();

        $data['rows1'] = DB::table('insurance_cancer')
            ->orderBy('insurance_cancer.insurance_cancer_id', 'asc')
            ->join('insurance_company', 'insurance_cancer.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_cancer_row', 1)
            ->get();

        $data['rows2'] = DB::table('insurance_cancer')
            ->orderBy('insurance_cancer.insurance_cancer_id', 'asc')
            ->join('insurance_company', 'insurance_cancer.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_cancer_row', 2)
            ->get();

        $data['rows3'] = DB::table('insurance_cancer')
            ->orderBy('insurance_cancer.insurance_cancer_id', 'asc')
            ->join('insurance_company', 'insurance_cancer.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_cancer_row', 3)
            ->get();

        $data['rows4'] = DB::table('insurance_cancer')
            ->orderBy('insurance_cancer.insurance_cancer_id', 'asc')
            ->join('insurance_company', 'insurance_cancer.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_cancer_row', 4)
            ->get();

        return view('frontend/cancer_insurance', $data);
    }

    public function condo_insurance(Request $request) {
        $data['rows'] = DB::table('insurance_condo_row')
            ->get();

        $data['insurance'] = DB::table('insurance_condo')
            ->orderBy('insurance_condo_id', 'asc')
            ->get();

        $data['faq'] = DB::table('condo_faq')
            ->orderBy('condo_faq_id', 'asc')
            ->get();

        $data['condo_pdf'] = DB::table('condo_pdf')
            ->where('condo_pdf_id', '=', 1)
            ->first();

        return view('frontend/condo_insurance', $data);
    }

    public function extended_insurance(Request $request) {
        $data['faq'] = DB::table('extended_faq')
            ->orderBy('extended_faq_id', 'asc')
            ->get();

        $data['extended'] = DB::table('extended_insurance')
            ->orderBy('extended_insurance_id', 'asc')
            ->get();

        return view('frontend/extended_insurance', $data);
    }

    public function ajaxSaveQuotationCar(Request $request) {
        $data_post = array(
            'insurance_car_id' => $request->input('insurance_car_id'),
            'quotation_car_name_surname' => $request->input('quotation_car_name_surname'),
            'quotation_car_telephone' => $request->input('quotation_car_telephone'),
            'quotation_car_email' => $request->input('quotation_car_email'),
            'quotation_car_call' => $request->input('quotation_car_call'),
            'quotation_car_datetime_create' => date('Y-m-d H:i:s')
        );
        
        DB::table('quotation_car')
            ->insert($data_post);
    }

    public function ajaxSaveQuotationHealth(Request $request) {
        $data_post = array(
            'insurance_healthy_id' => $request->input('insurance_healthy_id'),
            'quotation_health_name_surname' => $request->input('quotation_health_name_surname'),
            'quotation_health_telephone' => $request->input('quotation_health_telephone'),
            'quotation_health_email' => $request->input('quotation_health_email'),
            'quotation_health_call' => $request->input('quotation_health_call'),
            'quotation_health_datetime_create' => date('Y-m-d H:i:s')
        );
        
        DB::table('quotation_health')
            ->insert($data_post);
    }

    public function ajaxFilterProductCar(Request $request) {
        if($request->input('check_all') == true) {
            $rows_car = DB::table('insurance_car')
                ->get();
        } else if(!empty($request->input('brand_car_id'))) {
            $rows_car = DB::table('insurance_car')
                ->where('brand_car_id', '=', $request->input('brand_car_id'))
                ->get();
        } else if(!empty($request->input('model_car_id'))) {
            $rows_car = DB::table('insurance_car')
                ->where('model_car_id', '=', $request->input('model_car_id'))
                ->get();
        } else if(!empty($request->input('sub_model_car_id'))) {
            $rows_car = DB::table('insurance_car')
                ->where('sub_model_car_id', '=', $request->input('sub_model_car_id'))
                ->get();
        } else if(!empty($request->input('year_car_id'))) {
            $rows_car = DB::table('insurance_car')
                ->where('year_car_id', '=', $request->input('year_car_id'))
                ->get();
        } else {
            $rows_car = DB::table('insurance_car');
            
            if(!empty($request->input('level_car'))) {
                $rows_car->whereIn('level_car_id', $request->input('level_car')); 
            }

            if(!empty($request->input('damages_first'))) {
                $rows_car->whereIn('damages_first_id', $request->input('damages_first')); 
            }

            if(!empty($request->input('type_repair'))) {
                $rows_car->whereIn('type_repair_id', $request->input('type_repair')); 
            }

            if(!empty($request->input('prb'))) {
                $rows_car->whereIn('insurance_car_prb', $request->input('prb')); 
            }

            if(!empty($request->input('insurance_company'))) {
                $rows_car->whereIn('insurance_company_id', $request->input('insurance_company')); 
            }
            
            if(!empty($request->input('price_min')) and !empty($request->input('price_max'))) {
                $rows_car->where('insurance_car.insurance_car_price', '>=', $request->input('price_min'));
                $rows_car->where('insurance_car.insurance_car_price', '<=', $request->input('price_max'));
            }

            // $rows_car = $rows_car->get();
            // dd($request->input('price_min'), $request->input('price_max'), $rows_car);

            if(!empty($request->input('price_order_by')) and $request->input('price_order_by') == 'price_asc') {
                $rows_car->orderBy('insurance_car_price', 'asc');
            } elseif(!empty($request->input('price_order_by')) and $request->input('price_order_by') == 'price_desc') {
                $rows_car->orderBy('insurance_car_price', 'desc');
            }

            $rows_car->join('insurance_company', 'insurance_car.insurance_company_id', '=', 'insurance_company.insurance_company_id');

            $rows_car = $rows_car->get();
            
        }

        if(!empty($rows_car)) {
            // dd($rows_car);
            foreach($rows_car as $r) {
                
                $insurance_company = DB::table('insurance_company')
                    ->where('insurance_company_id', '=', $r->insurance_company_id)
                    ->first();

                $level_car = DB::table('level_car')
                    ->where('level_car_id', '=', $r->level_car_id)
                    ->first();
?>
                            <div class="col-6 col-lg-4">
                                <div class="carbox">
                                    <div class="bluecompare">
										<div class="nameof">
											<?php echo $level_car->level_car_name;?>
										</div>
                                    </div>

                                    <div class="bgwhitecompul">
                                        <div class="boxcontent">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="logobig">
                                                        <img src="<?php echo asset('public/uploads/insurance_company/'.$insurance_company->insurance_company_logo);?>" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 text-start pt-1">
                                                    <div class="nameof">
                                                        <?php echo $insurance_company->insurance_company_name;?> <br>
                                                        <span><?php echo $level_car->level_car_name;?> </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="middleborder"></div>
                                            <div class="row mt-3 text-start">
                                                <div class="col-md-6">
                                                    <?php echo $r->insurance_car_text1;?>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <?php echo $r->insurance_car_premium_price;?>
                                                </div>
                                                <div class="col-md-6">
                                                <?php echo $r->insurance_car_text2;?>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <?php echo $r->insurance_car_lost_fire_price;?>
                                                </div>
                                                <div class="col-md-6">
                                                <?php echo $r->insurance_car_text4;?>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <?php echo $r->insurance_car_equiment_damage_price;?>
                                                </div>
                                                <div class="col-md-6">
                                                <?php echo $r->insurance_car_text5;?>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <?php echo $r->insurance_car_first_damage_price;?>
                                                </div>

                                            </div>
                                            <div class="pricestart text-start mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        เบี้ยประกัน
                                                    </div>
                                                    <div class="col-md-6 text-md-end">
                                                        <?php echo $r->insurance_car_price;?> บาท
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-secondary" data-width="648" data-height="700"
                                                    data-fancybox data-src="#healthone" href="javascript:;"><i
                                                        class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-primary" data-width="948" data-height="700" data-fancybox data-src="#contactback" href="javascript:;" onclick="clickQuotationCar('<?php echo $r->insurance_car_id;?>')"><i class="fi fi-rr-edit"></i> ขอใบเสนอราคา</a>
                                            </div>
                                        </div>


                                        <div style="display: none;" id="healthone">
                                            <div class="titleTopic text-center">
                                                กรุณากรอกข้อมูลเพื่อดำเนินการต่อ <br>
                                                <p class="smtext">กรอกแบบฟอร์มด้านล่าง</p>
                                            </div>
                                            <div class="contactform">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="contact_car_name_surname_<?php echo $r->insurance_car_id;?>">
                                                    <label for="contact_car_name_surname_<?php echo $r->insurance_car_id;?>">ชื่อ - นามสกุล <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="contact_car_telephone_<?php echo $r->insurance_car_id;?>">
                                                    <label for="contact_car_telephone_<?php echo $r->insurance_car_id;?>">เบอร์โทรศัพท์ <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="contact_car_email_<?php echo $r->insurance_car_id;?>">
                                                    <label for="contact_car_email_<?php echo $r->insurance_car_id;?>">อีเมล
                                                    </label>
                                                </div>
                                            </div>
                                            <br><br>
                                            <?php /*echo <img src="<?php echo asset('public/frontend/images/captcha.png');?>" alt="" class="img-fluid">
                                            <br><br> */ ?>
                                            
                                            <!-- <center> <a href="#" class="btn btn-primary" data-width="648"
                                                    data-height="700" data-fancybox data-src="#healthtwo"
                                                    href="javascript:;" onclick="saveUpdateContactCar('<?php echo $r->insurance_car_id;?>');"> ตกลง</a></center> -->
                                                    <center> <a href="#" class="btn btn-primary" data-width="648" data-height="700" data-fancybox data-src="#healthtwo"
                                                    href="javascript:;" onclick="return saveUpdateContactCar('<?php echo $r->insurance_car_id;?>');"> ตกลง</a></center>   
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
            }
        }

        echo '!@#$%^&*()_+';

        if(!empty($request->input('brand_car_id'))) {
            $model_car = DB::table('model_car')
                ->where('brand_car_id', '=', $request->input('brand_car_id'))
                ->get();

            if(!empty($model_car)) {
?>
                    <option value="">กรุณาเลือก</option>
<?php
                foreach($model_car as $r) {
?>
                    <option value="<?php echo $r->model_car_id;?>"><?php echo $r->model_car_name;?></option>
<?php
                }
            }
        }

        if(!empty($request->input('model_car_id'))) {
            $sub_model_car = DB::table('sub_model_car')
                ->where('model_car_id', '=', $request->input('model_car_id'))
                ->get();

            if(!empty($sub_model_car)) {
?>
                    <option value="">กรุณาเลือก</option>
<?php
                foreach($sub_model_car as $r) {
?>
                    <option value="<?php echo $r->sub_model_car_id;?>"><?php echo $r->sub_model_car_name;?></option>
<?php
                }
            }
        }

        echo '!@#$%^&*()_+';

        // dd($rows_car);

        echo count($rows_car);

        echo '!@#$%^&*()_+';
    }

    public function logout() {
        Session::forget('member_id');

        return redirect(url('index'));
    }

    public function ajaxContactHome(Request $request) {
        $data_post = array(
            'insurance_home_id' => $request->input('insurance_home_id'),
            'contact_home_name_surname' => $request->input('contact_home_name_surname'),
            'contact_home_tel' => $request->input('contact_home_tel'),
            'contact_home_email' => $request->input('contact_home_email'),
            'contact_home_call' => $request->input('contact_home_call'),
            'contact_home_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_home')
            ->insert($data_post);
    }

    public function ajaxContactHomeDetail(Request $request) {
        $data_post = array(
            'insurance_home_id' => $request->input('insurance_home_id'),
            'contact_detail_home_name_surname' => $request->input('contact_detail_home_name_surname'),
            'contact_detail_home_tel' => $request->input('contact_detail_home_tel'),
            'contact_detail_home_email' => $request->input('contact_detail_home_email'),
            'contact_detail_home_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_detail_home')
            ->insert($data_post);
    }

    public function ajaxSaveContactCar(Request $request) {
        $data_post = array(
            'contact_car_name_surname' => $request->input('contact_car_name_surname'),
            'contact_car_telephone' => $request->input('contact_car_telephone'),
            'contact_car_email' => $request->input('contact_car_email'),
            'contact_car_datetime_create' => date('Y-m-d H:i:s'),
        );

        DB::table('contact_car')
            ->insert($data_post);
    }

    public function ajaxSaveContactCondo(Request $request) {
        $data_post = array(
            'insurance_condo_id' => $request->input('insurance_condo_id'),
            'contact_condo_name_surname' => $request->input('contact_condo_name_surname'),
            'contact_condo_telephone' => $request->input('contact_condo_telephone'),
            'contact_condo_email' => $request->input('contact_condo_email'),
            'contact_condo_call' => $request->input('contact_condo_call'),
            'contact_condo_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_condo')
            ->insert($data_post);
    }

    public function ajaxSaveContactCondoDetail(Request $request) {
        $data_post = array(
            'insurance_condo_id' => $request->input('insurance_condo_id'),
            'contact_condo_detail_name_surname' => $request->input('contact_condo_detail_name_surname'),
            'contact_condo_detail_telephone' => $request->input('contact_condo_detail_telephone'),
            'contact_condo_detail_email' => $request->input('contact_condo_detail_email'),
            'contact_condo_detail_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_condo_detail')
            ->insert($data_post);
    }

    public function ajaxContactPet(Request $request) {
        $data_post = array(
            'insurance_pet_id' => $request->input('insurance_pet_id'),
            'contact_pet_name_surname' => $request->input('contact_pet_name_surname'),
            'contact_pet_tel' => $request->input('contact_pet_tel'),
            'contact_pet_email' => $request->input('contact_pet_email'),
            'contact_pet_call' => $request->input('contact_pet_call'),
            'contact_pet_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_pet')
            ->insert($data_post);
    }

    public function ajaxContactPetDetail(Request $request) {
        $data_post = array(
            'insurance_pet_id' => $request->input('insurance_pet_id'),
            'contact_pet_detail_name_surname' => $request->input('contact_pet_detail_name_surname'),
            'contact_pet_detail_tel' => $request->input('contact_pet_detail_tel'),
            'contact_pet_detail_email' => $request->input('contact_pet_detail_email'),
            'contact_pet_detail_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_pet_detail')
            ->insert($data_post);
    }

    public function ajaxContactTravel(Request $request) {
        $data_post = array(
            'insurance_travel_id' => $request->input('insurance_travel_id'),
            'contact_travel_name_surname' => $request->input('contact_travel_name_surname'),
            'contact_travel_tel' => $request->input('contact_travel_tel'),
            'contact_travel_email' => $request->input('contact_travel_email'),
            'contact_travel_call' => $request->input('contact_travel_call'),
            'contact_travel_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_travel')
            ->insert($data_post);
    }

    public function ajaxContactTravelDetail(Request $request) {
        $data_post = array(
            'insurance_travel_id' => $request->input('insurance_travel_id'),
            'contact_travel_detail_name_surname' => $request->input('contact_travel_detail_name_surname'),
            'contact_travel_detail_telephone' => $request->input('contact_travel_detail_telephone'),
            'contact_travel_detail_email' => $request->input('contact_travel_detail_email'),
            'contact_travel_detail_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_travel_detail')
            ->insert($data_post);
    }

    public function ajaxContactBusiness(Request $request) {
        $data_post = array(
            'insurance_business_id' => $request->input('insurance_business_id'),
            'contact_business_name_surname' => $request->input('contact_business_name_surname'),
            'contact_business_tel' => $request->input('contact_business_tel'),
            'contact_business_email' => $request->input('contact_business_email'),
            'contact_business_call' => $request->input('contact_business_call'),
            'contact_business_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_business')
            ->insert($data_post);
    }

    public function transportation_insurance(Request $request) {
        $data['faq'] = DB::table('transportation_faq')
            ->orderBy('transportation_faq_id', 'asc')
            ->get();

        $data['rows1'] = DB::table('insurance_transportation')
            ->orderBy('insurance_transportation.insurance_transportation_id', 'asc')
            ->join('insurance_company', 'insurance_transportation.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_transportation_row', 1)
            ->get();

        $data['rows2'] = DB::table('insurance_transportation')
            ->orderBy('insurance_transportation.insurance_transportation_id', 'asc')
            ->join('insurance_company', 'insurance_transportation.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_transportation_row', 2)
            ->get();

        $data['rows3'] = DB::table('insurance_transportation')
            ->orderBy('insurance_transportation.insurance_transportation_id', 'asc')
            ->join('insurance_company', 'insurance_transportation.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_transportation_row', 3)
            ->get();

        $data['rows4'] = DB::table('insurance_transportation')
            ->orderBy('insurance_transportation.insurance_transportation_id', 'asc')
            ->join('insurance_company', 'insurance_transportation.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->where('insurance_transportation_row', 4)
            ->get();

        return view('frontend/transportation_insurance', $data);
    }

    public function ajaxContactExtended(Request $request) {
        $data_post = array(
            'insurance_extended_id' => $request->input('insurance_extended_id'),
            'contact_extended_name_surname' => $request->input('contact_extended_name_surname'),
            'contact_extended_tel' => $request->input('contact_extended_tel'),
            'contact_extended_email' => $request->input('contact_extended_email'),
            'contact_extended_call' => $request->input('contact_extended_call'),
            'contact_extended_datetime_create' => date('Y-m-d H:i:s')
        );

        DB::table('contact_extended')
            ->insert($data_post);
    }

    public function ajaxChangeBrandCarFrontend(Request $request) {
        $model_car = DB::table('model_car')
            ->where('brand_car_id', '=', $request->input('brand_car_id'))
            ->get();

        if(!empty($model_car)) {
?>
                <option value="">กรุณาเลือก</option>
<?php
            foreach($model_car as $r) {
?>
                <option value="<?php echo $r->model_car_id;?>"><?php echo $r->model_car_name;?></option>
<?php
            }
        }
    }

    public function ajaxChangeModelCarFrontend(Request $request) {
        $sub_model_car = DB::table('sub_model_car')
            ->where('model_car_id', '=', $request->input('model_car_id'))
            ->get();

        if(!empty($sub_model_car)) {
?>
                <option value="">กรุณาเลือก</option>
<?php
            foreach($sub_model_car as $r) {
?>
                <option value="<?php echo $r->sub_model_car_id;?>"><?php echo $r->sub_model_car_name;?></option>
<?php
            }
        }
    }

    public function ajaxSaveQuotationConfirmCar(Request $request) {
        $data = array(
            'insurance_car_id' => $request->input('insurance_car_id'),
            'car_contact_confirm_name_surname' => $request->input('car_contact_confirm_name_surname'),
            'car_contact_confirm_telephone' => $request->input('car_contact_confirm_telephone'),
            'car_contact_confirm_email' => $request->input('car_contact_confirm_email'),
            'car_contact_confirm_call' => $request->input('car_contact_confirm_call'),
            'car_contact_confirm_datetime_create' => date('Y-m-d H:i:s'),
            'car_contact_confirm_datetime_update' => date('Y-m-d H:i:s')
        );

        DB::table('car_contact_confirm')
            ->insert($data);
    } 

    public function ajaxFilterNewsArticle(Request $request) {
        // echo $request->input('type');
        // echo $request->input('sort');

        $news_and_article = DB::table('news_and_article');

        if($request->input('type') != '') {
            $news_and_article->where('news_and_article_news_or_article', '=', $request->input('type'));
        }

        if($request->input('sort') == 'news_and_article_desc') {
            $news_and_article->orderBy('news_and_article_id', 'desc');
        } else if($request->input('sort') == 'news_suggest') {
            $news_and_article->where('news_and_article_suggest', '=', 'Yes');
        }

        $news_and_article = $news_and_article->get();

        if(!empty($news_and_article)) {
            foreach($news_and_article as $r) {
?>
                <div class="col-6 col-lg-4">
                        <div class="newsgroup">
                            <div class="hoverstyle">
                            <figure>
                                <a href="<?php echo url('news_detail/'.$r->news_and_article_id);?>">
                                    <img src="<?php echo asset('public/uploads/news_and_article/'.$r->news_and_article_image);?>" alt="">
                                    <span class="tag">
                                        <?php echo $r->news_and_article_news_or_article;?>
                                    </span>
                                </a>
                            </figure>
                            </div>
                            <div class="newscontent">
                                <h4><?php echo $r->news_and_article_topic;?></h4>
                                <div class="content"><?php echo $r->news_and_article_description;?></div>
                                <div class="middleborder"></div>
                                <div class="row">
                                    <div class="col-8 col-lg-10">
                                        <div class="date">
                                            <i class="fi fi-rr-calendar"></i> <?php echo date2date($r->news_and_article_date);?>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-2 text-end">
                                        <a href="<?php echo url('news_detail/'.$r->news_and_article_id);?>" class="btn readmore"><svg viewBox="0 0 38 38"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.1716 21.7027L25.164 15.1409C25.1623 14.5701 24.9348 14.0232 24.5312 13.6196C24.1276 13.216 23.5806 12.9885 23.0098 12.9868L16.4481 12.9791C16.1627 12.98 15.8892 13.0937 15.6874 13.2955C15.4856 13.4973 15.3718 13.7708 15.371 14.0562C15.3704 14.1988 15.3981 14.3401 15.4524 14.472C15.5067 14.6039 15.5865 14.7237 15.6874 14.8245C15.7882 14.9254 15.908 15.0052 16.0399 15.0595C16.1718 15.1138 16.3131 15.1415 16.4557 15.1409L21.4821 15.1409L13.0793 23.5437C12.8767 23.7463 12.7629 24.021 12.7629 24.3076C12.7629 24.5941 12.8767 24.8689 13.0793 25.0714C13.2819 25.274 13.5567 25.3879 13.8432 25.3879C14.1297 25.3879 14.4045 25.274 14.6071 25.0714L23.0098 16.6687L23.0098 21.6951C23.0088 21.9817 23.1217 22.2571 23.3237 22.4605C23.5257 22.6639 23.8003 22.7788 24.0869 22.7798C24.3736 22.7808 24.6489 22.6679 24.8524 22.4659C25.0558 22.2639 25.1706 21.9894 25.1716 21.7027Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
            }
        }
    }
}