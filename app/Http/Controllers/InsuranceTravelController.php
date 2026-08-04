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

class InsuranceTravelController extends Controller implements HasImagesContract
{
    use HasImages;

    // travel_faq
    public function travel_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.travel_faq.list');
    }

    public function travel_faqServerProcessing() {
        $query = DB::table('travel_faq')
            ->orderBy('travel_faq.travel_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/travel_faq/'.$r->travel_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/travel_faq/form/".$r->travel_faq_id).'">Edit</a> / <a href="'.url("backend/travel_faq/travel_faq_delete/".$r->travel_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function travel_faq_form(Request $request, $travel_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('travel_faq')
            ->where('travel_faq_id', $travel_faq_id)
            ->first();

        return view('backend.travel_faq.form', $data);
    }

    public function travel_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'travel_faq_question' => $request->input('travel_faq_question'),
            'travel_faq_answer' => $request->input('travel_faq_answer'),
            'travel_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('travel_faq_image')) {

        //     $image = $request->file('travel_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/travel_faq/'.$filename));

        //     $data['travel_faq_image'] = $filename;
        // }

        if($request->input('travel_faq_id') != '') {
            // update
            DB::table('travel_faq')
                ->where('travel_faq_id', $request->input('travel_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['travel_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('travel_faq')->insert($data);
        }
        return redirect('backend/travel_faq/');
    }
    // end travel_faq

    // insurance_travel
    public function insurance_travel(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_travel.list');
    }

    public function insurance_travelServerProcessing() {
        $query = DB::table('insurance_travel')
            ->orderBy('insurance_travel.insurance_travel_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_travel_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_travel/'.$r->insurance_travel_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_travel/form/".$r->insurance_travel_id).'">Edit</a> / <a href="'.url("backend/insurance_travel/insurance_travel_delete/".$r->insurance_travel_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_travel_image', 'action'])->make(true);
    }

    public function insurance_travel_form(Request $request, $insurance_travel_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_travel')
            ->where('insurance_travel_id', $insurance_travel_id)
            ->first();

        
        $data['rows'] = DB::table('insurance_travel_row')
            ->orderBy('insurance_travel_row_id', 'asc')
            ->get();

        return view('backend.insurance_travel.form', $data);
    }

    public function insurance_travelSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_travel_text1' => $request->input('insurance_travel_text1'),
            'insurance_travel_text_2' => $request->input('insurance_travel_text_2'),
            'insurance_travel_text_3' => $request->input('insurance_travel_text_3'),
            'insurance_travel_text_4' => $request->input('insurance_travel_text_4'),
            'insurance_travel_text_5' => $request->input('insurance_travel_text_5'),
            'insurance_travel_text_6' => $request->input('insurance_travel_text_6'),
            'insurance_travel_text_7' => $request->input('insurance_travel_text_7'),
            'insurance_travel_row_id' => $request->input('insurance_travel_row_id'),
            'insurance_travel_name' => $request->input('insurance_travel_name'),
            'insurance_travel_plan' => $request->input('insurance_travel_plan'),
            'insurance_travel_premium_price' => $request->input('insurance_travel_premium_price'),
            'insurance_travel_accident' => $request->input('insurance_travel_accident'),
            'insurance_travel_sick' => $request->input('insurance_travel_sick'),
            'insurance_travel_vaccine' => $request->input('insurance_travel_vaccine'),
            'insurance_travel_deposit' => $request->input('insurance_travel_deposit'),
            'insurance_travel_external' => $request->input('insurance_travel_external'),
            'insurance_travel_injury' => $request->input('insurance_travel_injury'),
            'insurance_travel_property' => $request->input('insurance_travel_property'),
            'insurance_travel_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_travel_image')) {

            $image = $request->file('insurance_travel_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(91, 68);
            $image_resize->save(public_path('uploads/insurance_travel/'.$filename));

            $data['insurance_travel_image'] = $filename;
        }

        if($request->input('insurance_travel_id') != '') {
            // update
            DB::table('insurance_travel')
                ->where('insurance_travel_id', $request->input('insurance_travel_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_travel_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_travel')->insert($data);
        }
        return redirect('backend/insurance_travel/');
    }
    // end insurance_travel

    // insurance_travel_row
    public function insurance_travel_row(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_travel_row.list');
    }

    public function insurance_travel_rowServerProcessing() {
        $query = DB::table('insurance_travel_row')
            ->orderBy('insurance_travel_row.insurance_travel_row_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_travel_row/'.$r->insurance_travel_row_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                //return '<a href="'.url("backend/insurance_travel_row/form/".$r->insurance_travel_row_id).'">Edit</a> / <a href="'.url("backend/insurance_travel_row/insurance_travel_row_delete/".$r->insurance_travel_row_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';

                return '<a href="'.url("backend/insurance_travel_row/form/".$r->insurance_travel_row_id).'">Edit</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_travel_row_form(Request $request, $insurance_travel_row_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_travel_row')
            ->where('insurance_travel_row_id', $insurance_travel_row_id)
            ->first();

        return view('backend.insurance_travel_row.form', $data);
    }

    public function insurance_travel_rowSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_travel_row_name' => $request->input('insurance_travel_row_name'),
            'insurance_travel_row_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_travel_row_image')) {

        //     $image = $request->file('insurance_travel_row_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_travel_row/'.$filename));

        //     $data['insurance_travel_row_image'] = $filename;
        // }

        if($request->input('insurance_travel_row_id') != '') {
            // update
            DB::table('insurance_travel_row')
                ->where('insurance_travel_row_id', $request->input('insurance_travel_row_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_travel_row_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_travel_row')->insert($data);
        }
        return redirect('backend/insurance_travel_row/');
    }
    // end insurance_travel_row

    // contact_travel
    public function contact_travel(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_travel.list');
    }

    public function contact_travelServerProcessing() {
        $query = DB::table('contact_travel')
            ->join('insurance_travel', 'contact_travel.insurance_travel_id', '=', 'insurance_travel.insurance_travel_id')
            ->select('contact_travel.contact_travel_id', 'insurance_travel.insurance_travel_name', 'contact_travel.contact_travel_name_surname', 'contact_travel.contact_travel_tel', 'contact_travel.contact_travel_email', 'contact_travel.contact_travel_call', 'contact_travel.contact_travel_datetime_create')
            ->orderBy('contact_travel.contact_travel_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_travel/'.$r->contact_travel_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_travel/form/".$r->contact_travel_id).'">Edit</a> / <a href="'.url("backend/contact_travel/contact_travel_delete/".$r->contact_travel_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // end contact_travel

    // contact_travel_detail
    public function contact_travel_detail(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_travel_detail.list');
    }

    public function contact_travel_detailServerProcessing() {
        $query = DB::table('contact_travel_detail')
            ->join('insurance_travel', 'contact_travel_detail.insurance_travel_id', '=', 'insurance_travel.insurance_travel_id')
            ->select('contact_travel_detail.contact_travel_detail_id', 'insurance_travel.insurance_travel_name', 'contact_travel_detail.contact_travel_detail_name_surname', 'contact_travel_detail.contact_travel_detail_telephone', 'contact_travel_detail.contact_travel_detail_email', 'contact_travel_detail.contact_travel_detail_datetime_create')
            ->orderBy('contact_travel_detail.contact_travel_detail_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_travel_detail/'.$r->contact_travel_detail_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_travel_detail/form/".$r->contact_travel_detail_id).'">Edit</a> / <a href="'.url("backend/contact_travel_detail/contact_travel_detail_delete/".$r->contact_travel_detail_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // end contact_travel_detail
}