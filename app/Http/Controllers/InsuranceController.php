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

class InsuranceController extends Controller implements HasImagesContract
{
    use HasImages;

    // insurance_company
    public function insurance_company(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_company.list');
    }

    public function insurance_companyServerProcessing() {
        $query = DB::table('insurance_company')
            ->orderBy('insurance_company.insurance_company_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_company_logo', function($r) {
                return '<img src="'.asset('public/uploads/insurance_company/'.$r->insurance_company_logo).'" width="29">';
            })
            ->addColumn('insurance_company_logo2', function($r) {
                return '<img src="'.asset('public/uploads/insurance_company/'.$r->insurance_company_logo2).'" width="29">';
            })
            ->addColumn('insurance_company_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_company/'.$r->insurance_company_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_company/form/".$r->insurance_company_id).'">Edit</a> / <a href="'.url("backend/insurance_company/insurance_company_delete/".$r->insurance_company_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_company_logo2', 'insurance_company_logo', 'insurance_company_image', 'action'])->make(true);
    }

    public function insurance_company_form(Request $request, $insurance_company_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_company')
            ->where('insurance_company_id', $insurance_company_id)
            ->first();

        return view('backend.insurance_company.form', $data);
    }

    public function insurance_companySaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_company_name' => $request->input('insurance_company_name'),
            'insurance_company_link' => $request->input('insurance_company_link'),
            'insurance_company_datetime_update' => date('Y-m-d H:i:s')
        );

        $i = 0;

        if($request->hasFile('insurance_company_logo')) {

            $image = $request->file('insurance_company_logo');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').$i.'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(70, 70);
            $image_resize->save(public_path('uploads/insurance_company/'.$filename));

            $data['insurance_company_logo'] = $filename;
        }

        $i++;

        if($request->hasFile('insurance_company_logo2')) {

            $image = $request->file('insurance_company_logo2');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').$i.'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(29, 29);
            $image_resize->save(public_path('uploads/insurance_company/'.$filename));

            $data['insurance_company_logo2'] = $filename;
        }

        $i++;

        if($request->hasFile('insurance_company_image')) {

            $image = $request->file('insurance_company_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').$i.'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(148, 27);
            $image_resize->save(public_path('uploads/insurance_company/'.$filename));

            $data['insurance_company_image'] = $filename;
        }

        if($request->input('insurance_company_id') != '') {
            // update
            DB::table('insurance_company')
                ->where('insurance_company_id', $request->input('insurance_company_id'))
                ->update($data);
        } else {
            // insert
            $data['insurance_company_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_company')->insert($data);
        }
        return redirect('backend/insurance_company/');
    }
    // end insurance_company
}