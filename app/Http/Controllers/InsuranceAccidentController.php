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

class InsuranceAccidentController extends Controller implements HasImagesContract
{
    use HasImages;

    // accident_faq
    public function accident_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.accident_faq.list');
    }

    public function accident_faqServerProcessing() {
        $query = DB::table('accident_faq')
            ->orderBy('accident_faq.accident_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/accident_faq/'.$r->accident_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/accident_faq/form/".$r->accident_faq_id).'">Edit</a> / <a href="'.url("backend/accident_faq/accident_faq_delete/".$r->accident_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function accident_faq_form(Request $request, $accident_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('accident_faq')
            ->where('accident_faq_id', $accident_faq_id)
            ->first();

        return view('backend.accident_faq.form', $data);
    }

    public function accident_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'accident_faq_question' => $request->input('accident_faq_question'),
            'accident_faq_answer' => $request->input('accident_faq_answer'),
            'accident_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('accident_faq_image')) {

        //     $image = $request->file('accident_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/accident_faq/'.$filename));

        //     $data['accident_faq_image'] = $filename;
        // }

        if($request->input('accident_faq_id') != '') {
            // update
            DB::table('accident_faq')
                ->where('accident_faq_id', $request->input('accident_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['accident_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('accident_faq')->insert($data);
        }
        return redirect('backend/accident_faq/');
    }
    // end accident_faq

    // insurance_golf
    // public function insurance_golf(Request $request) {
    //     if(!$request->session()->has('user_id')) {
    //         return redirect('backend/login');
    //     }

    //     $data['row'] = DB::table('insurance_golf')
    //         ->where('insurance_golf_id', 1)
    //         ->first();

    //     return view('backend.insurance_golf.form', $data);
    // }

    // /*public function insurance_golfServerProcessing() {
    //     $query = DB::table('insurance_golf')
    //         ->orderBy('insurance_golf.insurance_golf_id', 'asc');
        
    //     return \DataTables::of($query)
    //     //     ->addColumn('image', function($r) {
    //     //         return '<img src="'.asset('public/uploads/insurance_golf/'.$r->insurance_golf_image).'" width="150">';
    //     //     })
    //         ->addColumn('action', function($r) {
    //             return '<a href="'.url("backend/insurance_golf/form/".$r->insurance_golf_id).'">Edit</a> / <a href="'.url("backend/insurance_golf/insurance_golf_delete/".$r->insurance_golf_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
    //         })
    //         ->rawColumns(['action'])->make(true);
    // }

    // public function insurance_golf_form(Request $request, $insurance_golf_id = '') {
    //     if(!$request->session()->has('user_id')) {
    //         return redirect('backend/login');
    //     }

    //     $data['row'] = DB::table('insurance_golf')
    //         ->where('insurance_golf_id', $insurance_golf_id)
    //         ->first();

    //     return view('backend.insurance_golf.form', $data);
    // }*/

    // public function insurance_golfSaveUpdate(Request $request) {
    //     // upload file
    //     $data = array(
    //         'insurance_golf_price' => $request->input('insurance_golf_price'),
    //         'insurance_golf_reponsible_price' => $request->input('insurance_golf_reponsible_price'),
    //         'insurance_golf_bodily_injuly_price' => $request->input('insurance_golf_bodily_injuly_price'),
    //         'insurance_golf_equipment_price' => $request->input('insurance_golf_equipment_price'),
    //         'insurance_golf_hol_in_one_price' => $request->input('insurance_golf_hol_in_one_price'),
    //         'insurance_golf_damage_live_body_price' => $request->input('insurance_golf_damage_live_body_price'),
    //         'insurance_golf_die_eye_lost_price' => $request->input('insurance_golf_die_eye_lost_price'),
    //         'insurance_golf_disablility_less_52_week_price' => $request->input('insurance_golf_disablility_less_52_week_price'),
    //         'insurance_golf_any_disablility_less_52_week_price' => $request->input('insurance_golf_any_disablility_less_52_week_price'),
    //         'insurance_golf_accident_price' => $request->input('insurance_golf_accident_price'),
    //         'insurance_golf_equipment_lost_price' => $request->input('insurance_golf_equipment_lost_price'),
    //         'insurance_golf_hol_in_one_normal_price' => $request->input('insurance_golf_hol_in_one_normal_price'),
    //         'insurance_golf_hol_in_one_other_price' => $request->input('insurance_golf_hol_in_one_other_price'),
    //         'insurance_golf_datetime_update' => date('Y-m-d H:i:s')
    //     );

    //     // if($request->hasFile('insurance_golf_image')) {

    //     //     $image = $request->file('insurance_golf_image');
    //     //     // $filename = $image->getClientOriginalName();

    //     //     $filename = date('YmdHis').'.png';
        
    //     //     $image_resize = Image::make($image->getRealPath());              
    //     //     $image_resize->resize(474, 510);
    //     //     $image_resize->save(public_path('uploads/insurance_golf/'.$filename));

    //     //     $data['insurance_golf_image'] = $filename;
    //     // }

    //     if($request->input('insurance_golf_id') != '') {
    //         // update
    //         DB::table('insurance_golf')
    //             ->where('insurance_golf_id', $request->input('insurance_golf_id'))
    //             ->update($data);
    //     } 
    //     // else {
    //     //     // insert
    //     //     $data['insurance_golf_datetime_create'] = date('Y-m-d H:i:s');

    //     //     DB::table('insurance_golf')->insert($data);
    //     // }
    //     return redirect('backend/insurance_golf/');
    // }

    // public function golf_contact(Request $request) {
    //     if(!$request->session()->has('user_id')) {
    //         return redirect('backend/login');
    //     }

    //     return view('backend.golf_contact.list');
    // }

    // public function golf_contactServerProcessing() {
    //     $query = DB::table('golf_contact')
    //         ->orderBy('golf_contact.golf_contact_id', 'asc');
        
    //     return \DataTables::of($query)
    //     //     ->addColumn('image', function($r) {
    //     //         return '<img src="'.asset('public/uploads/golf_contact/'.$r->golf_contact_image).'" width="150">';
    //     //     })
    //         ->addColumn('action', function($r) {
    //             return '<a href="'.url("backend/golf_contact/form/".$r->golf_contact_id).'">Edit</a> / <a href="'.url("backend/golf_contact/golf_contact_delete/".$r->golf_contact_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
    //         })
    //         ->rawColumns(['action'])->make(true);
    // }
    // end insurance_golf

    // insurance_accident
    public function insurance_accident(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_accident.list');
    }

    public function insurance_accidentServerProcessing() {
        $query = DB::table('insurance_accident')
            ->join('insurance_company', 'insurance_accident.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->select('insurance_accident.insurance_accident_id', 'insurance_company.insurance_company_name', 'insurance_accident.insurance_accident_row')
            ->orderBy('insurance_accident.insurance_accident_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_accident/'.$r->insurance_accident_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_accident/form/".$r->insurance_accident_id).'">Edit</a> / <a href="'.url("backend/insurance_accident/insurance_accident_delete/".$r->insurance_accident_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_accident_form(Request $request, $insurance_accident_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_accident')
            ->where('insurance_accident.insurance_accident_id', $insurance_accident_id)
            ->first();

        $data['company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        return view('backend.insurance_accident.form', $data);
    }

    public function insurance_accidentSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_company_id' => $request->input('insurance_company_id'),
            'insurance_accident_row' => $request->input('insurance_accident_row'),
            'insurance_accident_plan' => $request->input('insurance_accident_plan'),
            'insurance_accident_price' => $request->input('insurance_accident_price'),
            'insurance_accident_text1' => $request->input('insurance_accident_text1'),
            'insurance_accident_text2' => $request->input('insurance_accident_text2'),
            'insurance_accident_text3' => $request->input('insurance_accident_text3'),
            'insurance_accident_text4' => $request->input('insurance_accident_text4'),
            'insurance_accident_text5' => $request->input('insurance_accident_text5'),
            'insurance_accident_text6' => $request->input('insurance_accident_text6'),
            'insurance_accident_text7' => $request->input('insurance_accident_text7'),
            'insurance_accident_1' => $request->input('insurance_accident_1'),
            'insurance_accident_2' => $request->input('insurance_accident_2'),
            'insurance_accident_3' => $request->input('insurance_accident_3'),
            'insurance_accident_4' => $request->input('insurance_accident_4'),
            'insurance_accident_5' => $request->input('insurance_accident_5'),
            'insurance_accident_6' => $request->input('insurance_accident_6'),
            'insurance_accident_7' => $request->input('insurance_accident_7'),
            'insurance_accident_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_accident_image')) {

        //     $image = $request->file('insurance_accident_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_accident/'.$filename));

        //     $data['insurance_accident_image'] = $filename;
        // }

        if($request->input('insurance_accident_id') != '') {
            // update
            DB::table('insurance_accident')
                ->where('insurance_accident_id', $request->input('insurance_accident_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_accident_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_accident')->insert($data);
        }
        return redirect('backend/insurance_accident/');
    }
    // end insurance_accident

    // contact_accident
    public function contact_accident(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_accident.list');
    }

    public function contact_accidentServerProcessing() {
        $query = DB::table('contact_accident')
            ->join('insurance_accident', 'contact_accident.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->select('insurance_accident.insurance_accident_id', 'contact_accident_id', 'insurance_accident_plan', 'contact_accident_name_surname', 'contact_accident_telephone', 'contact_accident_email', 'contact_accident_call', 'contact_accident_datetime_create')
            ->orderBy('contact_accident.contact_accident_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_accident/'.$r->contact_accident_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_accident/form/".$r->contact_accident_id).'">Edit</a> / <a href="'.url("backend/contact_accident/contact_accident_delete/".$r->contact_accident_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end contact_accident

    // detail accident
    public function confirm_accident(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.confirm_accident.list');
    }

    public function confirm_accidentServerProcessing() {
        $query = DB::table('confirm_accident')
            ->join('insurance_accident', 'confirm_accident.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->select('insurance_accident.insurance_accident_id', 'confirm_accident_id', 'insurance_accident_plan', 'confirm_accident_name_surname', 'confirm_accident_telephone', 'confirm_accident_email', 'confirm_accident_datetime_create')
            ->orderBy('confirm_accident.confirm_accident_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/confirm_accident/'.$r->confirm_accident_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/confirm_accident/form/".$r->confirm_accident_id).'">Edit</a> / <a href="'.url("backend/confirm_accident/confirm_accident_delete/".$r->confirm_accident_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end detail accident

    // confirm accident
    public function confirm_accident2(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.confirm_accident2.list');
    }

    public function confirm_accident2ServerProcessing() {
        $query = DB::table('confirm_accident2')
            ->join('insurance_accident', 'confirm_accident2.insurance_accident_id', '=', 'insurance_accident.insurance_accident_id')
            ->select('insurance_accident.insurance_accident_id', 'confirm_accident2_id', 'insurance_accident_plan', 'confirm_accident2_name_surname', 'confirm_accident2_telephone', 'confirm_accident2_email', 'confirm_accident2_call', 'confirm_accident2_datetime_create')
            ->orderBy('confirm_accident2.confirm_accident2_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/confirm_accident2/'.$r->confirm_accident2_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/confirm_accident2/form/".$r->confirm_accident2_id).'">Edit</a> / <a href="'.url("backend/confirm_accident2/confirm_accident2_delete/".$r->confirm_accident2_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end confirm accident

}