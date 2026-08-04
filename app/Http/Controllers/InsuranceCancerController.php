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

class InsuranceCancerController extends Controller implements HasImagesContract
{
    use HasImages;

    // cancer_faq
    public function cancer_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.cancer_faq.list');
    }

    public function cancer_faqServerProcessing() {
        $query = DB::table('cancer_faq')
            ->orderBy('cancer_faq.cancer_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/cancer_faq/'.$r->cancer_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/cancer_faq/form/".$r->cancer_faq_id).'">Edit</a> / <a href="'.url("backend/cancer_faq/cancer_faq_delete/".$r->cancer_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function cancer_faq_form(Request $request, $cancer_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('cancer_faq')
            ->where('cancer_faq_id', $cancer_faq_id)
            ->first();

        return view('backend.cancer_faq.form', $data);
    }

    public function cancer_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'cancer_faq_question' => $request->input('cancer_faq_question'),
            'cancer_faq_answer' => $request->input('cancer_faq_answer'),
            'cancer_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('cancer_faq_image')) {

        //     $image = $request->file('cancer_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/cancer_faq/'.$filename));

        //     $data['cancer_faq_image'] = $filename;
        // }

        if($request->input('cancer_faq_id') != '') {
            // update
            DB::table('cancer_faq')
                ->where('cancer_faq_id', $request->input('cancer_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['cancer_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('cancer_faq')->insert($data);
        }
        return redirect('backend/cancer_faq/');
    }
    // end cancer_faq

    // insurance_golf
    public function insurance_golf(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_golf')
            ->where('insurance_golf_id', 1)
            ->first();

        return view('backend.insurance_golf.form', $data);
    }

    /*public function insurance_golfServerProcessing() {
        $query = DB::table('insurance_golf')
            ->orderBy('insurance_golf.insurance_golf_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_golf/'.$r->insurance_golf_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_golf/form/".$r->insurance_golf_id).'">Edit</a> / <a href="'.url("backend/insurance_golf/insurance_golf_delete/".$r->insurance_golf_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_golf_form(Request $request, $insurance_golf_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_golf')
            ->where('insurance_golf_id', $insurance_golf_id)
            ->first();

        return view('backend.insurance_golf.form', $data);
    }*/

    public function insurance_golfSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_golf_price' => $request->input('insurance_golf_price'),
            'insurance_golf_reponsible_price' => $request->input('insurance_golf_reponsible_price'),
            'insurance_golf_bodily_injuly_price' => $request->input('insurance_golf_bodily_injuly_price'),
            'insurance_golf_equipment_price' => $request->input('insurance_golf_equipment_price'),
            'insurance_golf_hol_in_one_price' => $request->input('insurance_golf_hol_in_one_price'),
            'insurance_golf_damage_live_body_price' => $request->input('insurance_golf_damage_live_body_price'),
            'insurance_golf_die_eye_lost_price' => $request->input('insurance_golf_die_eye_lost_price'),
            'insurance_golf_disablility_less_52_week_price' => $request->input('insurance_golf_disablility_less_52_week_price'),
            'insurance_golf_any_disablility_less_52_week_price' => $request->input('insurance_golf_any_disablility_less_52_week_price'),
            'insurance_golf_accident_price' => $request->input('insurance_golf_accident_price'),
            'insurance_golf_equipment_lost_price' => $request->input('insurance_golf_equipment_lost_price'),
            'insurance_golf_hol_in_one_normal_price' => $request->input('insurance_golf_hol_in_one_normal_price'),
            'insurance_golf_hol_in_one_other_price' => $request->input('insurance_golf_hol_in_one_other_price'),
            'insurance_golf_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_golf_image')) {

        //     $image = $request->file('insurance_golf_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_golf/'.$filename));

        //     $data['insurance_golf_image'] = $filename;
        // }

        if($request->input('insurance_golf_id') != '') {
            // update
            DB::table('insurance_golf')
                ->where('insurance_golf_id', $request->input('insurance_golf_id'))
                ->update($data);
        } 
        // else {
        //     // insert
        //     $data['insurance_golf_datetime_create'] = date('Y-m-d H:i:s');

        //     DB::table('insurance_golf')->insert($data);
        // }
        return redirect('backend/insurance_golf/');
    }

    public function golf_contact(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.golf_contact.list');
    }

    public function golf_contactServerProcessing() {
        $query = DB::table('golf_contact')
            ->orderBy('golf_contact.golf_contact_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/golf_contact/'.$r->golf_contact_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/golf_contact/form/".$r->golf_contact_id).'">Edit</a> / <a href="'.url("backend/golf_contact/golf_contact_delete/".$r->golf_contact_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end insurance_golf

    // insurance_cancer
    public function insurance_cancer(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_cancer.list');
    }

    public function insurance_cancerServerProcessing() {
        $query = DB::table('insurance_cancer')
            ->join('insurance_company', 'insurance_cancer.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->select('insurance_cancer.insurance_cancer_id', 'insurance_company.insurance_company_name', 'insurance_cancer.insurance_cancer_row')
            ->orderBy('insurance_cancer.insurance_cancer_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_cancer/'.$r->insurance_cancer_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_cancer/form/".$r->insurance_cancer_id).'">Edit</a> / <a href="'.url("backend/insurance_cancer/insurance_cancer_delete/".$r->insurance_cancer_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_cancer_form(Request $request, $insurance_cancer_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_cancer')
            ->where('insurance_cancer.insurance_cancer_id', $insurance_cancer_id)
            ->first();

        $data['company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        return view('backend.insurance_cancer.form', $data);
    }

    public function insurance_cancerSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_company_id' => $request->input('insurance_company_id'),
            'insurance_cancer_plan' => $request->input('insurance_cancer_plan'),
            'insurance_cancer_price' => $request->input('insurance_cancer_price'),
            'insurance_cancer_row' => $request->input('insurance_cancer_row'),
            'insurance_cancer_text1' => $request->input('insurance_cancer_text1'),
            'insurance_cancer_text2' => $request->input('insurance_cancer_text2'),
            'insurance_cancer_text3' => $request->input('insurance_cancer_text3'),
            'insurance_cancer_text4' => $request->input('insurance_cancer_text4'),
            'insurance_cancer_text5' => $request->input('insurance_cancer_text5'),
            'insurance_cancer_text6' => $request->input('insurance_cancer_text6'),
            'insurance_cancer_text7' => $request->input('insurance_cancer_text7'),
            'insurance_cancer_1' => $request->input('insurance_cancer_1'),
            'insurance_cancer_2' => $request->input('insurance_cancer_2'),
            'insurance_cancer_3' => $request->input('insurance_cancer_3'),
            'insurance_cancer_4' => $request->input('insurance_cancer_4'),
            'insurance_cancer_5' => $request->input('insurance_cancer_5'),
            'insurance_cancer_6' => $request->input('insurance_cancer_6'),
            'insurance_cancer_7' => $request->input('insurance_cancer_7'),
            'insurance_cancer_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_cancer_image')) {

        //     $image = $request->file('insurance_cancer_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_cancer/'.$filename));

        //     $data['insurance_cancer_image'] = $filename;
        // }

        if($request->input('insurance_cancer_id') != '') {
            // update
            DB::table('insurance_cancer')
                ->where('insurance_cancer_id', $request->input('insurance_cancer_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_cancer_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_cancer')->insert($data);
        }
        return redirect('backend/insurance_cancer/');
    }
    // end insurance_cancer

    // contact_cancer
    public function contact_cancer(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_cancer.list');
    }

    public function contact_cancerServerProcessing() {
        $query = DB::table('contact_cancer')
            ->join('insurance_cancer', 'contact_cancer.insurance_cancer_id', '=', 'insurance_cancer.insurance_cancer_id')
            ->select('insurance_cancer_plan', 'insurance_cancer.insurance_cancer_id', 'contact_cancer_id', 'contact_cancer_name_surname', 'contact_cancer_telephone', 'contact_cancer_email', 'contact_cancer_call', 'contact_cancer_datetime_create')
            ->orderBy('contact_cancer.contact_cancer_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_cancer/'.$r->contact_cancer_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_cancer/form/".$r->contact_cancer_id).'">Edit</a> / <a href="'.url("backend/contact_cancer/contact_cancer_delete/".$r->contact_cancer_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end contact_cancer
}