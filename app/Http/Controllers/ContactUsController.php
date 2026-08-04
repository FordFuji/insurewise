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

class ContactUsController extends Controller implements HasImagesContract
{
    use HasImages;

    // contact_us_form
    public function contact_us_form(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_us_form.list');
    }

    public function contact_us_formServerProcessing() {
        $query = DB::table('contact_us_form')
            ->orderBy('contact_us_form.contact_us_form_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_us_form/'.$r->contact_us_form_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_us_form/form/".$r->contact_us_form_id).'">Edit</a> / <a href="'.url("backend/contact_us_form/contact_us_form_delete/".$r->contact_us_form_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function contact_us_form_form(Request $request, $contact_us_form_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('contact_us_form')
            ->where('contact_us_form_id', $contact_us_form_id)
            ->first();

        return view('backend.contact_us_form.form', $data);
    }

    public function contact_us_formSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'contact_us_form_name' => $request->input('contact_us_form_name'),
            'contact_us_form_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('contact_us_form_image')) {

        //     $image = $request->file('contact_us_form_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/contact_us_form/'.$filename));

        //     $data['contact_us_form_image'] = $filename;
        // }

        if($request->input('contact_us_form_id') != '') {
            // update
            DB::table('contact_us_form')
                ->where('contact_us_form_id', $request->input('contact_us_form_id'))
                ->update($data);
        } else {
            // insert
            $data['contact_us_form_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('contact_us_form')->insert($data);
        }
        return redirect('backend/contact_us_form/');
    }
    // end contact_us_form
}