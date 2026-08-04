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

class InsuranceHomeController extends Controller implements HasImagesContract
{
    use HasImages;

    // home_faq
    public function home_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.home_faq.list');
    }

    public function home_faqServerProcessing() {
        $query = DB::table('home_faq')
            ->orderBy('home_faq.home_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/home_faq/'.$r->home_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/home_faq/form/".$r->home_faq_id).'">Edit</a> / <a href="'.url("backend/home_faq/home_faq_delete/".$r->home_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function home_faq_form(Request $request, $home_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('home_faq')
            ->where('home_faq_id', $home_faq_id)
            ->first();

        return view('backend.home_faq.form', $data);
    }

    public function home_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'home_faq_question' => $request->input('home_faq_question'),
            'home_faq_answer' => $request->input('home_faq_answer'),
            'home_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('home_faq_image')) {

        //     $image = $request->file('home_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/home_faq/'.$filename));

        //     $data['home_faq_image'] = $filename;
        // }

        if($request->input('home_faq_id') != '') {
            // update
            DB::table('home_faq')
                ->where('home_faq_id', $request->input('home_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['home_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('home_faq')->insert($data);
        }
        return redirect('backend/home_faq/');
    }
    // end home_faq

    // insurance_home
    public function insurance_home(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_home.list');
    }

    public function insurance_homeServerProcessing() {
        $query = DB::table('insurance_home')
            ->orderBy('insurance_home.insurance_home_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_home_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_home/'.$r->insurance_home_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_home/form/".$r->insurance_home_id).'">Edit</a> / <a href="'.url("backend/insurance_home/insurance_home_delete/".$r->insurance_home_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_home_image', 'action'])->make(true);
    }

    public function insurance_home_form(Request $request, $insurance_home_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['rows'] = DB::table('insurance_home_row')
            ->orderBy('insurance_home_row_id', 'asc')
            ->get();

        $data['row'] = DB::table('insurance_home')
            ->where('insurance_home_id', $insurance_home_id)
            ->first();

        return view('backend.insurance_home.form', $data);
    }

    public function insurance_homeSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_home_row_id' => $request->input('insurance_home_row_id'),
            'insurance_home_text_1' => $request->input('insurance_home_text_1'),
            'insurance_home_text_2' => $request->input('insurance_home_text_2'),
            'insurance_home_text_3' => $request->input('insurance_home_text_3'),
            'insurance_home_text_4' => $request->input('insurance_home_text_4'),
            'insurance_home_text_5' => $request->input('insurance_home_text_5'),
            'insurance_home_text_6' => $request->input('insurance_home_text_6'),
            'insurance_home_text_7' => $request->input('insurance_home_text_7'),
            'insurance_home_name' => $request->input('insurance_home_name'),
            'insurance_home_plan' => $request->input('insurance_home_plan'),
            'insurance_home_accident' => $request->input('insurance_home_accident'),
            'insurance_home_sick' => $request->input('insurance_home_sick'),
            'insurance_home_vaccine' => $request->input('insurance_home_vaccine'),
            'insurance_home_deposit' => $request->input('insurance_home_deposit'),
            'insurance_home_external' => $request->input('insurance_home_external'),
            'insurance_home_injury' => $request->input('insurance_home_injury'),
            'insurance_home_property' => $request->input('insurance_home_property'),
            'insurance_home_premium_price' => $request->input('insurance_home_premium_price'),
            'insurance_home_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_home_image')) {

            $image = $request->file('insurance_home_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/insurance_home/'.$filename));

            $data['insurance_home_image'] = $filename;
        }

        if($request->input('insurance_home_id') != '') {
            // update
            DB::table('insurance_home')
                ->where('insurance_home_id', $request->input('insurance_home_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_home_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_home')->insert($data);
        }
        return redirect('backend/insurance_home/');
    }

    // contact_home
    public function contact_home(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_home.list');
    }

    public function contact_homeServerProcessing() {
        $query = DB::table('contact_home')
            ->join('insurance_home', 'contact_home.insurance_home_id', '=', 'insurance_home.insurance_home_id')
            ->select('contact_home.contact_home_id', 'insurance_home.insurance_home_name', 'contact_home.contact_home_name_surname', 'contact_home.contact_home_tel', 'contact_home.contact_home_email', 'contact_home.contact_home_call', 'contact_home.contact_home_datetime_create')
            ->orderBy('contact_home.contact_home_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_home/'.$r->contact_home_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_home/form/".$r->contact_home_id).'">Edit</a> / <a href="'.url("backend/contact_home/contact_home_delete/".$r->contact_home_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    // contact_detail_home
    public function contact_detail_home(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_detail_home.list');
    }

    public function contact_detail_homeServerProcessing() {
        $query = DB::table('contact_detail_home')
            ->join('insurance_home', 'contact_detail_home.insurance_home_id', '=', 'insurance_home.insurance_home_id')
            ->select('contact_detail_home.contact_detail_home_id', 'insurance_home.insurance_home_name', 'contact_detail_home.contact_detail_home_name_surname', 'contact_detail_home.contact_detail_home_tel', 'contact_detail_home.contact_detail_home_email', 'contact_detail_home.contact_detail_home_datetime_create')
            ->orderBy('contact_detail_home.contact_detail_home_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_detail_home/'.$r->contact_detail_home_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_detail_home/form/".$r->contact_detail_home_id).'">Edit</a> / <a href="'.url("backend/contact_detail_home/contact_detail_home_delete/".$r->contact_detail_home_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // end insurance_home
}