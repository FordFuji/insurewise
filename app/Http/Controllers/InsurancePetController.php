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

class InsurancePetController extends Controller implements HasImagesContract
{
    use HasImages;

    // pet_faq
    public function pet_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.pet_faq.list');
    }

    public function pet_faqServerProcessing() {
        $query = DB::table('pet_faq')
            ->orderBy('pet_faq.pet_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/pet_faq/'.$r->pet_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/pet_faq/form/".$r->pet_faq_id).'">Edit</a> / <a href="'.url("backend/pet_faq/pet_faq_delete/".$r->pet_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function pet_faq_form(Request $request, $pet_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('pet_faq')
            ->where('pet_faq_id', $pet_faq_id)
            ->first();

        return view('backend.pet_faq.form', $data);
    }

    public function pet_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'pet_faq_question' => $request->input('pet_faq_question'),
            'pet_faq_answer' => $request->input('pet_faq_answer'),
            'pet_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('pet_faq_image')) {

        //     $image = $request->file('pet_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/pet_faq/'.$filename));

        //     $data['pet_faq_image'] = $filename;
        // }

        if($request->input('pet_faq_id') != '') {
            // update
            DB::table('pet_faq')
                ->where('pet_faq_id', $request->input('pet_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['pet_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('pet_faq')->insert($data);
        }
        return redirect('backend/pet_faq/');
    }
    // end pet_faq

    // insurance_pet
    public function insurance_pet(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_pet.list');
    }

    public function insurance_petServerProcessing() {
        $query = DB::table('insurance_pet')
            ->orderBy('insurance_pet.insurance_pet_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_pet_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_pet/'.$r->insurance_pet_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_pet/form/".$r->insurance_pet_id).'">Edit</a> / <a href="'.url("backend/insurance_pet/insurance_pet_delete/".$r->insurance_pet_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_pet_image', 'action'])->make(true);
    }

    public function insurance_pet_form(Request $request, $insurance_pet_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_pet')
            ->where('insurance_pet_id', $insurance_pet_id)
            ->first();

        $data['rows'] = DB::table('insurance_pet_row')
            ->orderBy('insurance_pet_row_id', 'asc')
            ->get();

        return view('backend.insurance_pet.form', $data);
    }

    public function insurance_petSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_pet_text1' => $request->input('insurance_pet_text1'),
            'insurance_pet_text2' => $request->input('insurance_pet_text2'),
            'insurance_pet_text3' => $request->input('insurance_pet_text3'),
            'insurance_pet_text4' => $request->input('insurance_pet_text4'),
            'insurance_pet_text5' => $request->input('insurance_pet_text5'),
            'insurance_pet_text6' => $request->input('insurance_pet_text6'),
            'insurance_pet_text7' => $request->input('insurance_pet_text7'),
            'insurance_pet_name' => $request->input('insurance_pet_name'),
            'insurance_pet_plan' => $request->input('insurance_pet_plan'),
            'insurance_pet_premium_price' => $request->input('insurance_pet_premium_price'),
            'insurance_pet_row_id' => $request->input('insurance_pet_row_id'),
            'insurance_pet_accident' => $request->input('insurance_pet_accident'),
            'insurance_pet_sick' => $request->input('insurance_pet_sick'),
            'insurance_pet_vaccine' => $request->input('insurance_pet_vaccine'),
            'insurance_pet_deposit' => $request->input('insurance_pet_deposit'),
            'insurance_pet_injured' => $request->input('insurance_pet_injured'),
            'insurance_pet_funeral' => $request->input('insurance_pet_funeral'),
            'insurance_pet_property' => $request->input('insurance_pet_property'),
            'insurance_pet_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_pet_image')) {

            $image = $request->file('insurance_pet_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(91, 68);
            $image_resize->save(public_path('uploads/insurance_pet/'.$filename));

            $data['insurance_pet_image'] = $filename;
        }

        if($request->input('insurance_pet_id') != '') {
            // update
            DB::table('insurance_pet')
                ->where('insurance_pet_id', $request->input('insurance_pet_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_pet_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_pet')->insert($data);
        }
        return redirect('backend/insurance_pet/');
    }
    // end insurance_pet

    // insurance_pet_row
    public function insurance_pet_row(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_pet_row.list');
    }

    public function insurance_pet_rowServerProcessing() {
        $query = DB::table('insurance_pet_row')
            ->orderBy('insurance_pet_row.insurance_pet_row_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_pet_row/'.$r->insurance_pet_row_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_pet_row/form/".$r->insurance_pet_row_id).'">Edit</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_pet_row_form(Request $request, $insurance_pet_row_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_pet_row')
            ->where('insurance_pet_row_id', $insurance_pet_row_id)
            ->first();

        return view('backend.insurance_pet_row.form', $data);
    }

    public function insurance_pet_rowSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_pet_row_name' => $request->input('insurance_pet_row_name'),
            'insurance_pet_row_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_pet_row_image')) {

        //     $image = $request->file('insurance_pet_row_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_pet_row/'.$filename));

        //     $data['insurance_pet_row_image'] = $filename;
        // }

        if($request->input('insurance_pet_row_id') != '') {
            // update
            DB::table('insurance_pet_row')
                ->where('insurance_pet_row_id', $request->input('insurance_pet_row_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_pet_row_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_pet_row')->insert($data);
        }
        return redirect('backend/insurance_pet_row/');
    }
    // end insurance_pet_row

    // contact_pet
    public function contact_pet(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_pet.list');
    }

    public function contact_petServerProcessing() {
        $query = DB::table('contact_pet')
            ->join('insurance_pet', 'contact_pet.insurance_pet_id', '=', 'insurance_pet.insurance_pet_id')
            ->select('contact_pet.contact_pet_id', 'insurance_pet.insurance_pet_name', 'contact_pet.contact_pet_name_surname', 'contact_pet.contact_pet_tel', 'contact_pet.contact_pet_email', 'contact_pet.contact_pet_call', 'contact_pet.contact_pet_datetime_create')
            ->orderBy('contact_pet.contact_pet_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_pet/'.$r->contact_pet_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_pet/form/".$r->contact_pet_id).'">Edit</a> / <a href="'.url("backend/contact_pet/contact_pet_delete/".$r->contact_pet_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }

    // contact_pet_detail
    public function contact_pet_detail(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_pet_detail.list');
    }

    public function contact_pet_detailServerProcessing() {
        $query = DB::table('contact_pet_detail')
            ->join('insurance_pet', 'contact_pet_detail.insurance_pet_id', '=', 'insurance_pet.insurance_pet_id')
            ->select('contact_pet_detail.contact_pet_detail_id', 'insurance_pet.insurance_pet_name', 'contact_pet_detail.contact_pet_detail_name_surname', 'contact_pet_detail.contact_pet_detail_tel', 'contact_pet_detail.contact_pet_detail_email', 'contact_pet_detail.contact_pet_detail_datetime_create')
            ->orderBy('contact_pet_detail.contact_pet_detail_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_pet_detail/'.$r->contact_pet_detail_image).'" width="150">';
        //     })
            // ->addColumn('action', function($r) {
            //     return '<a href="'.url("backend/contact_pet_detail/form/".$r->contact_pet_detail_id).'">Edit</a> / <a href="'.url("backend/contact_pet_detail/contact_pet_detail_delete/".$r->contact_pet_detail_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            // })
            // ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_pet_detail
}