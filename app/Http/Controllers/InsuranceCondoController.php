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

class InsuranceCondoController extends Controller implements HasImagesContract
{
    use HasImages;

    // insurance_condo_row
    public function insurance_condo_row(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_condo_row.list');
    }

    public function insurance_condo_rowServerProcessing() {
        $query = DB::table('insurance_condo_row')
            ->orderBy('insurance_condo_row.insurance_condo_row_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/insurance_condo_row/'.$r->insurance_condo_row_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_condo_row/form/".$r->insurance_condo_row_id).'">Edit</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function insurance_condo_row_form(Request $request, $insurance_condo_row_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_condo_row')
            ->where('insurance_condo_row_id', $insurance_condo_row_id)
            ->first();

        return view('backend.insurance_condo_row.form', $data);
    }

    public function insurance_condo_rowSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_condo_row_name' => $request->input('insurance_condo_row_name'),
            'insurance_condo_row_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('insurance_condo_row_image')) {

        //     $image = $request->file('insurance_condo_row_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/insurance_condo_row/'.$filename));

        //     $data['insurance_condo_row_image'] = $filename;
        // }

        if($request->input('insurance_condo_row_id') != '') {
            // update
            DB::table('insurance_condo_row')
                ->where('insurance_condo_row_id', $request->input('insurance_condo_row_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_condo_row_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_condo_row')->insert($data);
        }
        return redirect('backend/insurance_condo_row/');
    }
    // end insurance_condo_row

    // insurance_condo
    public function insurance_condo(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['transportation_pdf'] = DB::table('condo_pdf')
            ->where('condo_pdf_id', '=', 1)
            ->where('condo_pdf_file', '!=', '')
            ->first();

        return view('backend.insurance_condo.list', $data);
    }

    public function insurance_condoServerProcessing() {
        $query = DB::table('insurance_condo')
            ->orderBy('insurance_condo.insurance_condo_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_condo_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_condo/'.$r->insurance_condo_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_condo/form/".$r->insurance_condo_id).'">Edit</a> / <a href="'.url("backend/insurance_condo/insurance_condo_delete/".$r->insurance_condo_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_condo_image', 'action'])->make(true);
    }

    public function insurance_condo_form(Request $request, $insurance_condo_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_condo')
            ->where('insurance_condo_id', $insurance_condo_id)
            ->first();

        $data['rows'] = DB::table('insurance_condo_row')
            ->orderBy('insurance_condo_row_id', 'asc')
            ->get();

        $data['insurance_condo'] = DB::table('insurance_condo')
            ->orderBy('insurance_condo_id', 'asc')
            ->get();

        return view('backend.insurance_condo.form', $data);
    }

    public function insurance_condoSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_condo_row_id' => $request->input('insurance_condo_row_id'),
            'insurance_condo_text1' => $request->input('insurance_condo_text1'),
            'insurance_condo_text2' => $request->input('insurance_condo_text2'),
            'insurance_condo_text3' => $request->input('insurance_condo_text3'),
            'insurance_condo_text4' => $request->input('insurance_condo_text4'),
            'insurance_condo_text5' => $request->input('insurance_condo_text5'),
            'insurance_condo_text6' => $request->input('insurance_condo_text6'),
            'insurance_condo_text7' => $request->input('insurance_condo_text7'),
            'insurance_condo_name' => $request->input('insurance_condo_name'),
            'insurance_condo_plan' => $request->input('insurance_condo_plan'),
            'insurance_condo_premium_price' => $request->input('insurance_condo_premium_price'),
            'insurance_condo_accident' => $request->input('insurance_condo_accident'),
            'insurance_condo_sick' => $request->input('insurance_condo_sick'),
            'insurance_condo_vaccine' => $request->input('insurance_condo_vaccine'),
            'insurance_condo_deposit' => $request->input('insurance_condo_deposit'),
            'insurance_condo_injured' => $request->input('insurance_condo_injured'),
            'insurance_condo_funeral' => $request->input('insurance_condo_funeral'),
            'insurance_condo_property' => $request->input('insurance_condo_property'),
            'insurance_condo_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_condo_image')) {

            $image = $request->file('insurance_condo_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(91, 68);
            $image_resize->save(public_path('uploads/insurance_condo/'.$filename));

            $data['insurance_condo_image'] = $filename;
        }

        if($request->input('insurance_condo_id') != '') {
            // update
            DB::table('insurance_condo')
                ->where('insurance_condo_id', $request->input('insurance_condo_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_condo_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_condo')->insert($data);
        }
        return redirect('backend/insurance_condo/');
    }

    public function condo_pdf(Request $request) {
        if(move_uploaded_file($_FILES['condo_pdf_file']['tmp_name'], public_path('uploads/condo/'.$_FILES['condo_pdf_file']['name']))) {
            $data_pdf = array(
                'condo_pdf_file' => $_FILES['condo_pdf_file']['name'],
                'condo_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('condo_pdf')
                ->where('condo_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/prb');
    }
    // end insurance_condo

    // condo_faq
    public function condo_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.condo_faq.list');
    }

    public function condo_faqServerProcessing() {
        $query = DB::table('condo_faq')
            ->orderBy('condo_faq.condo_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/condo_faq/'.$r->condo_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/condo_faq/form/".$r->condo_faq_id).'">Edit</a> / <a href="'.url("backend/condo_faq/condo_faq_delete/".$r->condo_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';

                // return '<a href="'.url("backend/condo_faq/form/".$r->condo_faq_id).'">Edit</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function condo_faq_form(Request $request, $condo_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('condo_faq')
            ->where('condo_faq_id', $condo_faq_id)
            ->first();

        return view('backend.condo_faq.form', $data);
    }

    public function condo_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'condo_faq_question' => $request->input('condo_faq_question'),
            'condo_faq_answer' => $request->input('condo_faq_answer'),
            'condo_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('condo_faq_image')) {

        //     $image = $request->file('condo_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/condo_faq/'.$filename));

        //     $data['condo_faq_image'] = $filename;
        // }

        if($request->input('condo_faq_id') != '') {
            // update
            DB::table('condo_faq')
                ->where('condo_faq_id', $request->input('condo_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['condo_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('condo_faq')->insert($data);
        }
        return redirect('backend/condo_faq/');
    }
    // end condo_faq

    // contact_condo
    public function contact_condo(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_condo.list');
    }

    public function contact_condoServerProcessing() {
        $query = DB::table('contact_condo')
            ->join('insurance_condo', 'contact_condo.insurance_condo_id', '=', 'insurance_condo.insurance_condo_id')
            ->select('contact_condo.contact_condo_id', 'insurance_condo.insurance_condo_name', 'contact_condo.contact_condo_name_surname', 'contact_condo.contact_condo_telephone', 'contact_condo.contact_condo_email', 'contact_condo.contact_condo_call', 'contact_condo.contact_condo_datetime_create')
            ->orderBy('contact_condo.contact_condo_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_condo/'.$r->contact_condo_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_condo/form/".$r->contact_condo_id).'">Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_condo

    // contact_condo_detail
    public function contact_condo_detail(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_condo_detail.list');
    }

    public function contact_condo_detailServerProcessing(Request $request) {
        $query = DB::table('contact_condo_detail')
            ->join('insurance_condo', 'contact_condo_detail.insurance_condo_id', '=', 'insurance_condo.insurance_condo_id')
            ->select('contact_condo_detail.contact_condo_detail_id', 'insurance_condo.insurance_condo_name', 'contact_condo_detail.contact_condo_detail_name_surname', 'contact_condo_detail.contact_condo_detail_telephone', 'contact_condo_detail.contact_condo_detail_email', 'contact_condo_detail.contact_condo_detail_datetime_create')
            ->orderBy('contact_condo_detail.contact_condo_detail_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_condo_detail/'.$r->contact_condo_detail_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_condo_detail/form/".$r->contact_condo_detail_id).'">Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    // End contact_condo_detail

    // All Upload PDF
    public function transportation_pdf(Request $request) {
        if(move_uploaded_file($_FILES['transportation_pdf']['tmp_name'], public_path('uploads/condo/'.$_FILES['transportation_pdf']['name']))) {
            $data_pdf = array(
                'transportation_pdf' => $_FILES['transportation_pdf']['name'],
                'insurance_download_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('insurance_upload_pdf')
                ->where('insurance_download_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/insurance_transportation');
    }

    public function travel_pdf(Request $request) {
        if(move_uploaded_file($_FILES['travel_pdf']['tmp_name'], public_path('uploads/condo/'.$_FILES['travel_pdf']['name']))) {
            $data_pdf = array(
                'travel_pdf' => $_FILES['travel_pdf']['name'],
                'insurance_download_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('insurance_upload_pdf')
                ->where('insurance_download_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/insurance_travel');
    }

    public function golf_pdf(Request $request) {
        if(move_uploaded_file($_FILES['golf_pdf']['tmp_name'], public_path('uploads/condo/'.$_FILES['golf_pdf']['name']))) {
            $data_pdf = array(
                'golf_pdf' => $_FILES['golf_pdf']['name'],
                'insurance_download_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('insurance_upload_pdf')
                ->where('insurance_download_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/insurance_golf');
    }

    public function business_pdf(Request $request) {
        if(move_uploaded_file($_FILES['business_pdf']['tmp_name'], public_path('uploads/condo/'.$_FILES['business_pdf']['name']))) {
            $data_pdf = array(
                'business_pdf' => $_FILES['business_pdf']['name'],
                'insurance_download_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('insurance_upload_pdf')
                ->where('insurance_download_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/insurance_business');
    }

    public function home_pdf(Request $request) {
        if(move_uploaded_file($_FILES['home_pdf']['tmp_name'], public_path('uploads/condo/'.$_FILES['home_pdf']['name']))) {
            $data_pdf = array(
                'home_pdf' => $_FILES['home_pdf']['name'],
                'insurance_download_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('insurance_upload_pdf')
                ->where('insurance_download_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        return redirect('backend/insurance_home');
    }
}