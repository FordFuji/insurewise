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

class InsuranceOtherController extends Controller implements HasImagesContract
{
    use HasImages;

    // extended_insurance
    public function extended_insurance(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.extended_insurance.list');
    }

    public function extended_insuranceServerProcessing() {
        $query = DB::table('extended_insurance')
            ->orderBy('extended_insurance.extended_insurance_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/extended_insurance/'.$r->extended_insurance_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/extended_insurance/form/".$r->extended_insurance_id).'">Edit</a> / <a href="'.url("backend/extended_insurance/extended_insurance_delete/".$r->extended_insurance_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function extended_insurance_form(Request $request, $extended_insurance_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('extended_insurance')
            ->where('extended_insurance_id', $extended_insurance_id)
            ->first();

        return view('backend.extended_insurance.form', $data);
    }

    public function extended_insuranceSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'extended_insurance_text_1' => $request->input('extended_insurance_text_1'),
            'extended_insurance_text_2' => $request->input('extended_insurance_text_2'),
            'extended_insurance_text_3' => $request->input('extended_insurance_text_3'),
            'extended_insurance_text_4' => $request->input('extended_insurance_text_4'),
            'extended_insurance_text_5' => $request->input('extended_insurance_text_5'),
            'extended_insurance_plan' => $request->input('extended_insurance_plan'),
            'extended_insurance_premium_price' => $request->input('extended_insurance_premium_price'),
            'extended_insurance_fire' => $request->input('extended_insurance_fire'),
            'extended_insurance_money_salary' => $request->input('extended_insurance_money_salary'),
            //'extended_insurance_maximum' => $request->input('extended_insurance_maximum'),
            'extended_insurance_money' => $request->input('extended_insurance_money'),
            'extended_insurance_die' => $request->input('extended_insurance_die'),
            'extended_insurance_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('extended_insurance_image')) {

        //     $image = $request->file('extended_insurance_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/extended_insurance/'.$filename));

        //     $data['extended_insurance_image'] = $filename;
        // }

        if($request->input('extended_insurance_id') != '') {
            // update
            DB::table('extended_insurance')
                ->where('extended_insurance_id', $request->input('extended_insurance_id'))
                ->update($data);
        } else {
            // insert
            $data['extended_insurance_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('extended_insurance')->insert($data);
        }
        return redirect('backend/extended_insurance/');
    }
    // end extended_insurance

    // extended_faq
    public function extended_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.extended_faq.list');
    }

    public function extended_faqServerProcessing() {
        $query = DB::table('extended_faq')
            ->orderBy('extended_faq.extended_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/extended_faq/'.$r->extended_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/extended_faq/form/".$r->extended_faq_id).'">Edit</a> / <a href="'.url("backend/extended_faq/extended_faq_delete/".$r->extended_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function extended_faq_form(Request $request, $extended_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('extended_faq')
            ->where('extended_faq_id', $extended_faq_id)
            ->first();

        return view('backend.extended_faq.form', $data);
    }

    public function extended_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'extended_faq_question' => $request->input('extended_faq_question'),
            'extended_faq_answer' => $request->input('extended_faq_answer'),
            'extended_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('extended_faq_image')) {

        //     $image = $request->file('extended_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/extended_faq/'.$filename));

        //     $data['extended_faq_image'] = $filename;
        // }

        if($request->input('extended_faq_id') != '') {
            // update
            DB::table('extended_faq')
                ->where('extended_faq_id', $request->input('extended_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['extended_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('extended_faq')->insert($data);
        }
        return redirect('backend/extended_faq/');
    }
    // end extended_faq

    // business_faq
    public function business_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.business_faq.list');
    }

    public function business_faqServerProcessing() {
        $query = DB::table('business_faq')
            ->orderBy('business_faq.business_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/business_faq/'.$r->business_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/business_faq/form/".$r->business_faq_id).'">Edit</a> / <a href="'.url("backend/business_faq/business_faq_delete/".$r->business_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function business_faq_form(Request $request, $business_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('business_faq')
            ->where('business_faq_id', $business_faq_id)
            ->first();

        return view('backend.business_faq.form', $data);
    }

    public function business_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'business_faq_question' => $request->input('business_faq_question'),
            'business_faq_answer' => $request->input('business_faq_answer'),
            'business_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('business_faq_image')) {

        //     $image = $request->file('business_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/business_faq/'.$filename));

        //     $data['business_faq_image'] = $filename;
        // }

        if($request->input('business_faq_id') != '') {
            // update
            DB::table('business_faq')
                ->where('business_faq_id', $request->input('business_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['business_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('business_faq')->insert($data);
        }
        return redirect('backend/business_faq/');
    }
    // end business_faq

    // insurance_business
    public function insurance_business(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_business.list');
    }

    public function insurance_businessServerProcessing() {
        $query = DB::table('insurance_business')
            ->orderBy('insurance_business.insurance_business_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_business/'.$r->insurance_business_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_business/form/".$r->insurance_business_id).'">Edit</a> / <a href="'.url("backend/insurance_business/insurance_business_delete/".$r->insurance_business_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_business_form(Request $request, $insurance_business_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_business')
            ->where('insurance_business_id', $insurance_business_id)
            ->first();

        return view('backend.insurance_business.form', $data);
    }

    public function insurance_businessSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_business_text_1' => $request->input('insurance_business_text_1'),
            'insurance_business_text_2' => $request->input('insurance_business_text_2'),
            'insurance_business_text_3' => $request->input('insurance_business_text_3'),
            'insurance_business_text_4' => $request->input('insurance_business_text_4'),
            'insurance_business_price' => $request->input('insurance_business_price'),
            'insurance_business_price_per_year' => $request->input('insurance_business_price_per_year'),
            'insurance_business_fire' => $request->input('insurance_business_fire'),
            'insurance_business_money_salary' => $request->input('insurance_business_money_salary'),
            'insurance_business_money' => $request->input('insurance_business_money'),
            'insurance_business_die' => $request->input('insurance_business_die'),
            'insurance_business_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_business_image')) {

        //     $image = $request->file('insurance_business_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_business/'.$filename));

        //     $data['insurance_business_image'] = $filename;
        // }

        if($request->input('insurance_business_id') != '') {
            // update
            DB::table('insurance_business')
                ->where('insurance_business_id', $request->input('insurance_business_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_business_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_business')->insert($data);
        }
        return redirect('backend/insurance_business/');
    }
    // end insurance_business

    // contact_business
    public function contact_business(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_business.list');
    }

    public function contact_businessServerProcessing() {
        $query = DB::table('contact_business')
            ->select('contact_business.contact_business_id', 'insurance_business.insurance_business_price', 'contact_business.contact_business_name_surname', 'contact_business.contact_business_tel', 'contact_business.contact_business_email', 'contact_business.contact_business_call', 'contact_business.contact_business_datetime_create')
            ->join('insurance_business', 'contact_business.insurance_business_id', '=', 'insurance_business.insurance_business_id')
            ->orderBy('contact_business.contact_business_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_business/'.$r->contact_business_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_business/form/".$r->contact_business_id).'">Edit</a> / <a href="'.url("backend/contact_business/contact_business_delete/".$r->contact_business_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_business

    // transportation_faq
    public function transportation_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.transportation_faq.list');
    }

    public function transportation_faqServerProcessing() {
        $query = DB::table('transportation_faq')
            ->orderBy('transportation_faq.transportation_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/transportation_faq/'.$r->transportation_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/transportation_faq/form/".$r->transportation_faq_id).'">Edit</a> / <a href="'.url("backend/transportation_faq/transportation_faq_delete/".$r->transportation_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function transportation_faq_form(Request $request, $transportation_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('transportation_faq')
            ->where('transportation_faq_id', $transportation_faq_id)
            ->first();

        return view('backend.transportation_faq.form', $data);
    }

    public function transportation_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'transportation_faq_question' => $request->input('transportation_faq_question'),
            'transportation_faq_answer' => $request->input('transportation_faq_answer'),
            'transportation_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('transportation_faq_image')) {

        //     $image = $request->file('transportation_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/transportation_faq/'.$filename));

        //     $data['transportation_faq_image'] = $filename;
        // }

        if($request->input('transportation_faq_id') != '') {
            // update
            DB::table('transportation_faq')
                ->where('transportation_faq_id', $request->input('transportation_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['transportation_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('transportation_faq')->insert($data);
        }
        return redirect('backend/transportation_faq/');
    }
    // end transportation_faq

    // contact_extended
    public function contact_extended(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_extended.list');
    }

    public function contact_extendedServerProcessing() {
        $query = DB::table('contact_extended')
            ->select('contact_extended.contact_extended_id', 'extended_insurance.extended_insurance_plan', 'contact_extended.contact_extended_name_surname', 'contact_extended.contact_extended_tel', 'contact_extended.contact_extended_email', 'contact_extended.contact_extended_call', 'contact_extended.contact_extended_datetime_create')
            ->join('extended_insurance', 'contact_extended.insurance_extended_id', '=', 'extended_insurance.extended_insurance_id')
            ->orderBy('contact_extended.contact_extended_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_extended/'.$r->contact_extended_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_extended/form/".$r->contact_extended_id).'">Edit</a> / <a href="'.url("backend/contact_extended/contact_extended_delete/".$r->contact_extended_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_extended

    // insurance_transportation
    public function insurance_transportation(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_transportation.list');
    }

    public function insurance_transportationServerProcessing() {
        $query = DB::table('insurance_transportation')
            ->join('insurance_company', 'insurance_transportation.insurance_company_id', '=', 'insurance_company.insurance_company_id')
            ->select('insurance_transportation.insurance_transportation_id', 'insurance_company.insurance_company_name', 'insurance_transportation.insurance_transportation_row')
            ->orderBy('insurance_transportation.insurance_transportation_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_transportation/'.$r->insurance_transportation_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_transportation/form/".$r->insurance_transportation_id).'">Edit</a> / <a href="'.url("backend/insurance_transportation/insurance_transportation_delete/".$r->insurance_transportation_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_transportation_form(Request $request, $insurance_transportation_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_transportation')
            ->where('insurance_transportation.insurance_transportation_id', $insurance_transportation_id)
            ->first();

        $data['company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        return view('backend.insurance_transportation.form', $data);
    }

    public function insurance_transportationSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_transportation_plan' => $request->input('insurance_transportation_plan'),
            'insurance_transportation_price' => $request->input('insurance_transportation_price'),
            'insurance_company_id' => $request->input('insurance_company_id'),
            'insurance_transportation_row' => $request->input('insurance_transportation_row'),
            'insurance_transportation_text1' => $request->input('insurance_transportation_text1'),
            'insurance_transportation_text2' => $request->input('insurance_transportation_text2'),
            'insurance_transportation_text3' => $request->input('insurance_transportation_text3'),
            'insurance_transportation_text4' => $request->input('insurance_transportation_text4'),
            'insurance_transportation_text5' => $request->input('insurance_transportation_text5'),
            'insurance_transportation_text6' => $request->input('insurance_transportation_text6'),
            'insurance_transportation_text7' => $request->input('insurance_transportation_text7'),
            'insurance_transportation_1' => $request->input('insurance_transportation_1'),
            'insurance_transportation_2' => $request->input('insurance_transportation_2'),
            'insurance_transportation_3' => $request->input('insurance_transportation_3'),
            'insurance_transportation_4' => $request->input('insurance_transportation_4'),
            'insurance_transportation_5' => $request->input('insurance_transportation_5'),
            'insurance_transportation_6' => $request->input('insurance_transportation_6'),
            'insurance_transportation_7' => $request->input('insurance_transportation_7'),
            'insurance_transportation_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_transportation_image')) {

        //     $image = $request->file('insurance_transportation_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_transportation/'.$filename));

        //     $data['insurance_transportation_image'] = $filename;
        // }

        if($request->input('insurance_transportation_id') != '') {
            // update
            DB::table('insurance_transportation')
                ->where('insurance_transportation_id', $request->input('insurance_transportation_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_transportation_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_transportation')->insert($data);
        }
        return redirect('backend/insurance_transportation/');
    }
    // end insurance_transportation

    // contact_transportation
    public function contact_transportation(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_transportation.list');
    }

    public function contact_transportationServerProcessing() {
        $query = DB::table('contact_transportation')
            ->select('contact_transportation_id', 'insurance_transportation_plan', 'contact_transportation_name_surname', 'contact_transportation_telephone', 'contact_transportation_email', 'contact_transportation_call', 'contact_transportation_datetime_create')
            ->join('insurance_transportation', 'contact_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->orderBy('contact_transportation_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_transportation/'.$r->contact_transportation_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_transportation/form/".$r->contact_transportation_id).'">Edit</a> / <a href="'.url("backend/contact_transportation/contact_transportation_delete/".$r->contact_transportation_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_transportation

    // detail_transportation
    public function detail_transportation(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.detail_transportation.list');
    }

    public function detail_transportationServerProcessing() {
        $query = DB::table('detail_transportation')
            ->select('detail_transportation_id', 'insurance_transportation_plan', 'detail_transportation_name_surname', 'detail_transportation_telephone', 'detail_transportation_email', 'detail_transportation_datetime_create')
            ->join('insurance_transportation', 'detail_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->orderBy('detail_transportation_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/detail_transportation/'.$r->detail_transportation_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/detail_transportation/form/".$r->detail_transportation_id).'">Edit</a> / <a href="'.url("backend/detail_transportation/detail_transportation_delete/".$r->detail_transportation_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End detail_transportation

    // confirm_transportation
    public function confirm_transportation(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.confirm_transportation.list');
    }

    public function confirm_transportationServerProcessing() {
        $query = DB::table('confirm_transportation')
            ->select('confirm_transportation_id', 'insurance_transportation_plan', 'confirm_transportation_name_surname', 'confirm_transportation_telephone', 'confirm_transportation_email', 'confirm_transportation_call', 'confirm_transportation_datetime_create')
            ->join('insurance_transportation', 'confirm_transportation.insurance_transportation_id', '=', 'insurance_transportation.insurance_transportation_id')
            ->orderBy('confirm_transportation_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/confirm_transportation/'.$r->confirm_transportation_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/confirm_transportation/form/".$r->confirm_transportation_id).'">Edit</a> / <a href="'.url("backend/confirm_transportation/confirm_transportation_delete/".$r->confirm_transportation_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End confirm_transportation
}