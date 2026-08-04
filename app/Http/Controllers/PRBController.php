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

class PRBController extends Controller implements HasImagesContract
{
    use HasImages;

    // prb_faq
    public function prb_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.prb_faq.list');
    }

    public function prb_faqServerProcessing() {
        $query = DB::table('prb_faq')
            ->orderBy('prb_faq.prb_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/prb_faq/'.$r->prb_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/prb_faq/form/".$r->prb_faq_id).'">Edit</a> / <a href="'.url("backend/prb_faq/prb_faq_delete/".$r->prb_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function prb_faq_form(Request $request, $prb_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('prb_faq')
            ->where('prb_faq_id', $prb_faq_id)
            ->first();

        return view('backend.prb_faq.form', $data);
    }

    public function prb_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'prb_faq_question' => $request->input('prb_faq_question'),
            'prb_faq_answer' => $request->input('prb_faq_answer'),
            'prb_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('prb_faq_image')) {

        //     $image = $request->file('prb_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/prb_faq/'.$filename));

        //     $data['prb_faq_image'] = $filename;
        // }

        if($request->input('prb_faq_id') != '') {
            // update
            DB::table('prb_faq')
                ->where('prb_faq_id', $request->input('prb_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['prb_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('prb_faq')->insert($data);
        }
        return redirect('backend/prb_faq/');
    }
    // end prb_faq

    // prb
    public function prb(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['prb_pdf'] = DB::table('prb_pdf')
            ->where('prb_pdf_id', '=', 1)
            ->where('prb_pdf_file', '!=', '')
            ->first();

        return view('backend.prb.list', $data);
    }

    public function prbServerProcessing() {
        $query = DB::table('prb')
            ->orderBy('prb.prb_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('prb_image', function($r) {
                return '<img src="'.asset('public/uploads/prb/'.$r->prb_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/prb/form/".$r->prb_id).'">Edit</a> / <a href="'.url("backend/prb/prb_delete/".$r->prb_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['prb_image', 'action'])->make(true);
    }

    public function prb_form(Request $request, $prb_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('prb')
            ->where('prb_id', $prb_id)
            ->first();

        return view('backend.prb.form', $data);
    }

    public function prbSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'prb_text1' => $request->input('prb_text1'),
            'prb_text2' => $request->input('prb_text2'),
            'prb_text1_1' => $request->input('prb_text1_1'),
            'prb_text1_2' => $request->input('prb_text1_2'),
            'prb_text2_1' => $request->input('prb_text2_1'),
            'prb_text2_2' => $request->input('prb_text2_2'),
            'prb_text2_3' => $request->input('prb_text2_3'),
            'prb_text2_4' => $request->input('prb_text2_4'),
            'prb_name' => $request->input('prb_name'),
            'prb_name2' => $request->input('prb_name2'),
            'prb_name3' => $request->input('prb_name3'),
            'prb_price' => $request->input('prb_price'),
            'prb_medical_expenses_price1' => $request->input('prb_medical_expenses_price1'),
            'prb_died_price1' => $request->input('prb_died_price1'),
            'prb_medical_expenses_price2' => $request->input('prb_medical_expenses_price2'),
            'prb_died_price2' => $request->input('prb_died_price2'),
            'prb_dismemberment_price' => $request->input('prb_dismemberment_price'),
            'prb_daily_compensation_price' => $request->input('prb_daily_compensation_price'),
            'prb_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('prb_image')) {

            $image = $request->file('prb_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(91, 91);
            $image_resize->save(public_path('uploads/prb/'.$filename));

            $data['prb_image'] = $filename;
        }

        if($request->input('prb_id') != '') {
            // update
            DB::table('prb')
                ->where('prb_id', $request->input('prb_id'))
                ->update($data);
        } else {
            // insert
            $data['prb_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('prb')->insert($data);
        }
        return redirect('backend/prb/');
    }

    public function prb_pdf(Request $request) {
        if(move_uploaded_file($_FILES['prb_pdf_file']['tmp_name'], public_path('uploads/prb/'.$_FILES['prb_pdf_file']['name']))) {
            $data_pdf = array(
                'prb_pdf_file' => $_FILES['prb_pdf_file']['name'],
                'prb_pdf_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('prb_pdf')
                ->where('prb_pdf_id', '=', 1)
                ->update($data_pdf);
        }

        // if($request->hasFile('prb_pdf_file')) {

        //     $image = $request->file('prb_pdf_file');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.pdf';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     //$image_resize->resize(91, 91);
        //     $image_resize->save(public_path('uploads/prb/'.$filename));

        //     $data_pdf = array(
        //         'prb_pdf_file' => $filename,
        //         'prb_pdf_datetime_update' => date('Y-m-d H:i:s')
        //     );

        //     DB::table('prb_pdf')
        //         ->where('prb_pdf_id', '=', 1)
        //         ->update($data_pdf);
        // }

        return redirect('backend/prb');
    }
    // end prb
}