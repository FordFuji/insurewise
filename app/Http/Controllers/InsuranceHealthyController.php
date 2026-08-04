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

class InsuranceHealthyController extends Controller implements HasImagesContract
{
    use HasImages;

    // type_insurance
    public function type_insurance(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.type_insurance.list');
    }

    public function type_insuranceServerProcessing() {
        $query = DB::table('type_insurance')
            ->orderBy('type_insurance.type_insurance_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/type_insurance/'.$r->type_insurance_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/type_insurance/form/".$r->type_insurance_id).'">Edit</a> / <a href="'.url("backend/type_insurance/type_insurance_delete/".$r->type_insurance_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function type_insurance_form(Request $request, $type_insurance_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('type_insurance')
            ->where('type_insurance_id', $type_insurance_id)
            ->first();

        return view('backend.type_insurance.form', $data);
    }

    public function type_insuranceSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'type_insurance_name' => $request->input('type_insurance_name'),
            'type_insurance_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('type_insurance_image')) {

        //     $image = $request->file('type_insurance_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/type_insurance/'.$filename));

        //     $data['type_insurance_image'] = $filename;
        // }

        if($request->input('type_insurance_id') != '') {
            // update
            DB::table('type_insurance')
                ->where('type_insurance_id', $request->input('type_insurance_id'))
                ->update($data);
        } else {
            // insert
            $data['type_insurance_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('type_insurance')->insert($data);
        }
        return redirect('backend/type_insurance/');
    }
    // end type_insurance

    // insurance_healthy
    public function insurance_healthy(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_healthy.list');
    }

    public function insurance_healthyServerProcessing() {
        $query = DB::table('insurance_healthy')
            ->join('type_insurance', 'insurance_healthy.type_insurance_id', '=', 'type_insurance.type_insurance_id')
            ->select('type_insurance.type_insurance_id', 'insurance_healthy.insurance_healthy_image', 'insurance_healthy.insurance_healthy_id', 'type_insurance.type_insurance_name', 'insurance_healthy.insurance_healthy_name')
            ->orderBy('insurance_healthy.insurance_healthy_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_healthy_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_healthy/'.$r->insurance_healthy_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_healthy/form/".$r->insurance_healthy_id).'">Edit</a> / <a href="'.url("backend/insurance_healthy/insurance_healthy_delete/".$r->insurance_healthy_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_healthy_image', 'action'])->make(true);
    }

    public function insurance_healthy_form(Request $request, $insurance_healthy_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_healthy')
            ->where('insurance_healthy.insurance_healthy_id', $insurance_healthy_id)
            ->join('type_insurance', 'insurance_healthy.type_insurance_id', '=', 'type_insurance.type_insurance_id')
            ->first();

        $data['type_insurance'] = DB::table('type_insurance')
            ->orderBy('type_insurance_id', 'asc')
            ->get();

        //dd($data['type_insurance']);

        $data['insurance_company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        return view('backend.insurance_healthy.form', $data);
    }

    public function insurance_healthySaveUpdate(Request $request) {
        // upload file
        $data = array(
            'type_insurance_id' => $request->input('type_insurance_id'),
            'insurance_company_id' => $request->input('insurance_company_id'),
            'insurance_healthy_text1' => $request->input('insurance_healthy_text1'),
            'insurance_healthy_text2' => $request->input('insurance_healthy_text2'),
            'insurance_healthy_text3' => $request->input('insurance_healthy_text3'),
            'insurance_healthy_text4' => $request->input('insurance_healthy_text4'),
            'insurance_healthy_text1_1' => $request->input('insurance_healthy_text1_1'),
            'insurance_healthy_text1_2' => $request->input('insurance_healthy_text1_2'),
            'insurance_healthy_text1_3' => $request->input('insurance_healthy_text1_3'),
            'insurance_healthy_text1_4' => $request->input('insurance_healthy_text1_4'),
            'insurance_healthy_text2_1' => $request->input('insurance_healthy_text2_1'),
            'insurance_healthy_text2_2' => $request->input('insurance_healthy_text2_2'),
            'insurance_healthy_text3_1' => $request->input('insurance_healthy_text3_1'),
            'insurance_healthy_text3_2' => $request->input('insurance_healthy_text3_2'),
            'insurance_healthy_text3_3' => $request->input('insurance_healthy_text3_3'),
            'insurance_healthy_text4_1' => $request->input('insurance_healthy_text4_1'),
            'insurance_healthy_text4_2' => $request->input('insurance_healthy_text4_2'),
            'insurance_healthy_text4_3' => $request->input('insurance_healthy_text4_3'),
            'insurance_healthy_text4_4' => $request->input('insurance_healthy_text4_4'),
            'insurance_healthy_name' => $request->input('insurance_healthy_name'),
            'insurance_healthy_age_begin' => $request->input('insurance_healthy_age_begin'),
            'insurance_healthy_age_end' => $request->input('insurance_healthy_age_end'),
            'insurance_healthy_gender' => $request->input('insurance_healthy_gender'),
            'insurance_healthy_premium_price' => $request->input('insurance_healthy_premium_price'),
            'insurance_healthy_premium_start_price' => $request->input('insurance_healthy_premium_start_price'),
            'insurance_healthy_special_cover' => $request->input('insurance_healthy_special_cover'),
            'insurance_healthy_medical' => $request->input('insurance_healthy_medical'),
            'insurance_healthy_medical_after_return_to_thai' => $request->input('insurance_healthy_medical_after_return_to_thai'),
            'insurance_healthy_emergency' => $request->input('insurance_healthy_emergency'),
            'insurance_healthy_daily_compensation' => $request->input('insurance_healthy_daily_compensation'),
            'insurance_healthy_case_death' => $request->input('insurance_healthy_case_death'),
            'insurance_healthy_cost_of_repatriating' => $request->input('insurance_healthy_cost_of_repatriating'),
            'insurance_healthy_flight_delay' => $request->input('insurance_healthy_flight_delay'),
            'insurance_healthy_trip_cancel' => $request->input('insurance_healthy_trip_cancel'),
            'insurance_healthy_mising_a_flight' => $request->input('insurance_healthy_mising_a_flight'),
            'insurance_healthy_lost_items' => $request->input('insurance_healthy_lost_items'),
            'insurance_healthy_stolen_cash' => $request->input('insurance_healthy_stolen_cash'),
            'insurance_healthy_travel_document' => $request->input('insurance_healthy_travel_document'),
            'insurance_healthy_pc_notebook' => $request->input('insurance_healthy_pc_notebook'),
            'insurance_healthy_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_healthy_image')) {

            $image = $request->file('insurance_healthy_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/insurance_healthy/'.$filename));

            $data['insurance_healthy_image'] = $filename;
        }

        if($request->input('insurance_healthy_id') != '') {
            // update
            DB::table('insurance_healthy')
                ->where('insurance_healthy_id', $request->input('insurance_healthy_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_healthy_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_healthy')->insert($data);
        }
        
        return redirect('backend/insurance_healthy/');
    }
    // end insurance_healthy

    // healthy_faq
    public function healthy_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.healthy_faq.list');
    }

    public function healthy_faqServerProcessing() {
        $query = DB::table('healthy_faq')
            ->orderBy('healthy_faq.healthy_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/healthy_faq/'.$r->healthy_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/healthy_faq/form/".$r->healthy_faq_id).'">Edit</a> / <a href="'.url("backend/healthy_faq/healthy_faq_delete/".$r->healthy_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function healthy_faq_form(Request $request, $healthy_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('healthy_faq')
            ->where('healthy_faq_id', $healthy_faq_id)
            ->first();

        return view('backend.healthy_faq.form', $data);
    }

    public function healthy_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'healthy_faq_question' => $request->input('healthy_faq_question'),
            'healthy_faq_answer' => $request->input('healthy_faq_answer'),
            'healthy_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('healthy_faq_image')) {

        //     $image = $request->file('healthy_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/healthy_faq/'.$filename));

        //     $data['healthy_faq_image'] = $filename;
        // }

        if($request->input('healthy_faq_id') != '') {
            // update
            DB::table('healthy_faq')
                ->where('healthy_faq_id', $request->input('healthy_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['healthy_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('healthy_faq')->insert($data);
        }
        return redirect('backend/healthy_faq/');
    }
    // end healthy_faq

    // healthy_contact
    public function healthy_contact(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.healthy_contact.list');
    }

    public function healthy_contactServerProcessing() {
        $query = DB::table('healthy_contact')
            ->join('insurance_healthy', 'healthy_contact.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->orderBy('healthy_contact.healthy_contact_id', 'asc')
            ->select('healthy_contact.healthy_contact_id', 'insurance_healthy.insurance_healthy_name', 'healthy_contact.healthy_contact_name_surname', 'healthy_contact.healthy_contact_telephone', 'healthy_contact.healthy_contact_email', 'healthy_contact.healthy_contact_datetime_create');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // End healthy_contact

    // healthy_contact_confirm
    public function healthy_contact_confirm(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.healthy_contact_confirm.list');
    }

    public function healthy_contact_confirmServerProcessing() {
        $query = DB::table('healthy_contact_confirm')
            ->join('insurance_healthy', 'healthy_contact_confirm.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->orderBy('healthy_contact_confirm.healthy_contact_confirm_id', 'asc')
            ->select('healthy_contact_confirm.healthy_contact_confirm_id', 'insurance_healthy.insurance_healthy_name', 'healthy_contact_confirm.healthy_contact_confirm_name_surname', 'healthy_contact_confirm.healthy_contact_confirm_telephone', 'healthy_contact_confirm.healthy_contact_confirm_email', 'healthy_contact_confirm.healthy_contact_confirm_call', 'healthy_contact_confirm.healthy_contact_confirm_datetime_create');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // End healthy_contact_confirm

    // quotation_health
    public function quotation_health(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.quotation_health.list');
    }

    public function quotation_healthServerProcessing() {
        $query = DB::table('quotation_health')
            ->join('insurance_healthy', 'quotation_health.insurance_healthy_id', '=', 'insurance_healthy.insurance_healthy_id')
            ->orderBy('quotation_health.quotation_health_id', 'asc')
            ->select('quotation_health.quotation_health_id', 'insurance_healthy.insurance_healthy_name', 'quotation_health.quotation_health_name_surname', 'quotation_health.quotation_health_telephone', 'quotation_health.quotation_health_email', 'quotation_health.quotation_health_datetime_create', 'quotation_health.quotation_health_call');
        
        return \DataTables::of($query)
            ->make(true);
    }
    // End quotation_health
}