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

class BannerSlideController extends Controller implements HasImagesContract
{
    use HasImages;

    // banner_slide
    public function banner_slide(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.banner_slide.list');
    }

    public function banner_slideServerProcessing() {
        $query = DB::table('banner_slide')
            ->orderBy('banner_slide.banner_slide_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('banner_slide_image', function($r) {
                return '<img src="'.asset('public/uploads/banner_slide/'.$r->banner_slide_image).'" width="150">';
            })
            ->addColumn('banner_slide_image_mobile', function($r) {
                return '<img src="'.asset('public/uploads/banner_slide/'.$r->banner_slide_image_mobile).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/banner_slide/banner_slide_form/".$r->banner_slide_id).'">Edit</a> / <a href="'.url("backend/banner_slide/banner_slide_delete/".$r->banner_slide_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['banner_slide_image', 'banner_slide_image_mobile', 'action'])->make(true);
    }

    public function banner_slide_form(Request $request, $banner_slide_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('banner_slide')
            ->where('banner_slide_id', $banner_slide_id)
            ->first();

        return view('backend.banner_slide.form', $data);
    }

    public function banner_slideSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'banner_slide_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('banner_slide_image')) {

            $image = $request->file('banner_slide_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(1920, 937);
            $image_resize->save(public_path('uploads/banner_slide/'.$filename));

            $data['banner_slide_image'] = $filename;
        }

        if($request->hasFile('banner_slide_image_mobile')) {

            $image = $request->file('banner_slide_image_mobile');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(768, 900);
            $image_resize->save(public_path('uploads/banner_slide/'.$filename));

            $data['banner_slide_image_mobile'] = $filename;
        }

        if($request->input('banner_slide_id') != '') {
            // update
            DB::table('banner_slide')
                ->where('banner_slide_id', $request->input('banner_slide_id'))
                ->update($data);
        } else {
            // insert
            $data['banner_slide_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('banner_slide')->insert($data);
        }
        return redirect('backend/banner_slide/');
    }
    // end banner_slide
}