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

class InsuranceGolfController extends Controller implements HasImagesContract
{
    use HasImages;

    // golf_faq
    public function golf_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.golf_faq.list');
    }

    public function golf_faqServerProcessing() {
        $query = DB::table('golf_faq')
            ->orderBy('golf_faq.golf_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/golf_faq/'.$r->golf_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/golf_faq/form/".$r->golf_faq_id).'">Edit</a> / <a href="'.url("backend/golf_faq/golf_faq_delete/".$r->golf_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function golf_faq_form(Request $request, $golf_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('golf_faq')
            ->where('golf_faq_id', $golf_faq_id)
            ->first();

        return view('backend.golf_faq.form', $data);
    }

    public function golf_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'golf_faq_question' => $request->input('golf_faq_question'),
            'golf_faq_answer' => $request->input('golf_faq_answer'),
            'golf_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('golf_faq_image')) {

        //     $image = $request->file('golf_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/golf_faq/'.$filename));

        //     $data['golf_faq_image'] = $filename;
        // }

        if($request->input('golf_faq_id') != '') {
            // update
            DB::table('golf_faq')
                ->where('golf_faq_id', $request->input('golf_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['golf_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('golf_faq')->insert($data);
        }
        return redirect('backend/golf_faq/');
    }
    // end golf_faq

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
            'insurance_golf_text1' => $request->input('insurance_golf_text1'),
            'insurance_golf_text1_1' => $request->input('insurance_golf_text1_1'),
            'insurance_golf_text1_2' => $request->input('insurance_golf_text1_2'),
            'insurance_golf_text1_3' => $request->input('insurance_golf_text1_3'),
            'insurance_golf_text1_4' => $request->input('insurance_golf_text1_4'),
            'insurance_golf_text1_1_1' => $request->input('insurance_golf_text1_1_1'),
            'insurance_golf_text1_2_1' => $request->input('insurance_golf_text1_2_1'),
            'insurance_golf_text1_2_2' => $request->input('insurance_golf_text1_2_2'),
            'insurance_golf_text1_2_3' => $request->input('insurance_golf_text1_2_3'),
            'insurance_golf_text1_2_4' => $request->input('insurance_golf_text1_2_4'),
            'insurance_golf_text1_3_1' => $request->input('insurance_golf_text1_3_1'),
            'insurance_golf_text1_4_1' => $request->input('insurance_golf_text1_4_1'),
            'insurance_golf_text1_4_2' => $request->input('insurance_golf_text1_4_2'),
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
}